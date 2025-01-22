<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cotxes>
 */
class CotxesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->company(), // Marca del cotxe (empresa o marca coneguda)
            'model' => $this->faker->word(), // Model del cotxe (una paraula aleatòria)
            'any_fabricacio' => $this->faker->numberBetween(2000, 2025), // Any de fabricació
            'price' => $this->faker->numberBetween(5000, 100000), // Preu del cotxe (entre 5000 i 100000)
            'categoria' => $this->faker->word(), // Categoria del cotxe (una paraula aleatòria)
        ];
    }
}
