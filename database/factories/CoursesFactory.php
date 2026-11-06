<?php

namespace Database\Factories;

use App\Models\courses;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{
    protected $model = courses::class;

    public function definition()
    {
        return [
            'course_title' => $this->faker->randomElement(['Web Development', 'Graphic Design', 'Spoken English', 'Digital Marketing', 'Python Programming']),
            'course_duration' => $this->faker->randomElement(['2 Months', '3 Months', '6 Months']),
            'course_skills' => implode(', ', $this->faker->words(4)),
            'course_fee' => (string) $this->faker->numberBetween(3000, 15000),
            'course_image' => 'studentPortal/images/images.jpeg',
        ];
    }
}
