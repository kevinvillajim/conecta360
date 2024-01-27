<?php

namespace Database\Seeders;

use App\Models\Proformalist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProformalistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proformalist::factory(10)->create();
    }
}