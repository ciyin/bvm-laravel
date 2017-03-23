<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        'subject'
    ];

    public function books(){
        return $this->hasMany('App\Book');
    }

    public function examType(){
        return $this->belongsTo('App\ExamType');
    }
}
