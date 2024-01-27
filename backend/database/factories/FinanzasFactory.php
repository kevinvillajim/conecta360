<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Finanzas>
 */
class FinanzasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => now(),
            'id_cliente' => 1, // ID del cliente (ajusta según tu entorno)
            'id_proveedor' => 1, // ID del proveedor (ajusta según tu entorno)
            'concept' => $this->faker->word,
            'description' => $this->faker->sentence,
            'amount' => $this->faker->randomNumber(4),
            'type' => $this->faker->randomElement(['Income', 'Expense']),
            'status' => $this->faker->randomElement(['Pending', 'Completed']),
            'img' => $this->faker->optional()->imageUrl(),
            'id_user_created' => 1,
            'id_user_updated' => 1,
            'total' => $this->faker->randomFloat(2, 0, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}