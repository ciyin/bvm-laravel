<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $fillable=[
        'version','update_reason','user_id',
    ];

// 关联教材模型
// 获取该版本所对应的教材信息：$version->book;
    public function book(){
        return $this->belongsTo('APP\Book');
    }
// 关联用户模型
// 获取该版本的创建人信息：$version->user;
    public function user(){
        return $this->belongsTo('App\User');
    }
// 关联附件模型
// 获取该版本的附件信息：$version->attachments;
// 新增所属该版本的附件记录: $version->attachments()->save();
    public function attachments(){
        return $this->morphMany('App\Attachment','attachmentable');
    }
// 关联封面模型
// 获取该版本的封面信息：$version->cover;
    public function cover(){
        return $this->hasOne('App\Cover');
    }
}
