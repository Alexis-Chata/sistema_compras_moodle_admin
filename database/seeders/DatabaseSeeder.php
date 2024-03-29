<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gcuota;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CmoodleSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        //$this->call(CursoSeeder::class);
        //$this->call(GrupoSeeder::class);
        //$this->call(ModalidadSeeder::class);
        //$this->call(CuotaSeeder::class);
        //$this->call(GcuotaSeeder::class);
        //$this->call(CmatriculaSeeder::class);
    }
}
