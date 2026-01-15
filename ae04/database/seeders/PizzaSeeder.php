<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pizza::create(['nombre' => 'Margarita', 'descripcion' => 'la mejor pizza', 'precio' => 10.50]);
        Pizza::create(['nombre' => 'Cuatro Quesos', 'descripcion' => 'La segunda mejor pizza', 'precio' => 12.50]);
        Pizza::create(['nombre' => 'Primavera', 'descripcion' => 'la tercera mejor pizza', 'precio' => 14.50]);
    }
}
