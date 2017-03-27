<?php

namespace App\Http\Controllers;

use App\ExamType;
use App\Http\Requests\StoreSubject;
use App\repositories\LogRepository;
use App\repositories\SubjectRepository;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    protected $log;
    public function __construct(LogRepository $log)
    {
        $this->log=$log;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * 新增科目
     */
    public function store(StoreSubject $request,SubjectRepository $subject)
    {
        $exam=ExamType::find($request->exam_type_id);
        $subject->storeSubject($request,$exam);
        $this->log->storeLog('新增科目：'.$exam->exam_type.'-'.$request->subject);
        return redirect('/examtype');
    }

    /**
     * 新增教材表单中：点击考试类型，显示其对应的科目
     */
    public function show($id)
    {
        $subjects=ExamType::find($id)->subjects()->get();
        return view('subject/subjectRadio',['subjects'=>$subjects]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
