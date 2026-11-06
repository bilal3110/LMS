<?php

namespace Database\Factories;

use App\Models\adminSignup;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminSignupFactory extends Factory
{
    protected $model = adminSignup::class;

    public function definition()
    {
        return [
            'admin_name' => $this->faker->name(),
            'admin_email' => $this->faker->unique()->safeEmail(),
            'admin_phone' => $this->faker->numerify('03#########'),
            'admin_password' => 'password',
        ];
    }
}
