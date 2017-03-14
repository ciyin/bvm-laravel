<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    protected $fillable=[
        'book_type',
    ];

    public function books(){
        return $this->hasMany('App\Book');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
