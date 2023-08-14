<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function buscarcliente(Request $request)
    {
        $term = $request->get('term');
        $querys = User::where(DB::raw("CONCAT(`name`,' ',`ap_paterno`,' ',`ap_materno`)"),'LIKE','%'.$term.'%')->get();
        foreach ($querys as $query){
            $query['label'] =  $query->id."-".$query->name." ".$query->ap_paterno." ".$query->ap_materno;
        }

        $listaclientes = $querys;
        if ($querys->count() == 0) {
            $listaclientes['label'] = 'Sin resultados';
        }
        return $listaclientes;
    }
}
