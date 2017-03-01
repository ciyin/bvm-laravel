<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/1
 * Time: 16:22
 */
namespace App\repositories;

use App\ExamType;
use Illuminate\Support\Facades\Auth;

class ExamTypeRepository{

    public function examList(){
        $list=ExamType::all();
        return $list;
    }

    public function storeExam($request){
        $exam=new ExamType();
        $exam->exam_type=$request->exam_type;
        $exam->user_id=Auth::id();
        $exam->save();
    }

    public function updateExam($request,$id){
        $exam=ExamType::find($id);
        $exam->exam_type=$request->exam_type;
        $exam->save();
    }
}