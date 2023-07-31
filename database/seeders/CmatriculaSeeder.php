<?php

namespace Database\Seeders;

use App\Models\Cmatricula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n_curso = new Cmatricula();
        $n_curso->user_id = 3;
        $n_curso->modalidad_id = 1;
        $n_curso->rol = 5;
        $n_curso->save();

        $n_curso = new Cmatricula();
        $n_curso->user_id = 3;
        $n_curso->modalidad_id = 3;
        $n_curso->rol = 5;
        $n_curso->save();

        #estudiantes que estan matriculados 5  cursos
        #estudiante 14
        $n_curso = new Cmatricula();$n_curso->user_id = 14;$n_curso->modalidad_id = 19;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 14;$n_curso->modalidad_id = 17;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 14;$n_curso->modalidad_id = 14;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 14;$n_curso->modalidad_id = 13;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 14;$n_curso->modalidad_id = 11;$n_curso->rol = 5;$n_curso->save();
        #estudiante 15
        $n_curso = new Cmatricula();$n_curso->user_id = 15;$n_curso->modalidad_id = 19;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 15;$n_curso->modalidad_id = 17;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 15;$n_curso->modalidad_id = 14;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 15;$n_curso->modalidad_id = 13;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 15;$n_curso->modalidad_id = 11;$n_curso->rol = 5;$n_curso->save();

        #estudiante 16
        $n_curso = new Cmatricula();$n_curso->user_id = 16;$n_curso->modalidad_id = 19;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 16;$n_curso->modalidad_id = 17;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 16;$n_curso->modalidad_id = 14;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 16;$n_curso->modalidad_id = 13;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 16;$n_curso->modalidad_id = 11;$n_curso->rol = 5;$n_curso->save();

        #estudiante 17
        $n_curso = new Cmatricula();$n_curso->user_id = 17;$n_curso->modalidad_id = 19;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 17;$n_curso->modalidad_id = 17;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 17;$n_curso->modalidad_id = 14;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 17;$n_curso->modalidad_id = 13;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 17;$n_curso->modalidad_id = 11;$n_curso->rol = 5;$n_curso->save();

        #estudiante 18
        $n_curso = new Cmatricula();$n_curso->user_id = 18;$n_curso->modalidad_id = 19;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 18;$n_curso->modalidad_id = 17;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 18;$n_curso->modalidad_id = 14;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 18;$n_curso->modalidad_id = 13;$n_curso->rol = 5;$n_curso->save();
        $n_curso = new Cmatricula();$n_curso->user_id = 18;$n_curso->modalidad_id = 11;$n_curso->rol = 5;$n_curso->save();


    }
}
