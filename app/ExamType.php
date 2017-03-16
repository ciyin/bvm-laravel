<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    protected $fillable=[
        'exam_type',
    ];

// 关联用户
// 获取该条记录的创建人信息: $examType->user();
    public function user(){
        return $this->belongsTo('App\User');
    }

// 关联教材
// 获取该类型下的所有教材信息：$examType->books();
    public function books(){
        return $this->hasMany('App\Book');
    }
}
