<?php

namespace Database\Factories;

use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    protected $model = Price::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => null, // 稍后设置
            'user_type' => $this->faker->randomElement(['NORMAL', 'SUPER', 'STAFF']),
            'price' => $this->faker->numberBetween(1, 1000)
        ];
    }
}
