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
            $n_curso->name = 'Máster en Terapias Conductuales en Infanto-Juveniles y Adultos con Opción a Terapias Contextuales';
            $n_curso->shortname = 'mas-tep_cond_en_infarto';
            $n_curso->id_moodle_course = 11;
            $n_curso->descripcion = 'Master Generación 2 y 3 tiene duración de 16 meses y 4 generación de 12 meses';
            $n_curso->imagen = "/storage/grupos/08.jpg";
            $n_curso->categoria_id = 1;
            $n_curso->save();

            $n_curso = new Curso();
            $n_curso->name = ' Intervenciones Basadas en Evaluaciones Funcionales Terapias Conductuales y Contextuales en Infanto Juveniles-Adultos';
            $n_curso->shortname = 'curso_2';
            $n_curso->id_moodle_course = 12;
            $n_curso->descripcion = 'Los diplomados duran 12 Meses ';
            $n_curso->imagen = "/storage/grupos/08.jpg";
            $n_curso->categoria_id = 2;
            $n_curso->save();

            $n_curso = new Curso();
            $n_curso->name = 'Terapias Conductuales y Contextuales en Múltiples Aplicaciones Clínicas: Intervaciones Basadas en Evaluaciones Funcionales';
            $n_curso->shortname = 'curso_2';
            $n_curso->id_moodle_course = 13;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/grupos/08.jpg";
            $n_curso->categoria_id = 3;
            $n_curso->save();
    }
}
