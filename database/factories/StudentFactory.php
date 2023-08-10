<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

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
    protected $model = Student::class;

    public function definition()
    {
        $levels = ['G1', 'G2', 'C1', 'C2', 'A1', 'A2']; // Custom levels

        return [
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'level' => $this->faker->randomElement($levels),
            'age' => $this->faker->numberBetween(10, 30),
        ];
    }
}
