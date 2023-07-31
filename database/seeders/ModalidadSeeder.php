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
                $n_modalidad->name = "12 meses";
                $n_modalidad->descripcion = "Pago del Curso en 12 cuotas";
                $n_modalidad->curso_id = 1;
                $n_modalidad->save();
            #6 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "6 meses";
                $n_modalidad->descripcion = "Pago del Curso en 6 cuotas";
                $n_modalidad->curso_id = 1;
                $n_modalidad->save();

        #crear modalidades - curso 2
            #12 cuotas
                $n_modalidad = new Modalidad();
                $n_modalidad->name = "Regular B";
                $n_modalidad->descripcion = "Pago del Curso en 12 cuotas";
                $n_modalidad->curso_id = 2;
                $n_modalidad->save();

        #crear modalidades - curso 3
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 3;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 3;
            $n_modalidad->save();

        #crear modalidades - curso 4
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 4;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 4;
            $n_modalidad->save();

        #crear modalidades - curso 5
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 5;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 5;
            $n_modalidad->save();

        #crear modalidades - curso 6
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 6;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 6;
            $n_modalidad->save();

        #crear modalidades - curso 7
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 7;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 7;
            $n_modalidad->save();

        #crear modalidades - curso 8
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 8;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 8;
            $n_modalidad->save();

        #crear modalidades - curso 9
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 9;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 9;
            $n_modalidad->save();

        #crear modalidades - curso 10
            #1 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular A";
            $n_modalidad->descripcion = "Pago Unico";
            $n_modalidad->curso_id = 10;
            $n_modalidad->save();
            #3 cuotas
            $n_modalidad = new Modalidad();
            $n_modalidad->name = "Regular B";
            $n_modalidad->descripcion = "Pago en 3 cuotas";
            $n_modalidad->curso_id = 10;
            $n_modalidad->save();
    }
}
