<?php

namespace Database\Factories;

use App\Models\StudentPortal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class StudentPortalFactory extends Factory
{
    protected $model = StudentPortal::class;

    public function definition()
    {
        $class = (string) $this->faker->numberBetween(1, 10);
        $rollNumber = now()->year . '-' . $class . '-' . $this->faker->unique()->numberBetween(100, 999);

        return [
            'stud_name' => $this->faker->name(),
            'stud_father' => $this->faker->name('male'),
            'stud_mother' => $this->faker->name('female'),
            'stud_class' => $class,
            'stud_section' => $this->faker->randomElement(['A', 'B', 'C']),
            'stud_rollNo' => $rollNumber,
            'stud_email' => $this->faker->unique()->safeEmail(),
            'stud_phone' => $this->faker->numerify('03#########'),
            'stud_address' => $this->faker->address(),
            'stud_password' => Hash::make('Horizon123'),
            'stud_image' => 'studentPortal/images/im.webp',
            'portal_email' => $rollNumber . '@horizon.edu.pk',
        ];
    }
}
