<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable=[
        'book_id','attachment','saved_at','status','note'
    ];

//  获取该附件所关联的其他模型
    public function attachmentable(){
        return $this->morphTo();
    }

//  关联用户
    public function user(){
        return $this->belongsTo('App\User');
    }

}
