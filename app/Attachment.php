<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable=[
        'attachment','saved_at','status'
    ];

    public function attachmentable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
