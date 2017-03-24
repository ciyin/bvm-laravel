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
                <p>TOEFL：共30本</p>
                <p>学生用书：10本，其中停用7本</p>
                <p>教师用书：20本，其中停用7本</p>
                <p>课本：10本，其中停用7本</p>
                <p>模考卷：20本，其中停用7本</p>
                <p>阅读：共1本</p>
            </div>
        </div>
    </div>
@endsection
