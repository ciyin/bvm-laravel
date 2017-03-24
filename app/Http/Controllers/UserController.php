<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Log;
use App\repositories\LogRepository;
use App\repositories\RoleRepository;
use App\repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $user;
    protected $log;
    public function __construct(UserRepository $user,LogRepository $log)
    {
        $this->user=$user;
        $this->log=$log;
    }

    /**
     * 显示用户列表；
     * $role：新增用户表单中，须遍历并取出所有角色记录。
     */
    public function index(RoleRepository $role)
    {
        return view('user/userPage',['users'=>$this->user->userList(),'roles'=>$role->roleList()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 新增用户。
     */
    public function store(StoreUser $request)
    {
        $this->user->storeUser($request);
        $this->log->storeLog('新增用户：'.$request->name);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 更新用户信息。
     */
    public function update(Request $request, $id)
    {
        $this->user->updateUser($request,$id);
        $this->log->storeLog('修改用户信息：'.$request->name);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
