<?php

namespace Database\Factories;

use App\Enums\Business\BusinessStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{

    public function definition(): array
    {

        return [
            'name' => fake()->company(),
            'domain' => fake()->domainName(),
            'status' => BusinessStatus::ACTIVE,
        ];
    }
}
