<?php

namespace Database\Factories;

use App\Models\Ba;
use App\Models\Customer;
use App\Models\Sell;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ba>
 */
class BaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sell_id' => Sell::factory(),
            'customer_id' => Customer::factory(),
            // 'item' => fake()->word(),
            // 'price' => fake()->randomFloat(),
        ];
    }
}
