<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proformalist>
 */
class ProformalistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_proformas' => 1, // ID de la proforma (ajusta según tu entorno)
            'id_cliente' => 1, // ID del cliente (ajusta según tu entorno)
            'id_user_assigned' => 1,
            'id_supervisor_assigned' => 1,
            'status' => $this->faker->randomElement(['Pending', 'Completed']),
            'price' => $this->faker->randomFloat(2, 0, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
