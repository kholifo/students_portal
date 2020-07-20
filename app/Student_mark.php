<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_mark extends Model
{
    protected $fillable = ['mark' , 'student_id' , 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
