<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'group_id', 'birthday'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function student_mark()
    {
        return $this->hasMany(Student_mark::class);
    }

}
