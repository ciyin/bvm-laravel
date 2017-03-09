<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\EditBook;
use App\Http\Requests\StoreBook;
use App\repositories\BookRepository;
use App\repositories\BookTypeRepository;
use App\repositories\ExamTypeRepository;
use App\repositories\VersionRepository;
use App\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    protected $book;
    protected $exam;
    protected $type;
    protected $version;
    public function __construct(BookRepository $book,ExamTypeRepository $exam,BookTypeRepository $type,VersionRepository $version)
    {
        $this->book=$book;
        $this->exam=$exam;
        $this->type=$type;
        $this->version=$version;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::with('examType')->get()->map(function($item){
            return [
                'id' => $item['id'],
                'book' => $item['book'],
                'examId' => $item->examType->id
            ];
        });
        dd($book->toArray());
        exit;
        $list=$this->book->bookList();
        $exam=$this->exam->examList();
        $type=$this->type->typeList();
        return view('book/bookPage',['books'=>$list,'exams'=>$exam,'types'=>$type]);
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
    public function store(StoreBook $request)
    {
        $book=$this->book->storeBook($request);
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
        $book=Book::find($id);
        $version=$book->versions;
        return view('book/bookDetails',['book'=>$book,'versions'=>$version]);
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
    public function update(EditBook $request, $id)
    {
        $this->book->updateBook($request,$id);
        return redirect('/book');
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
