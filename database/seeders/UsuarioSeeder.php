<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Empresa;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = Empresa::create([
           'nombre' => 'SMD',
           'rubro' => 'venta de electrodomésticos',
        ]);


        User::create([
            'name' =>  'Miguel',
            'lastname' =>  'Machuca',
            'email' =>  'mmachucayavita@gmail.com',
            'password' =>  bcrypt('asdf'),
            'empresa_id' =>  $empresa->id,
            ])->assignRole('admin');

    }
}
