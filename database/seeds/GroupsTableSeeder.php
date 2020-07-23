<?php

use App\Models\Student;
use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Group::class, 5)->create();
    }
}
