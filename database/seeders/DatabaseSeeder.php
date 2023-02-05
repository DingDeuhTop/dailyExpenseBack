<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ba;
use App\Models\Buy;
use App\Models\Customer;
use App\Models\Sell;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Customer::factory(3)->create();
        Sell::factory(3)->create();
        Buy::factory(3)->create();
        Ba::factory(3)->create();
    }
}
