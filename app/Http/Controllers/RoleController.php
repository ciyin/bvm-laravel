<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRole;
use App\repositories\LogRepository;
use App\repositories\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    protected $role;
    protected $log;
    public function __construct(RoleRepository $role,LogRepository $log)
    {
        $this->role=$role;
        $this->log=$log;
    }

    /**
     * 显示角色列表。
     */
    public function index()
    {
        return view('role/rolePage',['roles'=>$this->role->roleList()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role/rolePage',['roles'=>$this->role->searchRole($_GET['search_role'])]);
    }

    /**
     * 新增角色。
     */
    public function store(StoreRole $request)
    {
        $this->role->storeRole($request);
        $this->log->storeLog('新增角色：'.$request->role);
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
        $this->log->storeLog('编辑角色：'.$request->role);
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

    public function search($request){

    }
}
