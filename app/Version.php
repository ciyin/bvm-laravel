<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $fillable=[
        'version','update_reason','user_id',
    ];

    public function book(){
        return $this->belongsTo('APP\Book');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function attachments(){
        return $this->morphMany('App\Attachment','attachmentable');
    }
}
