<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
        'book','status','contents','using_instruction',
    ];

// 关联考试类型
// 获取该本教材的考试类型信息：$book->examType();
    public function examType(){
        return $this->belongsTo('App\ExamType');
    }

// 关联教材分类
// 获取该本教材的分类信息：$book->bookType();
    public function bookType(){
        return $this->belongsTo('App\BookType');
    }

// 关联用户
// 获取该本教材的创建人信息：$book->user();
    public function user(){
        return $this->belongsTo('App\User');
    }

// 关联版本
// 获取该本教材的所有版本信息：$book->versions()->get();
// 新增该本教材的版本记录: $book->versions()->save();
    public function versions(){
        return $this->hasMany('App\Version');
    }

// 关联附件
// 获取该本教材的所有附件信息: $book->attachments();
// 新增适用于全本版本的附件记录：$book->attachments()->save();
    public function attachments(){
        return $this->morphMany('App\Attachment','attachmentable');
    }
// 关联科目
    public function subjects(){
        return $this->hasManyThrough('App\Subject','App\ExamType');
    }

}
