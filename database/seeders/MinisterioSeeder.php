<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Ministerio;

class MinisterioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ministerio::create([
            'nombre_ministerio' => 'Pastoral',
            'descripcion' => 'Academia Pastoral de Venezuela',
            'estado' => '1',
            'fecha_ingreso' => fake()->date($format = 'Y-m-d')
        ]);
    }
}
