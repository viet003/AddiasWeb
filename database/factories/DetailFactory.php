<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::factory(), // Tạo một product_id liên kết với một product
            'type_product' => $this->faker->word,
            'color_product' => $this->faker->safeColorName,
            'size_product' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'producer' => $this->faker->company,
            'describe' => $this->faker->paragraph,
            'extend' => $this->faker->sentence,
        ];
    }
}
