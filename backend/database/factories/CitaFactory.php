<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cita>
 */
class CitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_taken' => now(),
            'date_cita' => $this->faker->dateTimeBetween('now', '+1 month'),
            'description' => $this->faker->sentence,
            'id_cliente' => 1, // ID del cliente (ajusta según tu entorno)
            'id_user_assigned' => 1, // ID del usuario asignado (ajusta según tu entorno)
            'id_user_created' => 1,
            'id_user_updated' => 1,
            'id_supervisor_assigned' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
