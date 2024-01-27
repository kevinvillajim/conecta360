<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rol>
 */
class RolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rol' => $this->faker->word,
            'description' => $this->faker->sentence,
            'status' => $this->faker->boolean,
            'id_user_created' => 1,
            'id_user_updated' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}