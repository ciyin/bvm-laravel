<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[
        'role',
    ];

// 关联角色
// 获取该角色下的所有用户信息：$role->users()->get();
    public function users(){
        return $this->hasMany('App\User');
    }
}
