<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/23
 * Time: 16:31
 */

namespace App\repositories;

use App\Subject;

class SubjectRepository{

    public function storeSubject($request,$exam){
        $subjects=explode('/',$request->subject);
        for ($i=0;$i<count($subjects);$i++){
            $subject=new Subject();
            $subject->subject=$subjects[$i];
            $exam->subjects()->save($subject);
        }
    }
}