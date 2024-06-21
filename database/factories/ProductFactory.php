<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_product' => 'Giày ' . $this->faker->word,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'gender' => $this->faker->randomElement(['Nam', 'Nữ']),
            'date_added' => $this->faker->dateTime,
            'auto_imei' => $this->faker->uuid,
            'brand' => $this->faker->randomElement(['Performance', 'Originals', 'Sportswear', 'TERREX']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
