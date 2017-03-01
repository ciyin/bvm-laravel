<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExam;
use App\repositories\ExamTypeRepository;
use Illuminate\Http\Request;

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
        $list=$this->exam->examList();
        return view('examtype/examPage',['exams'=>$list]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExam $request)
    {
        $this->exam->storeExam($request);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
