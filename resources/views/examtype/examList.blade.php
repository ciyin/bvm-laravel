<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>考试类型</td>
        <td>创建人</td>
        <td>创建时间</td>
        <td>最后修改时间</td>
        <td>操作</td>
    </tr>
    @foreach($exams as $exam)
        <tr>
            <td>{{$exam->id}}</td>
            <td>{{$exam->exam_type}}</td>
            <td>{{$exam->user->name}}</td>
            <td>{{$exam->created_at}}</td>
            <td>{{$exam->updated_at}}</td>
            <td>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editExam{{$exam->id}}">
                    编辑
                </button>
                @include('examtype/editExam')
            </td>
        </tr>
    @endforeach
</table>