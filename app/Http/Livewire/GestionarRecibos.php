<?php

namespace App\Http\Livewire;

use App\Clases\ReciboClass;
use App\Models\Categoria;
use App\Models\Cmatricula;
use App\Models\Comprobante;
use App\Models\Cuota;
use App\Models\Curso;
use App\Models\Detalle;
use App\Models\Gmatricula;
use App\Models\Modalidad;
use App\Models\Mpago;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class GestionarRecibos extends Component
{
    #buscar matricula
    public $bcategoria,$bestudiante,$bcurso,$bmodalidad,$bcuota,$modalidades = [],$cuotas = [];
    public $finicio;
    public $ffinal;
    public $hcliente;
    public $listaServicios, $servicioSeleccionado;
    public $cantidad, $costo, $importe, $detallePedido, $total;
    public $forma_pago, $f_emision, $card_body_btn_generar_comprobante, $editar_comprobante_id, $editar_detalle_id;
    public $editandoItem, $card_header_servicio, $card_body_btn_servicio, $card_header_recibo;
    protected $listeners = ['clienteIdToRecibo','eliminar_comprobante','actualizar_servicios'];


    public function actualizar_servicios(){
      $this->listaServicios = ['producto a','producto b'];
    }

    public function descargar_historial(){
        /*if($this->hcliente->id){
            $r_recibo = new ReciboClass();
            return $r_recibo->descargar_historial_cliente($this->hcliente);
        }*/
    }

    public function UpdatedBcurso(){
        $this->bmodalidad = '';
        $this->obtener_modalidad();
    }
    public function UpdatedBestudiante(){
        $this->emit('activar_buscador');
        $this->obtener_modalidad();
    }

    public function UpdatedBmodalidad(){
        $modalidad = Modalidad::find($this->bmodalidad);
        if ($modalidad) {
            $this->cuotas = Cuota::query()->where('modalidad_id',$modalidad->id);

            #verificar si la cuota ya fue seleccionado en el array
            foreach ($this->detallePedido as $key => $tcuota) {
                $scuota = $tcuota['cuota_id'];
                $this->cuotas->when($scuota != "",function ($q) use ($scuota) {
                    return $q->where('id','!=',$scuota);
                });
            }

            #verificar si el cliente ya pago la cuota en otro comprobante

            $this->cuotas= $this->cuotas->get();
        }
        else {
            $this->cuotas = [];
        }
    }

    public function obtener_modalidad(){
        $estudiante = User::where('email',$this->bestudiante)->first();
        $curso = User::where('id',$this->bcurso)->first();
        if ($estudiante && $curso) {
            $this->modalidades = Modalidad::where('curso_id',$curso->id)->get();
        }
        else {
            $this->modalidades = [];
        }
    }

    public function  mount($cliente_id=null){
        $this->resetRecibo();
        $this->resetErrorBag();
        $this->listaServicios = ['producto a','producto b'];
        $this->forma_pago = 'Efectivo';
        $this->card_header_recibo = 'RECIBO';
        $this->card_body_btn_generar_comprobante = 'Generar Comprobante';
        $this->f_emision = date('Y-m-d');
        $this->editar_comprobante_id = null;
        $this->finicio = null;
        $this->ffinal = null;
        $this->hcliente = new User();
        if ($cliente_id) {
            $this->hcliente = User::find($cliente_id);
            if ($this->hcliente->comprobantes != "[]") {
                $this->finicio = $this->hcliente->comprobantes->first()->femision;
                $this->ffinal = $this->hcliente->comprobantes->last()->femision;
            }
        }
    }

    public function resetNewItem(){
        $this->card_header_servicio = 'Cuotas y Matriculas';
        $this->card_body_btn_servicio = 'Agregar';
        $this->editar_detalle_id = null;
        $this->servicioSeleccionado = null;
        $this->cantidad = 1;
        $this->costo = 0;
        $this->updatedCantidad();
    }

    public function resetRecibo(){

        $this->detallePedido = collect();
        $this->total = 0;
        $this->editandoItem = null;
        $this->resetNewItem();
    }

    public function updatedCantidad(){
        $this->cantidad = $this->cantidad ? $this->cantidad : 1;
        $this->costo = $this->costo ? $this->costo : number_format(0, 2);
        $this->importe = number_format($this->cantidad * $this->costo, 2, '.', '');
    }

    public function updatedcosto(){

        $this->updatedCantidad();
    }

    /**
     * Recibe id del cliente para cargar sus datos y generar comprobante
     *
     * @param  $clienteid
     * @return void
     */
    public function clienteIdToRecibo($clienteid){

        $this->mount($clienteid);
        $this->emit('cerrar_modal');
    }

    public function eliminarItem($indice){

        $this->total = $this->total-$this->detallePedido[$indice]['importe'];
        unset($this->detallePedido[$indice]);
        $this->UpdatedBmodalidad();
    }

    public function editarItem($indice){
        $this->editandoItem = $indice;
        $this->card_header_servicio = 'Editando Servicio';
        $this->card_body_btn_servicio = 'Editar Servicio';
        $this->editar_detalle_id = isset($this->detallePedido[$indice]['id']) ? $this->detallePedido[$indice]['id'] : null;
        $this->emit('updateDescripcionServicio', $this->detallePedido[$indice]['descripcion']);
        $this->servicioSeleccionado = $this->detallePedido[$indice]['descripcion'];
        $this->cantidad = $this->detallePedido[$indice]['cantidad'];
        $this->costo = $this->detallePedido[$indice]['precio'];
        $this->importe = $this->detallePedido[$indice]['importe'];
    }

    public function agregar_item(Detalle $newItem){

        $this->resetErrorBag();
        $this->abrirModal();
        $this->validateCliente();

        $lcuota = Cuota::find($this->bcuota);
        $luser  = User::where('email',$this->bestudiante)->first();

        $newItem->descripcion = substr($luser->ap_paterno." ".$luser->ap_materno." ".$luser->name,0,20)."-".substr($lcuota->modalidad->curso->name,0,20)."-".substr($lcuota->modalidad->name,0,10)."-".substr($lcuota->name,0,10);
        $newItem->cantidad = 1;
        $newItem->precio = $lcuota->monto;
        $newItem->importe = $newItem->cantidad*$newItem->precio;
        $newItem->user_id = $luser->id;
        $newItem->cuota_id = $this->bcuota;

        $this->detallePedido->push($newItem->toArray());
        if(isset($this->editandoItem)){
            $this->eliminarItem($this->editandoItem);
            $this->editandoItem = null;
        }
        $this->total = $this->total+$newItem->importe;
        $this->UpdatedBmodalidad();
        $this->resetNewItem();
    }

    public function generar_comprobante(Comprobante $comprobante){

        if(isset($this->editandoItem)){
            Validator::make(
                ['editandoItem' => null],
                ['editandoItem' => 'required'],
                ['required' => 'Termine de editar Item'],
            )->validate();
        }
        $this->resetErrorBag();
        $this->abrirModal();
        $this->validateCliente();

        Validator::make(
            ['detalle' => $this->detallePedido],
            ['detalle' => 'required'],
            ['required' => 'Agregar Servicios'],
        )->validate();
        $comprobante->femision = $this->f_emision;
        $comprobante->cliente_id = $this->hcliente->id;
        $comprobante->termino = $this->forma_pago;
        $comprobante->total = $this->total;
        $comprobante->cajero_id = 1;
        $comprobante->save();
        $comprobante->correlativo = $comprobante->correlativo ? $comprobante->correlativo : $comprobante->id;
        $comprobante->save();

        foreach($this->detallePedido as $item)
        {
            $item['id'] = isset($item['id']) ? $item['id'] : null;
            $item['comprobante_id'] = isset($item['comprobante_id']) ? $item['comprobante_id'] : $comprobante->id;
            isset($item['id']) ? $litem = Detalle::updateOrCreate(['id' => $item['id']], $item) :$litem = Detalle::create($item);
            #obtener matricular
            $bcuota = Cuota::find($item['cuota_id']);
            $bmatricula =$this->obtener_generar_cmatricula($item['user_id'],$bcuota->modalidad->id);
            $this->generar_mpagos($bmatricula->id,$item['cuota_id'],$litem->id);
            foreach ($bcuota->gcuotas as $key => $gcuota){$this->generar_grupo_matricula($bmatricula->id,$gcuota->grupo_id);}
        }
        $this->generar_reciboPdf($comprobante);
        $this->reset('servicioSeleccionado');
        $this->mount($this->hcliente->id);
    }

    public function obtener_generar_cmatricula($estudiante_id,$modalidad_id){
        #buscar matricula del curso
        $bmatricula = Cmatricula::where('user_id',$estudiante_id)->where('modalidad_id',$modalidad_id)->first();
        if ($bmatricula == false) {
            $bmatricula = new Cmatricula();
            $bmatricula->user_id = $estudiante_id;
            $bmatricula->modalidad_id = $modalidad_id;
            $bmatricula->rol = 5;
            $bmatricula->estado = 1;
            $bmatricula->save();
        }
        return $bmatricula;
    }

    public function generar_mpagos($matricula_id,$cuota_id,$detalle_id){
        $npago = new Mpago();
        $npago->cmatricula_id = $matricula_id;
        $npago->cuota_id = $cuota_id;
        $npago->detalle_id = $detalle_id;
        $npago->fpago = date('Y-m-d');
        $npago->save();
    }

    public function generar_grupo_matricula($matricula_id,$grupo_id)
    {
        $n_gmatricula = new Gmatricula();
        $n_gmatricula->grupo_id = $grupo_id;
        $n_gmatricula->cmatricula_id = $matricula_id;
        $n_gmatricula->save();
    }

    public function validateCliente(){

        Validator::make(
            ['cliente' => $this->hcliente->id],
            ['cliente' => 'required'],
            ['required' => 'Seleccionar Cliente'],
        )->validate();

    }

    public function abrirModal(){
        if(!$this->hcliente->id){
            $this->emit('abrir_modal');
        }
    }

    public function generar_reciboPdf(Comprobante $comprobante)
    {
        $r_recibo = new ReciboClass();
        $r_recibo->generar_reciboPdf($comprobante);
    }

    public function descargar_recibo(Comprobante $comprobante){
        $r_recibo = new ReciboClass();
        return $r_recibo->descargar_recibo($comprobante);
    }

    public function editarComprobante(Comprobante $comprobante){
        $this->card_header_recibo = 'EDITANDO RECIBO REC - '.$comprobante->correlativo;
        $this->card_body_btn_generar_comprobante = 'Actualizar Comprobante';
        $this->f_emision = $comprobante->femision;
        $this->forma_pago = $comprobante->termino;
        $this->detallePedido = collect($comprobante->detalles->toArray());
        $this->total = $comprobante->total;
        $this->editar_comprobante_id = $comprobante->id;
    }

    public function reenviar(Comprobante $comprobante){
      /*  $r_recibo = new ReciboClass();
        if ($recibo->cliente->email != null) {
            $r_recibo->reenviar($recibo,$recibo->cliente->email);
        }
        if ($recibo->cliente->email2 != null) {
            $r_recibo->reenviar($recibo,$recibo->cliente->email2);
        }*/
    }

    public function eliminar_comprobante(Comprobante $comprobante){
        $scliente = $comprobante->cliente->id;
        $comprobante->delete();
        $this->hcliente = User::find($scliente);
        $this->emit('notificar_eliminar',"Elimino el comprobante correctamente");
    }

    public function render()
    {

        $this->emit('actualizar_lista');
        if(!$this->hcliente->id){
            $this->hcliente->name = ' ----- Seleccionar Cliente ----- ';
            $this->hcliente->direccion = ' ----- Seleccionar Cliente ----- ';
        }
        $formaPago = ['Efectivo','Deposito'];
        $categorias = Categoria::all();
        if($this->bcategoria != ''){$cursos = Curso::where('categoria_id',$this->bcategoria)->get();}
        else {$cursos = Curso::all();}

        return view('livewire.gestionar-recibos', compact('formaPago','categorias','cursos'));
    }
}
