<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 1';
        $n_grupo->id_moodle_group = 30;
        $n_grupo->curso_id = 1;
        $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
        $n_grupo->imagen = "/storage/grupos/08.jpg";
        $n_grupo->calificacion = "4.0";
        $n_grupo->hora = 12;
        $n_grupo->min = 56;
        $n_grupo->lecturas = 15;
        $n_grupo->costo = 84;
        $n_grupo->created_at = now()->addMinute(1);
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 2';
        $n_grupo->id_moodle_group = 31;
        $n_grupo->curso_id = 1;
        $n_grupo->descripcion = 'Far advanced settling say finished raillery. Offered chiefly farther';
        $n_grupo->imagen = "/storage/grupos/08.jpg";
        $n_grupo->calificacion = "4.0";
        $n_grupo->hora = 12;
        $n_grupo->min = 56;
        $n_grupo->lecturas = 15;
        $n_grupo->costo = 84;
        $n_grupo->created_at = now()->addMinute(2);
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 3';
        $n_grupo->id_moodle_group = 32;
        $n_grupo->curso_id = 1;
        $n_grupo->descripcion = 'Proposal indulged no do sociable he throwing settling.';
        $n_grupo->imagen = "/storage/grupos/08.jpg";
        $n_grupo->calificacion = "3.0";
        $n_grupo->hora = 12;
        $n_grupo->min = 56;
        $n_grupo->lecturas = 15;
        $n_grupo->costo = 84;
        $n_grupo->created_at = now()->addMinute(3);
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 1';
        $n_grupo->id_moodle_group = 33;
        $n_grupo->curso_id = 2;
        $n_grupo->descripcion = 'Rooms oh fully taken by worse do Points afraid but may end Rooms Points afraid but may end Rooms';
        $n_grupo->imagen = "/storage/grupos/ps.jpg";
        $n_grupo->calificacion = "4.5";
        $n_grupo->hora = 9;
        $n_grupo->min = 56;
        $n_grupo->lecturas = 65;
        $n_grupo->costo = 94;
        $n_grupo->created_at = now()->addMinute(4);
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 2';
        $n_grupo->id_moodle_group = 34;
        $n_grupo->curso_id = 2;
        $n_grupo->descripcion = 'Far advanced settling say finished raillery. Offered chiefly farther';
        $n_grupo->imagen = "/storage/grupos/figma.jpg";
        $n_grupo->calificacion = "4.5";
        $n_grupo->hora = 5;
        $n_grupo->min = 56;
        $n_grupo->lecturas = 32;
        $n_grupo->costo = 54;
        $n_grupo->created_at = now()->addMinute(5);
        $n_grupo->save();

        $n_grupo = new Grupo();
        $n_grupo->name = 'grupo 3';
        $n_grupo->id_moodle_group = 35;
        $n_grupo->curso_id = 2;
        $n_grupo->descripcion = 'Arrived off she elderly beloved him Course regard to up he hardly.';
        $n_grupo->imagen = "/storage/grupos/07.jpg";
        $n_grupo->calificacion = "4.0";
        $n_grupo->hora = 18;
        $n_grupo->min = 56;
        $n_grupo->lecturas = 99;
        $n_grupo->costo = 104;
        $n_grupo->created_at = now()->addMinute(6);
        $n_grupo->save();
    }
}
