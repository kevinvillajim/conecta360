<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meta>
 */
class MetaFactory extends Factory
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
            'value' => $this->faker->word,
            'type' => $this->faker->word,
            'description' => $this->faker->sentence,
            'id_user_assigned' => 1, // ID del usuario asignado (ajusta según tu entorno)
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}