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
            $n_curso->imagen = "/storage/cursos/01.jpg";
            $n_curso->categoria_id = 1;
            $n_curso->save();

            $n_curso = new Curso();
            $n_curso->name = ' Intervenciones Basadas en Evaluaciones Funcionales Terapias Conductuales y Contextuales en Infanto Juveniles-Adultos';
            $n_curso->shortname = 'curso_2';
            $n_curso->id_moodle_course = 12;
            $n_curso->descripcion = 'Los diplomados duran 12 Meses ';
            $n_curso->imagen = "/storage/cursos/02.jpg";
            $n_curso->categoria_id = 2;
            $n_curso->save();

            $n_curso = new Curso();
            $n_curso->name = 'Terapias Conductuales y Contextuales en Múltiples Aplicaciones Clínicas: Intervaciones Basadas en Evaluaciones Funcionales';
            $n_curso->shortname = 'curso_3';
            $n_curso->id_moodle_course = 13;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/03.jpg";
            $n_curso->categoria_id = 3;
            $n_curso->save();

            #curso 4
            $n_curso = new Curso();
            $n_curso->name = 'Terapias Conductuales y Contextuales en Múltiples Aplicaciones Clínicas: Intervaciones Basadas en Evaluaciones Funcionales';
            $n_curso->shortname = 'curso_2';
            $n_curso->id_moodle_course = 14;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/04.jpg";
            $n_curso->categoria_id = 1;
            $n_curso->save();

            #curso 5
            $n_curso = new Curso();
            $n_curso->name = 'Gestión Publica';
            $n_curso->shortname = 'curso_5';
            $n_curso->id_moodle_course = 15;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/05.jpg";
            $n_curso->categoria_id = 2;
            $n_curso->save();

            #curso 6
            $n_curso = new Curso();
            $n_curso->name = 'Sistema Nacional de Control';
            $n_curso->shortname = 'curso_6';
            $n_curso->id_moodle_course = 16;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/06.jpg";
            $n_curso->categoria_id = 3;
            $n_curso->save();

            #curso 7
            $n_curso = new Curso();
            $n_curso->name = 'Planificación Curricular';
            $n_curso->shortname = 'curso_7';
            $n_curso->id_moodle_course = 17;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/07.jpg";
            $n_curso->categoria_id = 1;
            $n_curso->save();

            #curso 8
            $n_curso = new Curso();
            $n_curso->name = 'Los tics para la Docencia y la Educación';
            $n_curso->shortname = 'curso_8';
            $n_curso->id_moodle_course = 18;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/08.jpg";
            $n_curso->categoria_id = 2;
            $n_curso->save();

            #curso 9
            $n_curso = new Curso();
            $n_curso->name = 'Acreditación y Calidad Educativa';
            $n_curso->shortname = 'curso_9';
            $n_curso->id_moodle_course = 19;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/09.jpg";
            $n_curso->categoria_id = 3;
            $n_curso->save();

            #curso 10
            $n_curso = new Curso();
            $n_curso->name = 'Contrataciones con el Estado';
            $n_curso->shortname = 'curso_10';
            $n_curso->id_moodle_course = 20;
            $n_curso->descripcion = 'Segunda Generación';
            $n_curso->imagen = "/storage/cursos/10.jpg";
            $n_curso->categoria_id = 1;
            $n_curso->save();
    }
}
