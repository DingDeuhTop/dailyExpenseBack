<?php

namespace Database\Factories;

use App\Models\Ba;
use App\Models\Sell;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'sell_id' => Sell::factory()
            'name' => fake()->name(),
            // 'ba_id' => Ba::factory()
        ];
    }
}
