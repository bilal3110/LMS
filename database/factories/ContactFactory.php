<?php

namespace Database\Factories;

use App\Models\contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = contact::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->numerify('03#########'),
            'message' => $this->faker->sentence(12),
        ];
    }
}
