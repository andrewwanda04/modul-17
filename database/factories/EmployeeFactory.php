<?php

namespace Database\Factories;

use App\Models\Position; // Tambahkan ini
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'email' => fake()->email(),
            'age' => fake()->numberBetween(25, 50),
            'position_id' => Position::factory(), // Menggunakan factory dari model Position
        ];
    }
}
