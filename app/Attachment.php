<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable=[
        'original_name','random_name','saved_at','status','note','attachmentable_id','attachmentable_type',
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
