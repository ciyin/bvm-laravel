<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable=[
        'book_id','attachment','saved_at','status'
    ];

    public function attachmentable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function book(){
        return $this->belongsTo('App\Book');
    }
}
