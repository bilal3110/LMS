<?php

namespace Database\Seeders;

use App\Models\adminSignup;
use App\Models\classes;
use App\Models\contact;
use App\Models\courseApply;
use App\Models\courses;
use App\Models\student;
use App\Models\StudentPortal;
use App\Models\subjects;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LmsDemoSeeder extends Seeder
{
    public function run()
    {
        adminSignup::query()->firstOrCreate(
            ['admin_email' => 'admin@horizon.edu.pk'],
            [
                'admin_name' => 'Demo Administrator',
                'admin_phone' => '03000000000',
                'admin_password' => 'Horizon123',
            ]
        );

        foreach (range(1, 10) as $class) {
            subjects::query()->firstOrCreate(
                ['class_name' => (string) $class],
                ['sub_names' => json_encode(['English', 'Urdu', 'Mathematics', 'Science', 'Computer', 'Islamiyat'])]
            );
        }

        classes::factory()->count(25)->create();
        $courses = courses::factory()->count(8)->create();
        $students = student::factory()->count(40)->create();

        $students->each(function (student $student) use ($courses) {
            StudentPortal::query()->firstOrCreate(
                ['portal_email' => $student->stud_rollNo . '@horizon.edu.pk'],
                [
                    'stud_name' => $student->stud_name,
                    'stud_father' => $student->stud_father,
                    'stud_mother' => $student->stud_mother,
                    'stud_class' => $student->stud_class,
                    'stud_section' => $student->stud_section,
                    'stud_rollNo' => $student->stud_rollNo,
                    'stud_email' => $student->stud_email,
                    'stud_phone' => $student->stud_phone,
                    'stud_address' => $student->stud_address,
                    'stud_password' => Hash::make('Horizon123'),
                    'stud_image' => $student->stud_img ?? 'studentPortal/images/im.webp',
                ]
            );

            courseApply::factory()->create([
                'name' => $student->stud_name,
                'father_name' => $student->stud_father,
                'contact' => $student->stud_phone,
                'email' => $student->stud_email,
                'address' => $student->stud_address,
                'is_horizon_student' => true,
                'course_id' => $courses->random()->course_id,
            ]);
        });

        contact::factory()->count(20)->create();
    }
}
