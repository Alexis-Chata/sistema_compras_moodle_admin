<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #crear grupos para el curso 1
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->calificacion = "4.0";
            $n_grupo->hora = 12;
            $n_grupo->min = 56;
            $n_grupo->lecturas = 15;
            $n_grupo->id_moodle_group = 1;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(1);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->calificacion = "4.0";
            $n_grupo->hora = 12;
            $n_grupo->min = 56;
            $n_grupo->lecturas = 15;
            $n_grupo->id_moodle_group = 2;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(2);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->calificacion = "4.0";
            $n_grupo->hora = 12;
            $n_grupo->min = 56;
            $n_grupo->lecturas = 15;
            $n_grupo->id_moodle_group = 3;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

        #crear grupos para el curso 2
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->calificacion = "4.0";
            $n_grupo->hora = 12;
            $n_grupo->min = 56;
            $n_grupo->lecturas = 15;
            $n_grupo->id_moodle_group = 4;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->calificacion = "4.0";
            $n_grupo->hora = 12;
            $n_grupo->min = 56;
            $n_grupo->lecturas = 15;
            $n_grupo->id_moodle_group = 5;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(5);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->calificacion = "4.0";
            $n_grupo->hora = 18;
            $n_grupo->min = 56;
            $n_grupo->lecturas = 99;
            $n_grupo->id_moodle_group = 6;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();
    }
}
