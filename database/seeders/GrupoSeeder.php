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
        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 1';
        $n_grupo->id_moodle_group = 30;
        $n_grupo->curso_id = 1;
        $n_grupo->precio = 10;
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 2';
        $n_grupo->id_moodle_group = 31;
        $n_grupo->curso_id = 1;
        $n_grupo->precio = 10;
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 3';
        $n_grupo->id_moodle_group = 32;
        $n_grupo->curso_id = 1;
        $n_grupo->precio = 10;
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 1';
        $n_grupo->id_moodle_group = 33;
        $n_grupo->curso_id = 2;
        $n_grupo->precio = 10;
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 2';
        $n_grupo->id_moodle_group = 34;
        $n_grupo->curso_id = 2;
        $n_grupo->precio = 10;
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 3';
        $n_grupo->id_moodle_group = 35;
        $n_grupo->curso_id = 2;
        $n_grupo->precio = 10;
        $n_grupo->save();
    }
}
