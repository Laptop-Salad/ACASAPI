<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'department_id' => Department::where('name', 'Maths')->first()->id,
        ];
    }

    public function maths_department(): static
    {
        return $this->state(fn (array $attributes) => [
            'department_id' => Department::where('name', 'Maths')->first()->id,
        ]);
    }

    public function science_department(): static
    {
        return $this->state(fn (array $attributes) => [
            'department_id' => Department::where('name', 'Science')->first()->id,
        ]);
    }

    public function art_department(): static
    {
        return $this->state(fn (array $attributes) => [
            'department_id' => Department::where('name', 'Art')->first()->id,
        ]);
    }

    public function pe_department(): static
    {
        return $this->state(fn (array $attributes) => [
            'department_id' => Department::where('name', 'PE')->first()->id,
        ]);
    }

    public function cs_department(): static
    {
        return $this->state(fn (array $attributes) => [
            'department_id' => Department::where('name', 'Computer Science')->first()->id,
        ]);
    }

    public function socials_department(): static
    {
        return $this->state(fn (array $attributes) => [
            'department_id' => Department::where('name', 'Social Studies')->first()->id,
        ]);
    }
}
