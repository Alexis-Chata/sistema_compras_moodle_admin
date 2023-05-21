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
        $curso = new Curso();
        $curso->name = 'curso 1';
        $curso->shortname = 'curso_1';
        $curso->id_moodle_course = 710;
        $curso->imagen = "08.jpg";
        $curso->calificacion = "4.0";
        $curso->hora = 12;
        $curso->min = 56;
        $curso->lecturas = 15;
        $curso->costo = 84;
        $curso->save();

        $curso = new Curso();
        $curso->name = 'curso 2';
        $curso->shortname = 'curso_2';
        $curso->id_moodle_course = 709;
        $curso->imagen = "08.jpg";
        $curso->calificacion = "4.0";
        $curso->hora = 12;
        $curso->min = 56;
        $curso->lecturas = 15;
        $curso->costo = 84;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Sketch from A to Z: for app designer";
        $curso->shortname = 'curso_2';
        $curso->imagen = "08.jpg";
        $curso->calificacion = "4.0";
        $curso->hora = 12;
        $curso->min = 56;
        $curso->lecturas = 15;
        $curso->costo = 84;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Graphic Design Masterclass";
        $curso->shortname = 'curso_2';
        $curso->imagen = "ps.jpg";
        $curso->calificacion = "4.5";
        $curso->hora = 9;
        $curso->min = 56;
        $curso->lecturas = 65;
        $curso->costo = 94;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Create a Design System in Figma";
        $curso->shortname = 'curso_2';
        $curso->imagen = "figma.jpg";
        $curso->calificacion = "4.5";
        $curso->hora = 5;
        $curso->min = 56;
        $curso->lecturas = 32;
        $curso->costo = 54;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Deep Learning with React-Native";
        $curso->shortname = 'curso_2';
        $curso->imagen = "07.jpg";
        $curso->calificacion = "4.0";
        $curso->hora = 18;
        $curso->min = 56;
        $curso->lecturas = 99;
        $curso->costo = 104;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Build Responsive Websites with HTML";
        $curso->shortname = 'curso_2';
        $curso->imagen = "11.jpg";
        $curso->calificacion = "4.0";
        $curso->hora = 15;
        $curso->min = 30;
        $curso->lecturas = 68;
        $curso->costo = 99;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Build Websites with CSS";
        $curso->shortname = 'curso_2';
        $curso->imagen = "12.jpg";
        $curso->calificacion = "4.5";
        $curso->hora = 36;
        $curso->min = 30;
        $curso->lecturas = 72;
        $curso->costo = 200;
        $curso->save();

        $curso = new Curso();
        $curso->name = "The Complete Web Development in python";
        $curso->shortname = 'curso_2';
        $curso->imagen = "05.jpg";
        $curso->calificacion = "4.5";
        $curso->hora = 10;
        $curso->min = 00;
        $curso->lecturas = 26;
        $curso->costo = 104;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Angular – The Complete Guider";
        $curso->shortname = 'curso_2';
        $curso->imagen = "06.jpg";
        $curso->calificacion = "4.5";
        $curso->hora = 9;
        $curso->min = 32;
        $curso->lecturas = 42;
        $curso->costo = 84;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Bootstrap 5 From Scratch";
        $curso->shortname = 'curso_2';
        $curso->imagen = "10.jpg";
        $curso->calificacion = "4.5";
        $curso->hora = 25;
        $curso->min = 56;
        $curso->lecturas = 38;
        $curso->costo = 224;
        $curso->save();

        $curso = new Curso();
        $curso->name = "PHP with - CMS Project";
        $curso->shortname = 'curso_2';
        $curso->imagen = "13.jpg";
        $curso->calificacion = "4.0";
        $curso->hora = 21;
        $curso->min = 22;
        $curso->lecturas = 30;
        $curso->costo = 214;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Digital Marketing Masterclass";
        $curso->shortname = 'curso_2';
        $curso->imagen = "01(1).jpg";
        $curso->calificacion = "4.5";
        $curso->hora = 6;
        $curso->min = 56;
        $curso->lecturas = 82;
        $curso->costo = 74;
        $curso->save();

        $curso = new Curso();
        $curso->name = "Learn Invision";
        $curso->shortname = 'curso_2';
        $curso->imagen = "in.jpg";
        $curso->calificacion = "3.5";
        $curso->hora = 6;
        $curso->min = 56;
        $curso->lecturas = 82;
        $curso->costo = 79;
        $curso->save();
    }
}
