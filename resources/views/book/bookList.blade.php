<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>教材</td>
        <td>考试类型</td>
        <td>科目</td>
        <td>教材分类</td>
        <td>使用分类</td>
        <td>状态</td>
        <td>操作</td>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->book}}</td>
            <td>{{$book->examType->exam_type}}</td>
            <td>{{$book->subject['subject']}}</td>
            <td>{{$book->bookType->book_type}}</td>
            <td>{{$book->using_type}}</td>
            @if($book->status==1)
                <td>使用中</td>
            @else
                <td>停用</td>
            @endif
            <td>
                <a href="{{route('book.show',$book->id)}}" target="_blank">
                    <button type="button" class="btn btn-default btn-xs">详情</button>
                </a>
                @if(Auth::user()->role_id==1 || Auth::user()->role_id==2)
                    <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editBook{{$book->id}}">
                        编辑
                    </button>
                    @include('book/editBook')
                    <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#addVersion{{$book->id}}">
                        改版
                    </button>
                    @include('version.addVersion')
                @endif
            </td>
        </tr>
    @endforeach
</table>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div style="float: left">
            {{$books->links()}}
        </div>
        <div style="float: left;height: 95px;line-height: 95px;margin-left: 5px">
            <small>每页20条，共{{$rows}}条</small>
        </div>
    </div>
</div>
