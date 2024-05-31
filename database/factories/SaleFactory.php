<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'marca'=>$this->faker->word(),
            'nombre'=>$this->faker->word(),
            'modelo'=>$this->faker->word(),
            'precio'=>$this->faker->randomFloat(2,0,1000),
            'stock'=>$this->faker->randomFloat(2,0,1000),
            'cantidad'=>$this->faker->randomFloat(2,0,1000),
        ];
    }
}
