<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'birth' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'join' => now(),
            'status' => true,
            'type' => $this->faker->randomElement(['TypeA', 'TypeB', 'TypeC']),
            'id_user_created' => 1,
            'id_user_updated' => 1,
            'id_user_assigned' => 1,
            'id_supervisor_assigned' => 1,  // ID del usuario asignado (ajusta según tu entorno)
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
