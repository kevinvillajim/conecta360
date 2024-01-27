<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(FinanzasSeeder::class);
        $this->call(CitaSeeder::class);
        $this->call(MetaSeeder::class);
        $this->call(TareaSeeder::class);
        $this->call(InventarioSeeder::class);
        $this->call(ProformaSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ProformalistSeeder::class);
    }
}
