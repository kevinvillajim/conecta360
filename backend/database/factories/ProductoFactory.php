<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            'description' => $this->faker->sentence,
            'model' => $this->faker->optional()->word,
            'img' => 'imgProd.png',
            'id_proveedor' => 1, // ID del proveedor (ajusta según tu entorno)
            'id_categoria' => 1, // ID de la categoría (ajusta según tu entorno)
            'minStock' => 10,
            'percent' => $this->faker->randomFloat(2, 0, 100),
            'cost' => $this->faker->randomFloat(2, 0, 100),
            'costIva' => $this->faker->randomFloat(2, 0, 100),
            'costMayor' => $this->faker->randomFloat(2, 0, 100),
            'costPVP' => $this->faker->randomFloat(2, 0, 100),
            'id_user_created' => 1,
            'id_user_updated' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}