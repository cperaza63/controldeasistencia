<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Carlos Peraza',
            'email' => 'cpdigitalsolution@yahoo.com.ve',
            'password' => 'Ceph_7065079',
            'estado' => '1',
            'fecha_ingreso' => fake()->date($format = 'Y-m-d')
        ])->syncRoles('Admin');

        User::create([
            'name' => 'Mairanella Ramsbott',
            'email' => 'ramsbott20@gmail.com',
            'password' => '12345678',
            'estado' => '1',
            'fecha_ingreso' => fake()->date($format = 'Y-m-d')
        ])->syncRoles('Asistente');
    }
}
