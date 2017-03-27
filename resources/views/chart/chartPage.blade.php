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
                @foreach($exams as $exam)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>{{$exam->exam_type}}</strong>
                            <span><small>（{{count($exam->books)}}）</small></span>
                        </div>
                        <div class="panel-body">
                            @foreach($types as $type)
                                <p>{{$type->book_type}}：共{{count($type->books)}}本</p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
