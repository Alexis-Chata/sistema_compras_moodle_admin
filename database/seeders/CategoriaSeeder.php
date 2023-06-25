<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n_categoria = new Categoria();
        $n_categoria->name = 'Categoría A';
        $n_categoria->save();

        $n_categoria = new Categoria();
        $n_categoria->name = 'Categoría B';
        $n_categoria->save();
    }
}
