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
        // Str::random(10), random_int(70000000, 79999999), Str::random(10).'@gmail.com'
        return [
        'nombre_apellido' => fake()->name,
        'direccion' => fake()->address,
        'telefono' => random_int(70000000, 79999999),
        'fecha_nacimiento' => fake()->date($format = 'Y-m-d', $max = 'now'),
        'genero' => '1963-05-25',
        'email' => fake()->unique()->safeEmail(),
        'estado' => '1',
        'ministerio' => 'PASTORAL',
        'fotografia' => 'nophoto.jpg',
        'fecha_ingreso' => fake()->date($format = 'Y-m-d'),
        ];
    }
}



