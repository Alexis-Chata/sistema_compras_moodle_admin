<?php
namespace App\Clases;
use App\Models\Cmoodle;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class UserMoodle {
    public $id;
    private $cmoodle,$usuario;

    public function __construct($usuario_id)
    {
        $this->cmoodle = Cmoodle::find(1);
        $this->usuario = User::find($usuario_id);
    }

    public function crear_usuario()
    {
        if ($this->usuario->id_moodle_user != null or $this->usuario->id_moodle_user == 0) {
            $functionname = 'core_user_create_users';
            $consulta = $this->cmoodle->dominio
                . '?wstoken=' . $this->cmoodle->token
                . '&wsfunction=' . $functionname
                . '&moodlewsrestformat=json&users[0][username]=' . $this->usuario->email
                . '&users[0][password]=' .$this->usuario->email
                . '&users[0][firstname]=' .$this->usuario->name
                . '&users[0][lastname]=' .$this->usuario->ap_paterno." ".$this->usuario->ap_materno
                . '&users[0][email]=' . $this->usuario->email
                . '&users[0][country]=MX';
                $n_user = Http::get($consulta);
            if(isset(json_decode($n_user)->exception)){ return false;}
            else
            {
                $this->id = json_decode($n_user)[0]->id;
                $this->usuario->id_moodle_user = json_decode($n_user)[0]->id;
                $this->usuario->save();
                return json_decode($n_user)[0]->id;
            }
        }
        else {
            $this->id = $this->usuario->id_moodle_user;
            return $this->usuario->id_moodle_user;
        }
    }

    public function modificar_usuario()
    {
        $functionname = 'core_user_update_users';
        $consulta = $this->cmoodle->dominio
            . '?wstoken=' . $this->cmoodle->token
            . '&wsfunction=' . $functionname
            . '&moodlewsrestformat=json&users[0][id]=' . $this->id
            . '&users[0][firstname]=' . $this->usuario->name
            . '&users[0][lastname]=' . $this->usuario->ap_paterno." ".$this->usuario->ap_materno
            . '&users[0][email]=' . $this->usuario->email
            . '&users[0][country]=PE';
            Http::get($consulta);
    }

    public static function buscar($user_id)
    {
        $usuario = User::find($user_id);
        $user = new UserMoodle($user_id);
        $user->id = $usuario->id_user_moodle;
        return $user;
    }

    public function reiniciar_password($contrasena)
    {
        $this->cmoodle = Cmoodle::find(1);
        $functionname = 'core_user_update_users';
        //preparar consulta
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&users[0][id]='.$this->id
        .'&users[0][password]='.$contrasena;
         Http::get($consulta);
    }

    public function consultar_usuario($dni)
    {
        $this->cmoodle = Cmoodle::find(1);
        $functionname = 'core_user_get_users';
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&criteria[0][key]=username&criteria[0][value]='.$dni;
        $busuario = Http::get($consulta);
        if(json_decode($busuario)->users == false)
        {
            return false;
        }
        else
        {
            return json_decode($busuario)->users[0];
        }
    }

    public function eliminar()
    {
        $this->cmoodle = Cmoodle::find(1);
        $functionname = 'core_user_delete_users';
            $serverurl = $this->cmoodle->dominio
            . '?wstoken=' . $this->cmoodle->token
            . '&wsfunction='.$functionname
            .'&userids[0]='.$this->id;
            $e_user = Http::get($serverurl);
        if(isset(json_decode($e_user)->exception))
        {return false;}
        else{return true;}
    }

    public function cambiar_estado($estado)
    {
        $this->cmoodle = Cmoodle::find(1);
        $functionname = 'core_user_update_users';
        //preparar consulta
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&users[0][id]='.$this->id
        .'&users[0][suspended]='.$estado;
         Http::get($consulta);
    }

    public function subir_imagen($nombre,$imagen)
    {
        $this->cmoodle = Cmoodle::find(1);
        #subir repositorio de moodle
        $consulta = Http::attach(
            'file_box', file_get_contents($imagen),$nombre
        )->post(str_replace("rest/server.php","upload.php",$this->cmoodle->dominio).'?token='.$this->cmoodle->token);
        $functionname = 'core_user_update_picture';
        $consulta = $consulta->json($key = null);

        #subir a moodle la imagen de Perfil
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&draftitemid='.$consulta['0']['itemid']
        .'&userid='.$this->id;
        Http::get($consulta2);
    }

    public function matricular($curso_id,$role_id)
    {
        $functionname2 = 'enrol_manual_enrol_users';
        $serverurl2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname2
        .'&moodlewsrestformat=json&enrolments[0][roleid]='.$role_id.'&enrolments[0][userid]='.$this->id.'&enrolments[0][courseid]='.$curso_id;
        Http::get($serverurl2);
    }

    public function desmatricular($curso_id,$role_id)
    {
        $functionname2 = 'enrol_manual_unenrol_users';
        $serverurl2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname2
        .'&moodlewsrestformat=json&enrolments[0][roleid]='.$role_id.'&enrolments[0][userid]='.$this->id.'&enrolments[0][courseid]='.$curso_id;
        Http::get($serverurl2);
    }
}
?>
