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
        $list=ExamType::with('user')->get();
        return $list;
    }

    public function storeExam($request){
        $exam=new ExamType();
        $exam->exam_type=$request->exam_type;
        return $exam;
    }

    public function updateExam($request,$id){
        $exam=ExamType::find($id);
        $exam->exam_type=$request->exam_type;
        $exam->save();
    }
}