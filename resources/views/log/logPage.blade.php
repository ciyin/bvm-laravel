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
                    @if(count($logs)==0)
                        <div class="alert alert-danger">
                            <ul>
                                <li>没有找到相关记录！</li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div style="float: right;margin-left: 5px">
                            <form action="{{route('log.index')}}" method="get">
                                <button type="submit" class="btn btn-default btn-sm">重置</button>
                            </form>
                        </div>
                        <div style="float: right">
                            <form method="get" action="{{route('log.create')}}">
                                <input type="text" name="search_log" placeholder="搜索操作内容">
                                <button type="submit" class="btn btn-default btn-sm">搜索</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        @include('log/logList')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
