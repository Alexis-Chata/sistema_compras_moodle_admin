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
        $n_cmoodle->url ="http://aprendiendo.jademlearning.com/";
        $n_cmoodle->token = '2764438739e0fcc48fc2483814d8f0a8';
        $n_cmoodle->save();
    }
}
