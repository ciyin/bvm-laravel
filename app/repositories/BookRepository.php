<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/2
 * Time: 14:46
 */
namespace App\repositories;

use App\Book;
use App\ExamType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class BookRepository{
//教材列表
    public function bookList(){
        $list=Book::with('examType','bookType','user','subject')->Paginate(20);
        return $list;
    }
//新增教材
    public function storeBook($request){
        $book=new Book();
        $book->book=$request->book;
        $book->exam_type_id=$request->exam_type;
        $book->subject_id=$request->subject_id;
        $book->book_type_id=$request->book_type;
        $book->using_type=$request->using_type;
        $book->contents=$request->contents;
        $book->using_instruction=$request->using_instruction;
        $book->status=$request->status;
        $book->user_id=Auth::id();
        $book->save();
        return $book;
    }
//编辑教材
    public function updateBook($request,$id){
        $book=Book::find($id);
        $book->book=$request->book;
        $book->exam_type_id=$request->exam_type;
        $book->subject_id=$request->subject_id;
        $book->book_type_id=$request->book_type;
        $book->using_type=$request->using_type;
        $book->contents=$request->contents;
        $book->using_instruction=$request->using_instruction;
        $book->status=$request->status;
        $book->save();
    }

}