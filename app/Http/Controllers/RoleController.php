<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRole;
use App\repositories\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    protected $role;
    public function __construct(RoleRepository $role)
    {
        $this->role=$role;
    }

    /**
     * 显示角色列表。
     */
    public function index()
    {
        $list=$this->role->roleList();
        return view('role/rolePage',['roles'=>$list]);
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
     * 新增角色。
     */
    public function store(StoreRole $request)
    {
        $this->role->storeRole($request);
        return redirect('/role');
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
     * 编辑角色。
     */
    public function update(StoreRole $request, $id)
    {
        $this->role->updateRole($request,$id);
        return redirect('/role');
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
