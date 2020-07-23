<?php

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Subject;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Student::class, 5)->create()->each(function($student) {
            $subject = factory(Subject::class)->create();
            $student->subjects()->attach($subject->id,[
                'mark' => rand(1, 5)
            ]);
        });
    }
}


