<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/1
 * Time: 16:22
 */
namespace App\repositories;
use App\ExamType;

class ExamTypeRepository{

//    取出所有考试类型。
    public function examList(){
        $list=ExamType::with('user','subjects')->get();
        return $list;
    }

//    新增考试类型。
    public function storeExam($request){
        $exam=new ExamType();
        $exam->exam_type=$request->exam_type;
        return $exam;
    }

//    更新考试类型。
    public function updateExam($request,$id){
        $exam=ExamType::find($id);
        $exam->exam_type=$request->exam_type;
        $exam->save();
    }
//    搜索考试类型。
    public function searchExam($exam){
        $list=ExamType::where('exam_type','like','%'.$exam.'%')->get();
        return $list;
    }
}