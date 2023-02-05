<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sell>
 */
class SellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customers_id = Customer::all('id');
        return [
            'customer_id' => $customers_id->random(1)->first()->id,
            'item' => fake()->word(),
            'price' => fake()->randomFloat(),
            'date' => fake()->date(),
            'amount_pay' => fake()->randomFloat(),
            'date_of_paid' => fake()->date(),
        ];
    }
}
