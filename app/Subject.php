<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        'subject'
    ];

    public function book(){
        return $this->belongsTo('App\Book');
    }

    public function examType(){
        return $this->belongsTo('App\ExamType');
    }
}
