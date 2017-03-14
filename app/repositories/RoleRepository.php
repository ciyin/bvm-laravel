<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/1
 * Time: 15:15
 */
namespace App\repositories;

use App\Role;
use Illuminate\Support\Facades\Auth;

class RoleRepository{

//    取出所有角色记录。
    public function roleList(){
        $list=Role::all();
        return $list;
    }

//    新增角色。
    public function storeRole($request){
        $role=new Role();
        $role->role=$request->role;
        $role->user_id=Auth::id();
        $role->save();
    }

//    更新角色信息。
    public function updateRole($request,$id){
        $role=Role::find($id);
        $role->role=$request->role;
        $role->save();
    }

}