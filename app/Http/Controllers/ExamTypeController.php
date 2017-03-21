<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExam;
use App\repositories\ExamTypeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamTypeController extends Controller
{
    protected $exam;
    public function __construct(ExamTypeRepository $exam)
    {
        $this->exam=$exam;
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
    public function store(StoreExam $request)
    {
        Auth::user()->examTypes()->save($this->exam->storeExam($request));
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
