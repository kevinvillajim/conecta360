<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proforma>
 */
class ProformaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'date' => $this->faker->date,
            'valid_days' => $this->faker->numberBetween(1, 30),
            'id_clientes' => 1, // ID del cliente (ajusta según tu entorno)
            'id_productos' => 1, // ID del producto (ajusta según tu entorno)
            'id_user_assigned' => 1,
            'id_supervisor_assigned' => 1,
            'status' => true,
            'observation' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
