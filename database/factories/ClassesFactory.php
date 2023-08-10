<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    protected $model = Classes::class;

    public function definition()
    {
        $classes = ['G1', 'G2', 'G3', 'G4', 'G5', 'G6']; // Custom classes
        $levels = ['G1', 'G2', 'C1', 'C2', 'A1', 'A2']; // Custom levels
        $genders = ['male', 'female', 'male + female']; // Possible genders

        return [
            'name' => $this->faker->randomElement($classes),
            'level' => $this->faker->randomElement($levels),
            'age' => '[' . $this->faker->numberBetween(10, 15) . ',' . $this->faker->numberBetween(16, 30) . ']',
            'gender' => $this->faker->randomElement($genders), // Random gender
            'note' => $this->faker->sentence(),
        ];
    }
}
