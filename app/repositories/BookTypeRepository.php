<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/1
 * Time: 18:27
 */
namespace App\repositories;

use App\BookType;
use App\User;
use Illuminate\Support\Facades\Auth;

class BookTypeRepository{

//    取出所有教材分类。
    public function typeList(){
        $list=BookType::with('user')->get();
        return $list;
    }

//    新增教材分类。
    public function storeType($request){
        $type=new BookType();
        $type->book_type=$request->book_type;
        return $type;
    }

//    更新教材分类。
    public function updateType($request,$id){
        $type=BookType::find($id);
        $type->book_type=$request->book_type;
        $type->save();
    }
}