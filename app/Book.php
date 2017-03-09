<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
        'book','status','contents','using_instruction',
    ];

    public function examType(){
        return $this->belongsTo('App\ExamType');
    }

    public function bookType(){
        return $this->belongsTo('App\BookType');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function versions(){
        return $this->hasMany('App\Version');
    }
}
