<?php

namespace App\Http\Controllers;


use App\Book;
use App\ExamType;
use App\Http\Requests\EditBook;
use App\Http\Requests\StoreBook;
use App\Log;
use App\repositories\BookRepository;
use App\repositories\BookTypeRepository;
use App\repositories\CoverRepository;
use App\repositories\ExamTypeRepository;
use App\repositories\LogRepository;
use App\repositories\VersionRepository;
use App\Version;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    /**
     * @var BookRepository 教材的增删改查；
     * @var ExamTypeRepository 考试类型的增删改查；在新增教材表单中，须遍历并显示所有的考试类型。
     * @var BookTypeRepository 教材分类的增删改查；在新增教材表单中，须遍历并显示所有的教材类型。
     * @var VersionRepository 版本的增删改查；在新增教材的同时可新增版本号。
     * @var CoverRepository 新增封面；在新增教材时可新增封面。
     */
    protected $book;
    protected $version;
    protected $cover;
    protected $log;
    public function __construct(BookRepository $book, VersionRepository $version,CoverRepository $cover,LogRepository $log)
    {
        $this->book=$book;
        $this->version=$version;
        $this->cover=$cover;
        $this->log=$log;
    }


    /**
     * 显示教材列表；
     * $exam：新增教材表单中的考试类型。
     * $type：新增教材表单中的教材分类。
     */
    public function index(ExamTypeRepository $exam,BookTypeRepository $type)
    {
        return view('book/bookPage', [
            'books'=>$this->book->bookList(),
            'exams'=>$exam->examList(),
            'types'=>$type->typeList(),
            'rows'=>count($this->book->bookList())
            ]);
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
     * $book:新增教材记录
     * $version：版本实例
     * $log:新增操作记录
     *
     */
    public function store(StoreBook $request)
    {
        $book=$this->book->storeBook($request);
        $version=$this->version->storeVersion($request);
        $book->versions()->save($version);
//        先判断是否有上传封面，如果有，则保存封面
        if ($request->cover){
            Version::find($version->id)->cover()->save($this->cover->storeCover($request));
        }
        $this->log->storeLog('新增教材：'.$request->book);

        return redirect('/book');
    }

    /**
     * 显示教材详情。
     * $version：取出该本教材的所有版本记录及特定版本的附件记录。
     * $book_attachments：取出适用于全部版本的附件记录。
     *
     */
    public function show($id)
    {
        $book=Book::find($id);
        $version=$book->versions()->with('cover','attachments')->orderBy('created_at','desc')->get();
        $book_attachments=$book->attachments()->get();
        return view('book/bookDetails',['book'=>$book,'versions'=>$version,'attachments'=>$book_attachments]);
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
        $this->log->storeLog('编辑教材：'.$request->book);
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
