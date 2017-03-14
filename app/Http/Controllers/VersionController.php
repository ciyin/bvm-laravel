<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\StoreVersion;
use App\repositories\VersionRepository;
use Illuminate\Http\Request;


class VersionController extends Controller
{
    protected $version;
    public function __construct(VersionRepository $version)
    {
        $this->version=$version;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * 新增版本记录。
     */
    public function store(StoreVersion $request)
    {
//      改版表单中设置一个隐藏的input，用来传递教材的id。
        $book=Book::find($request->book_id);
        $version=$this->version->storeVersion($request);
        $book->versions()->save($version);
        return redirect('/book');
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
    public function update(Request $request, $id)
    {
        //
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
