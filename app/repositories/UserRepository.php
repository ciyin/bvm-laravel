<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/1
 * Time: 18:41
 */
namespace App\repositories;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserRepository{

//    取出所有用户记录；with user：取出创建人。
    public function userList(){
        $list=User::with('role','user')->get();
        return $list;
    }

//    新增用户记录。
    public function storeUser($request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->role_id=$request->role;
        $user->city=$request->city;
        $user->status=$request->status;
        $user->user_id=Auth::id();
        $user->save();
    }

//    更新用户记录。
    public function updateUser($request,$id){
        $user=User::find($id);
        $user->name=$request->name;
        $user->password=bcrypt($request->password);
        $user->role_id=$request->role;
        $user->city=$request->city;
        $user->status=$request->status;
        $user->user_id=Auth::id();
        $user->save();
    }
}