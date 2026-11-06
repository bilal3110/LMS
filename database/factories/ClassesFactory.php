<?php

namespace Database\Factories;

use App\Models\classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    protected $model = classes::class;

    public function definition()
    {
        return [
            'student_name' => $this->faker->name(),
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'contact' => $this->faker->numerify('03#########'),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'class' => (string) $this->faker->numberBetween(1, 10),
        ];
    }
}
