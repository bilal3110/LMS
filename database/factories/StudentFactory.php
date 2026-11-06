<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = student::class;

    public function definition()
    {
        $class = (string) $this->faker->numberBetween(1, 10);

        return [
            'stud_name' => $this->faker->name(),
            'stud_father' => $this->faker->name('male'),
            'stud_mother' => $this->faker->name('female'),
            'stud_class' => $class,
            'stud_section' => $this->faker->randomElement(['A', 'B', 'C']),
            'stud_rollNo' => now()->year . '-' . $class . '-' . $this->faker->unique()->numberBetween(100, 999),
            'stud_email' => $this->faker->unique()->safeEmail(),
            'stud_phone' => $this->faker->numerify('03#########'),
            'stud_address' => $this->faker->address(),
            'stud_img' => null,
        ];
    }
}
