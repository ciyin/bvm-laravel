<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Book;
use App\Http\Requests\StoreAttachment;
use App\repositories\AttachmentRepository;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    protected $attachment;
    public function __construct(AttachmentRepository $attachment)
    {
        return $this->attachment=$attachment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(StoreAttachment $request)
    {
        $this->attachment->storeAttachment($request);
        $book=Book::find($request->book_id);
        $version=$book->versions()->with('cover','attachments')->orderBy('created_at','desc')->get();
        $book_attachments=$book->attachments()->get();
        return view('book/bookDetails',['book'=>$book,'versions'=>$version,'attachments'=>$book_attachments]);
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
