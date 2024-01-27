<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'logo' => 'logoProv.png',
            'phone1' => $this->faker->phoneNumber,
            'phone2' => $this->faker->optional()->phoneNumber,
            'address' => $this->faker->address,
            'web' => $this->faker->optional()->url,
            'asesor' => $this->faker->optional()->name,
            'id_user_created' => 1,
            'id_user_updated' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}