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
        $n_cmoodle->dominio = 'https://moodle.naviero.net/webservice/rest/server.php';
        $n_cmoodle->url ="https://moodle.naviero.net/";
        $n_cmoodle->token = '1417ccfacd9c6d6170be92cff4a90c7a';
        $n_cmoodle->save();
    }
}
