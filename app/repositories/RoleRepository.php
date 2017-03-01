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

    public function roleList(){
        $list=Role::all();
        return $list;
    }

    public function storeRole($request){
        $role=new Role();
        $role->role=$request->role;
        $role->user_id=Auth::id();
        $role->save();
    }

    public function updateRole($request,$id){
        $role=Role::find($id);
        $role->role=$request->role;
        $role->save();
    }

}