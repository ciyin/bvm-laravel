@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-xs-2">
                @include('nav/admin')
            </div>
            <div class="col-lg-10 col-md-10 col-xs-10">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addExam">
                            新增
                        </button>
                        @include('examtype/addExam')
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <div style="float: right">
                            <form>
                                <input type="text">
                                <button type="submit" class="btn btn-default btn-sm">搜索</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        @include('examtype/examList')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection