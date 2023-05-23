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
        $n_curso = new Curso();
        $n_curso->name = 'curso 1';
        $n_curso->shortname = 'curso_1';
        $n_curso->id_moodle_course = 710;
        $n_curso->save();

        $n_curso = new Curso();
        $n_curso->name = 'curso 2';
        $n_curso->shortname = 'curso_2';
        $n_curso->id_moodle_course = 709;
        $n_curso->save();
    }
}
