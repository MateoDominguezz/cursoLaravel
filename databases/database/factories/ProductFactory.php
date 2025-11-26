<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            "nombre" => fake()->name(),
            "descripcion_corta" => fake()->sentence(),
            "descripcion" => fake()->text(),
            "precio" => fake()->numberBetween(1,200),
        ];
    }
}
