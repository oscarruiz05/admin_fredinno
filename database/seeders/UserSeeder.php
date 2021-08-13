<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Oscar Ruiz',
            'identificacion' => '1007179691',
            'email'     => 'oscarruiz2614@gmail.com',
            'estado' => 'activo',
            'password'  => bcrypt('oscar0502'),
        ]);
        // DB::table('users')->insert([
        //     'name'  => 'Oscar Ruiz',
        //     'identificacion' => '1007179691',
        //     'email'     => 'oscarruiz2614@gmail.com',
        //     'estado' => 'activo',
        //     'password'  => bcrypt('oscar0502'),
        // ]);
    }
}
