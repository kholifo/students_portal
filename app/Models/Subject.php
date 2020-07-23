<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name'];

    public function students()
    {
        return $this->belongsToMany('App\Models\Student')
            ->withPivot('mark');
    }
}
