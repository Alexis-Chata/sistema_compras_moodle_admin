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
            $n_grupo->id_moodle_group = 1;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(1);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 2;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(2);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 3;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 4';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 8;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 5';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 9;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 6';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 10;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 7';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 11;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 8';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";;
            $n_grupo->id_moodle_group = 12;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 9';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 13;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 10';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 14;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 11';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 15;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 12';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 16;
            $n_grupo->curso_id = 1;
            $n_grupo->created_at = now()->addMinute(3);
            $n_grupo->save();


        #crear grupos para el curso 2
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 4;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 5;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(5);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 6;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 4';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 17;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 5';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 6';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 19;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 7';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 20;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 8';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 21;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 9';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 22;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 10';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 23;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 11';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 24;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 12';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/07.jpg";
            $n_grupo->id_moodle_group = 25;
            $n_grupo->curso_id = 2;
            $n_grupo->created_at = now()->addMinute(6);
            $n_grupo->save();

        #crear grupos para el curso 3
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 26;
            $n_grupo->curso_id = 3;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 27;
            $n_grupo->curso_id = 3;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 28;
            $n_grupo->curso_id = 3;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            #crear grupos para el curso 4
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 29;
            $n_grupo->curso_id = 4;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 30;
            $n_grupo->curso_id = 4;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 31;
            $n_grupo->curso_id = 4;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            #crear grupos para el curso 5
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 32;
            $n_grupo->curso_id = 5;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 33;
            $n_grupo->curso_id = 5;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 34;
            $n_grupo->curso_id = 5;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            #crear grupos para el curso 6
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 35;
            $n_grupo->curso_id = 6;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 36;
            $n_grupo->curso_id = 6;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 37;
            $n_grupo->curso_id = 6;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            #crear grupos para el curso 7
            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 1';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 38;
            $n_grupo->curso_id = 7;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 2';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 39;
            $n_grupo->curso_id = 7;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

            $n_grupo = new Grupo();
            $n_grupo->name = 'grupo 3';
            $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_grupo->imagen = "/storage/grupos/08.jpg";
            $n_grupo->id_moodle_group = 40;
            $n_grupo->curso_id = 7;
            $n_grupo->created_at = now()->addMinute(4);
            $n_grupo->save();

             #crear grupos para el curso 8
             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 1';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 41;
             $n_grupo->curso_id = 8;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 2';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 42;
             $n_grupo->curso_id = 8;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 3';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 43;
             $n_grupo->curso_id = 8;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             #crear grupos para el curso 9
             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 1';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 44;
             $n_grupo->curso_id = 9;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 2';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 45;
             $n_grupo->curso_id = 9;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 3';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 46;
             $n_grupo->curso_id = 9;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             #crear grupos para el curso 10
             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 1';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 47;
             $n_grupo->curso_id = 10;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 2';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 48;
             $n_grupo->curso_id = 10;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();

             $n_grupo = new Grupo();
             $n_grupo->name = 'grupo 3';
             $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
             $n_grupo->imagen = "/storage/grupos/08.jpg";
             $n_grupo->id_moodle_group = 49;
             $n_grupo->curso_id = 10;
             $n_grupo->created_at = now()->addMinute(4);
             $n_grupo->save();
    }
}
