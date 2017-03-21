<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\StoreVersion;
use App\repositories\CoverRepository;
use App\repositories\VersionRepository;
use Illuminate\Http\Request;
use App\Version;


class VersionController extends Controller
{
    protected $version;
    protected $cover;
    public function __construct(VersionRepository $version,CoverRepository $cover)
    {
        $this->version=$version;
        $this->cover=$cover;
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
//      新增版本记录：改版表单中设置一个隐藏的input，用来传递教材的id。
        $version=$this->version->storeVersion($request);
        Book::find($request->book_id)->versions()->save($version);

//      新增封面记录
        if ($request->cover){
            $version=Version::find($version->id);
            $version->cover()->save($this->cover->storeCover($request));
        }

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
