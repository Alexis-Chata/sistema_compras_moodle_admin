<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarioadmin = new User();
        $usuarioadmin->name = 'anthonny';
        $usuarioadmin->ap_paterno = 'Buitron';
        $usuarioadmin->ap_materno = 'Navarro';
        $usuarioadmin->email = 'anthonny@jademlearning.com';
        $usuarioadmin->password = bcrypt('123456789');
        $usuarioadmin->save();
        $usuarioadmin->assignRole('Administrador');

        $usuarioadmin = new User();
        $usuarioadmin->name = 'alexis';
        $usuarioadmin->ap_paterno = 'Chata';
        $usuarioadmin->ap_materno = 'Baltazar';
        $usuarioadmin->email = 'alexizz.19.ac@gmail.com';
        $usuarioadmin->password = bcrypt('123456789');
        $usuarioadmin->save();
        $usuarioadmin->assignRole('Administrador');

        $estudiante = new User();
        $estudiante->name = 'estudiante';
        $estudiante->ap_paterno = 'jadem';
        $estudiante->ap_materno = 'learning';
        $estudiante->email = 'estudiante@jademlearning.com';
        $estudiante->password = bcrypt('123456789');
        $estudiante->id_moodle_user = 472;
        $estudiante->save();
        $estudiante->assignRole('Estudiante');

        $usuarios = User::factory(15)->create();
        foreach ($usuarios as $usuario) {
            $usuario->assignRole('Estudiante');
        }
    }
}
