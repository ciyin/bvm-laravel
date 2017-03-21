@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 5px">
                <div style="float: right">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addAttach">
                       附件
                    </button>
                    @include('attachment/addAttach')
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
