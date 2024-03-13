<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Miembro>
 */
class MiembroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre_apellido' => Str::random(10),
        'direccion' => Str::random(10),
        'telefono' => random_int(70000000, 79999999),
        'fecha_nacimiento' => '1963-05-25',
        'genero' => '1963-05-25',
        'email' => Str::random(10).'@gmail.com',
        'estado' => '1',
        'ministerio' => 'PASTORAL',
        'fotografia' => 'cperaza.jpg',
        'fecha_ingreso' => '2023-05-25',
        ];
    }
}



