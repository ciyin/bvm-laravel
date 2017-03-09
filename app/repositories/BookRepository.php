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

    public function bookList(){
        $list=Book::all();
        return $list;
    }

    public function storeBook($request){
        $book=new Book();
        $book->book=$request->book;
        $book->exam_type_id=$request->exam_type;
        $book->book_type_id=$request->book_type;
        $book->contents=$request->contents;
        $book->using_instruction=$request->using_instruction;
        $book->status=$request->status;
        $book->user_id=Auth::id();
        $book->save();
        return $book;
    }

    public function updateBook($request,$id){
        $book=Book::find($id);
        $book->book=$request->book;
        $book->exam_type_id=$request->exam_type;
        $book->book_type_id=$request->book_type;
        $book->contents=$request->contents;
        $book->using_instruction=$request->using_instruction;
        $book->status=$request->status;
        $book->save();
    }

}