<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'Ver y Editar'])->syncRoles([$role1]);
        Permission::create(['name' => 'Ver pero no Editar']);
        Permission::create(['name' => 'No puede Ver ni Editar']);
    }
}
