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

    public function userList(){
        $list=User::with('role','user')->get();
        return $list;
    }

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