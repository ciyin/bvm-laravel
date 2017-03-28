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
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    @if(count($books)==0)
                        <div class="alert alert-danger">
                            <ul>
                                <li>没有找到相关记录！</li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        @if(Auth::user()->role_id==1 || Auth::user()->role_id==2)
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addBook">
                                新增
                            </button>
                            @include('book/addBook')
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <div style="float: right;margin-left: 5px">
                            <form action="{{route('book.index')}}" method="get">
                                <button type="submit" class="btn btn-default btn-sm">重置</button>
                            </form>
                        </div>
                        <div style="float: right">
                            <form method="get" action="{{route('book.create')}}">
                                <input type="text" name="search_book" placeholder="请输入教材名称搜索">
                                <button type="submit" class="btn btn-default btn-sm">搜索</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        @include('book/bookList')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
