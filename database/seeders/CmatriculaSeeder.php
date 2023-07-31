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

    }
}
