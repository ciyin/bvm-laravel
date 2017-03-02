<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $fillable=[
        'version','book_id','update_reason','user_id',
    ];

    public function book(){
        return $this->belongsTo('APP\Book');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
