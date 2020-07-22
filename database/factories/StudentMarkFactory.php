<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\StudentMark;
use App\Models\Student;
use App\Models\Subject;

$factory->define(StudentMark::class, function (Faker $faker) {
    return [
        'student_id'    => Student::all()->random()->id,
        'subject_id'     => Subject::all()->random()->id,
        'mark'        => $faker->numberBetween(1,5),
        'created_at'    => $faker->dateTime(),
        'updated_at'    => $faker->dateTime(),
    ];
});

