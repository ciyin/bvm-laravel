<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>教材</td>
        <td>考试类型</td>
        <td>教材分类</td>
        <td>状态</td>
        <td>最新版本号</td>
        <td>创建人</td>
        <td>创建时间</td>
        <td>操作</td>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->book}}</td>
            <td>{{$book->exam_type_id}}</td>
            <td>{{$book->book_type_id}}</td>
            <td>{{$book->status}}</td>
            <td>{{$book->version}}</td>
            <td>{{$book->user_id}}</td>
            <td>{{$book->created_at}}</td>
            <td>
                <a href="{{route('book.show',$book->id)}}" target="_blank">
                    <button type="button" class="btn btn-default btn-xs">详情</button>
                </a>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editBook{{$book->id}}">
                    编辑
                </button>
                @include('book/editBook')
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#addVersion{{$book->id}}">
                    改版
                </button>
                @include('version.addVersion')
            </td>
        </tr>
    @endforeach
</table>