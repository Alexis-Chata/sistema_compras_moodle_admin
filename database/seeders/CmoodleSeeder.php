<?php

namespace Database\Seeders;

use App\Models\Cmoodle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmoodleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n_cmoodle = new Cmoodle();
        $n_cmoodle->dominio = 'http://aprendiendo.jademlearning.com/webservice/rest/server.php';
        $n_cmoodle->token = '3965c3e3228fac0de59b88b77c2625fb';
        $n_cmoodle->save();
    }
}
