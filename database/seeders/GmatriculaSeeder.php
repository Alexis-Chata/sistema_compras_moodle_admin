<?php

namespace Database\Seeders;

use App\Models\Gmatricula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GmatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n_curso = new Gmatricula();
        $n_curso->cmatricula_id = 1;
        $n_curso->grupo_id = 1;
        $n_curso->save();

        $n_curso = new Gmatricula();
        $n_curso->cmatricula_id = 1;
        $n_curso->grupo_id = 1;
        $n_curso->save();
    }
}
