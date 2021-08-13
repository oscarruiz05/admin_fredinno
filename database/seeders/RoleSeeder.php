<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        Role::create(['name' => 'general']);

        Permission::create(['name' => 'universal'])->assignRole($admin);
        Permission::create(['name' => 'sistema']);
        Permission::create(['name' => 'vendedores']);
        Permission::create(['name' => 'clientes']);
    }
}
