<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    protected $fillable=[
        'cover','saved_at'
    ];

// 关联版本
// 获取该封面所属版本号的版本信息: $cover->version();
    public function version(){
        return $this->belongsTo('App\Version');
    }

}
