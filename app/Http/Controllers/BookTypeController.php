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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=$this->type->typeList();
        return view('booktype/typePage',['types'=>$list]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreType $request)
    {
        $user=Auth::user();
        $type=$this->type->storeType($request);
        $user->bookTypes()->save($type);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
