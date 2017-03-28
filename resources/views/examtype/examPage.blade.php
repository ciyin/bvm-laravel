@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-xs-2">
                @if(Auth::user()->role_id==1)
                    @include('nav/admin')
                @elseif(Auth::user()->role_id==2)
                    @include('nav/editor')
                @else
                    @include('nav/user')
                @endif
            </div>
            <div class="col-lg-10 col-md-10 col-xs-10">
                <div class="row">
                    <div class="row">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(count($exams)==0)
                            <div class="alert alert-danger">
                                <ul>
                                    <li>没有找到相关记录！</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addExam">
                            新增
                        </button>
                        @include('examtype/addExam')
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <div style="float: right;margin-left: 5px">
                            <form action="{{route('examtype.index')}}" method="get">
                                <button type="submit" class="btn btn-default btn-sm">重置</button>
                            </form>
                        </div>
                        <div style="float: right">
                            <form method="get" action="{{route('examtype.create')}}">
                                <input type="text" name="search_examtype" placeholder="请输入考试类型搜索">
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
