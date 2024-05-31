<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marca' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'descripcion' => $this->faker->paragraph(),
            'precio' => $this->faker->randomFloat(2,0,1000),
        ];
    }
}
