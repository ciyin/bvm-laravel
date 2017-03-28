@extends('layouts.app')

@section('content')
    <div class="container">
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
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 5px">
                <div style="float: right">
                    @if(Auth::user()->role_id==1 || Auth::user()->role_id==2)
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addAttach">
                           添加附件
                        </button>
                        @include('attachment/addAttach')
                    @endif
                </div>
            </div>

            {{--教材基本信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('book/bookInfo')
            </div>

            {{--教材版本信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('version/versionList')
            </div>
        </div>
    </div>
@endsection
