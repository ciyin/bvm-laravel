<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreExam;
use App\repositories\ExamTypeRepository;
use App\repositories\LogRepository;
use App\repositories\SubjectRepository;
use App\Subject;
use Illuminate\Support\Facades\Auth;

class ExamTypeController extends Controller
{
    protected $exam;
    protected $log;
    public function __construct(ExamTypeRepository $exam,LogRepository $log)
    {
        $this->exam=$exam;
        $this->log=$log;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('examtype/examPage',['exams'=>$this->exam->examList()]);
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
     * 新增考试类型。
     */
    public function store(StoreExam $request,SubjectRepository $subject)
    {
        $exam=Auth::user()->examTypes()->save($this->exam->storeExam($request));
        $subject->storeSubject($request,$exam);
        $this->log->storeLog('新增考试类型：'.$request->exam_type);
        $this->log->storeLog('新增科目：'.$request->subject);
        return redirect('/examtype');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * 编辑考试类型。
     */
    public function update(StoreExam $request, $id)
    {
        $this->exam->updateExam($request,$id);
        $this->log->storeLog('编辑考试类型：'.$request->exam_type);
        return redirect('/examtype');
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
