<?php

namespace Database\Factories;

use App\Models\subjects;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectsFactory extends Factory
{
    protected $model = subjects::class;

    public function definition()
    {
        return [
            'class_name' => (string) $this->faker->numberBetween(1, 10),
            'sub_names' => json_encode(['English', 'Urdu', 'Mathematics', 'Science', 'Computer', 'Islamiyat']),
        ];
    }
}
