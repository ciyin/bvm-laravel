<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreType;
use App\repositories\BookTypeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookTypeController extends Controller
{
    protected $type;
    public function __construct(BookTypeRepository $type)
    {
        $this->type=$type;
    }

    /**
     * 显示教材分类列表。
     *
     */
    public function index()
    {
        return view('booktype/typePage',['types'=>$this->type->typeList()]);
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
     * 新增教材分类。
     */
    public function store(StoreType $request)
    {
        Auth::user()->bookTypes()->save($this->type->storeType($request));
        return redirect('/booktype');
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
     * 编辑教材分类。
     */
    public function update(StoreType $request, $id)
    {
        $this->type->updateType($request,$id);
        return redirect('/booktype');
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
