<?php

namespace Database\Factories;

use App\Models\courseApply;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseApplyFactory extends Factory
{
    protected $model = courseApply::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'father_name' => $this->faker->name('male'),
            'contact' => $this->faker->numerify('03#########'),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->address(),
            'is_horizon_student' => $this->faker->boolean(),
        ];
    }
}
