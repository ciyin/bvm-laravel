@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--教材基本信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('book/bookInfo')
            </div><!--基本信息-->

            {{--教材版本信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-3">
                        <ul>
                            @foreach($versions as $version)
                            <li>{{$version->version}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-9 col-xs-9">
                        hhhhhhhhh
                    </div>
                </div>
                @include('version/versionList')
            </div><!--版本信息-->

            {{--教材附件信息--}}
            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('attachment/attachList')
            </div><!--附件信息-->
        </div>
    </div>
@endsection
