<?php

namespace Database\Seeders;

use App\Models\Miembro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MiembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // \App\Models\User::factory(10)->create();

        Miembro::factory()->count(190)->create();



    }
}
