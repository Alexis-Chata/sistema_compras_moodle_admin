<?php

namespace Database\Seeders;

use App\Models\Cuota;
use App\Models\Gcuota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GcuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #curso 1
        #plan 1
        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 1;
        $n_gcuota->grupo_id = 1;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 2;
        $n_gcuota->grupo_id = 2;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 3;
        $n_gcuota->grupo_id = 3;
        $n_gcuota->save();
        #plan 2
        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 26;
        $n_gcuota->grupo_id = 3;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 26;
        $n_gcuota->grupo_id = 2;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 27;
        $n_gcuota->grupo_id = 3;
        $n_gcuota->save();

        #curso 2
        #plan 1
        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 28;
        $n_gcuota->grupo_id = 4;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 29;
        $n_gcuota->grupo_id = 5;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 30;
        $n_gcuota->grupo_id = 6;
        $n_gcuota->save();
        #plan 2
        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 53;
        $n_gcuota->grupo_id = 4;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 53;
        $n_gcuota->grupo_id = 5;
        $n_gcuota->save();

        $n_gcuota = new Gcuota();
        $n_gcuota->cuota_id = 54;
        $n_gcuota->grupo_id = 6;
        $n_gcuota->save();
    }
}
