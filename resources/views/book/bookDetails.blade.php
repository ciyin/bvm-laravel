@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--教材基本信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('book/bookInfo')
            </div>

            {{--教材版本信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('version/versionList')
            </div>

            {{--教材附件信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('attachment/attachList')
            </div>
        </div>
    </div>
@endsection
