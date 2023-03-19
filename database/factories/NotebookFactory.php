<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notebook>
 */
class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'company' => fake()->optional()->company(),
            'phone_number' => fake()->e164PhoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'birthday' => fake()->optional()->dateTime(),
            'photo' => fake()->optional()->imageUrl(640, 480, 'animals', true),
        ];
    }
}
