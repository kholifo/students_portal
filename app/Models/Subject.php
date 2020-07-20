<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name'];

    public function student_marks()
    {
        return $this->hasMany(StudentMark::class);
    }
}
