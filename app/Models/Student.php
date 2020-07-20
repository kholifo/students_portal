<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'group_id', 'birthday'];
    protected $dates = ['birthday'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function student_marks()
    {
        return $this->hasMany(StudentMark::class);
    }

}
