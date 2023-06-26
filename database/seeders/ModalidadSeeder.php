<?php

namespace Database\Seeders;

use App\Models\Modalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #crear modalidades - curso 1
            #12 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular A";
                $n_modalidad->descripcion = "Pago del Curso en 12 cuotas";
                $n_modalidad->curso_id = 1;
                $n_modalidad->save();
            #6 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular B";
                $n_modalidad->descripcion = "Pago del Curso en 6 cuotas";
                $n_modalidad->curso_id = 1;
                $n_modalidad->save();
            #4 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular C";
                $n_modalidad->descripcion = "Pago del Curso en 4 cuotas";
                $n_modalidad->curso_id = 1;
                $n_modalidad->save();
            #3 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular D";
                $n_modalidad->descripcion = "Pago del Curso en 3 cuotas";
                $n_modalidad->curso_id = 1;
                $n_modalidad->save();
            #2 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular E";
                $n_modalidad->descripcion = "Pago del Curso en 2 cuotas";
                $n_modalidad->curso_id = 1;
                $n_modalidad->save();

        #crear modalidades - curso 2
            #12 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular B";
                $n_modalidad->descripcion = "Pago del Curso en 12 cuotas";
                $n_modalidad->curso_id = 2;
                $n_modalidad->save();
            #6 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular B";
                $n_modalidad->descripcion = "Pago del Curso en 6 cuotas";
                $n_modalidad->curso_id = 2;
                $n_modalidad->save();
            #4 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular C";
                $n_modalidad->descripcion = "Pago del Curso en 4 cuotas";
                $n_modalidad->curso_id = 2;
                $n_modalidad->save();
            #3 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular D";
                $n_modalidad->descripcion = "Pago del Curso en 3 cuotas";
                $n_modalidad->curso_id = 2;
                $n_modalidad->save();
            #2 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular E";
                $n_modalidad->descripcion = "Pago del Curso en 2 cuotas";
                $n_modalidad->curso_id = 2;
                $n_modalidad->save();
    }
}
