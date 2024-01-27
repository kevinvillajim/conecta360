<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_create' => now(),
            'date_update' => now(),
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'done' => $this->faker->boolean,
            'id_user_assigned' => 1, // ID del usuario asignado (ajusta según tu entorno)
            'id_user_created' => 1,
            'id_user_updated' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}