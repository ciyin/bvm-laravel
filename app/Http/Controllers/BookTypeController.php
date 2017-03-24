<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreType;
use App\repositories\BookTypeRepository;
use App\repositories\LogRepository;
use Illuminate\Support\Facades\Auth;

class BookTypeController extends Controller
{
    protected $type;
    protected $log;
    public function __construct(BookTypeRepository $type,LogRepository $log)
    {
        $this->type=$type;
        $this->log=$log;
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
        $this->log->storeLog('新增教材分类：'.$request->book_type);
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
        $this->log->storeLog('编辑教材分类：'.$request->book_type);
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
