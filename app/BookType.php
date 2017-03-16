<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    protected $fillable=[
        'book_type',
    ];

// 关联教材
// 获取该分类下的所有教材信息：$bookType->books();
    public function books(){
        return $this->hasMany('App\Book');
    }

// 关联用户
// 获取该条记录的创建人信息: $bookType->user();
    public function user(){
        return $this->belongsTo('App\User');
    }
}
