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
    }
}
