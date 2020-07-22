<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\StudentMark;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subject::class,5)->create();
    }
}
