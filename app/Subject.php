<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name'];

    public function student_mark()
    {
        return $this->hasMany(Student_mark::class);
    }
}
