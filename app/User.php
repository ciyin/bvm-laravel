<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','city','status','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

// 关联角色合同
// 获取该用户的角色信息：$user->role;
    public function role(){
        return $this->belongsTo('App\Role');
    }

// 关联考试类型
// 添加考试类型记录：$user->examTypes()->save();
// 获取该用户所添加的所有考试类型记录：$user->examTypes()->get();
    public function examTypes(){
        return $this->hasMany('App\ExamType');
    }

// 关联教材类型
// 添加教材类型记录：$user->bookTypes()->save();
// 获取该用户所添加的所有教材类型记录：$user->bookTypes()->get();
    public function bookTypes(){
        return $this->hasMany('App\BookType');
    }

// 关联教材
// 添加教材记录：$user->books()->save();
// 获取该用户所添加的教材记录: $user->books()->get();
    public function books()
    {
        return $this->hasMany('App\Book');
    }


// 关联版本
// 添加版本记录：$user->versions()->save();
// 实际使用$book->versions()->save()来存储版本信息；
// 获取该用户所添加的版本记录: $user->books()->get();
    public function versions(){
        return $this->hasManyThrough('App\Version','App\Book');
    }

// 关联用户本身
// 添加用户记录: $user->user()->save();
// 获取该条用户记录的创建人信息：$user->user();
    public function user(){
        return $this->belongsTo($this);
    }

// 关联附件
// 添加附件记录：$user->attachments()->save();
// 获取该用户所创建的附件记录：$user->attachments()->get()
    public function attachments(){
        return $this->hasMany('App\Attachment');
    }
}
