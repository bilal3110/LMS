<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\classes;
use Faker\Factory as Faker;
class applicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function numberToWords($number):string {
        $words = [
            1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
            6 => 'six', 7 => 'seven', 8 => 'eight', 9 => 'nine', 10 => 'ten'
        ];
    
        return $words[$number] ?? $number; 
    }
    
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            $class = new classes(); 
            $class->student_name = $faker->name;
            $class->father_name = $faker->name;
            $class->mother_name = $faker->name;
            $class->email = $faker->email;
            $class->contact = $faker->phoneNumber;
            $class->address = $faker->address;
            $class->class = $this->numberToWords($faker->numberBetween(1, 10));

            $class->save();
        }
    }
}
