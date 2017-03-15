<?php

namespace App\Http\Controllers;


use App\Book;
use App\Http\Requests\EditBook;
use App\Http\Requests\StoreBook;
use App\repositories\BookRepository;
use App\repositories\BookTypeRepository;
use App\repositories\CoverRepository;
use App\repositories\ExamTypeRepository;
use App\repositories\VersionRepository;
use App\Version;
use Image;


class BookController extends Controller
{
    /**
     * @var BookRepository 教材的增删改查；
     * @var ExamTypeRepository 考试类型的增删改查；在新增教材表单中，须遍历并显示所有的考试类型。
     * @var BookTypeRepository 教材分类的增删改查；在新增教材表单中，须便利并显示所有的教材类型。
     * @var VersionRepository 版本的增删改查；在新增教材的同时可新增版本号。
     */
    protected $book;
    protected $exam;
    protected $type;
    protected $version;
    protected $cover;
    public function __construct(BookRepository $book,ExamTypeRepository $exam,BookTypeRepository $type,
                                VersionRepository $version,CoverRepository $cover)
    {
        $this->book=$book;
        $this->exam=$exam;
        $this->type=$type;
        $this->version=$version;
        $this->cover=$cover;
    }


    /**
     * 显示教材列表；
     * $exam：新增教材表单中的考试类型。
     * $type：新增教材表单中的教材分类。
     */
    public function index()
    {
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
     * 新增教材记录及版本记录。
     */
    public function store(StoreBook $request)
    {
        $book=$this->book->storeBook($request);
        $version=$this->version->storeVersion($request);
        $book->versions()->save($version);

        if ($request->cover){
            $version=Version::find($version->id);
            $cover=$this->cover->storeCover($request);
            $version->cover()->save($cover);
        }

        return redirect('/book');
    }

    /**
     * 显示教材详情。
     * $version：取出该本教材的所有版本记录。
     *
     */
    public function show($id)
    {
        $book=Book::find($id);
        $version=$book->versions()->with('cover')->orderBy('created_at','desc')->get();

//        dd($version->toArray());

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
     * 编辑教材。
     *
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
