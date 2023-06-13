<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #curso 1
            $n_curso = new Curso();
            $n_curso->name = 'curso 1';
            $n_curso->shortname = 'curso_1';
            $n_curso->id_moodle_course = 11;
            $n_curso->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
            $n_curso->imagen = "/storage/grupos/08.jpg";
            $n_curso->save();

        $n_curso = new Curso();
        $n_curso->name = 'curso 2';
        $n_curso->shortname = 'curso_2';
        $n_curso->id_moodle_course = 709;
        $n_curso->save();
    }
}
