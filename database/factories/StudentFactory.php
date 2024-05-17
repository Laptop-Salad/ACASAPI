<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
        ];
    }

    public function house_crabs(): static
    {
        return $this->state(fn (array $attributes) => [
            'house_id' => House::where('name', 'Crabs')->first()->id,
        ]);
    }

    public function house_gophers(): static
    {
        return $this->state(fn (array $attributes) => [
            'house_id' => House::where('name', 'Gophers')->first()->id,
        ]);
    }

    public function house_rats(): static
    {
        return $this->state(fn (array $attributes) => [
            'house_id' => House::where('name', 'Rats')->first()->id,
        ]);
    }

    public function house_snakes(): static
    {
        return $this->state(fn (array $attributes) => [
            'house_id' => House::where('name', 'Snakes')->first()->id,
        ]);
    }

    public function house_elephants(): static
    {
        return $this->state(fn (array $attributes) => [
            'house_id' => House::where('name', 'Elephants')->first()->id,
        ]);
    }
}
