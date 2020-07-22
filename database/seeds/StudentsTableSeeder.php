<?php

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\StudentMark;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Student::class, 5)->create()->each(function($marks) {
            $marks->student_marks()->save(factory(StudentMark::class)->make());
        });
    }
}

