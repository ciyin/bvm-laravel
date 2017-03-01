<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    protected $fillable=[
        'exam_type','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function books(){
        return $this->hasMany('App\Book');
    }
}
