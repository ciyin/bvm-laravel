<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>考试类型</td>
        <td>科目</td>
        <td>创建人</td>
        {{--<td>创建时间</td>--}}
        <td>最后修改时间</td>
        <td>操作</td>
    </tr>
    @foreach($exams as $exam)
        <tr>
            <td>{{$exam->id}}</td>
            <td>{{$exam->exam_type}}</td>
            <td>
                @foreach($exam->subjects as $value)
                    {{$value['subject'].'/'}}
                @endforeach
            </td>
            <td>{{$exam->user->name}}</td>
            {{--<td>{{$exam->created_at}}</td>--}}
            <td>{{$exam->updated_at}}</td>
            <td>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editExam{{$exam->id}}">
                    编辑
                </button>
                @include('examtype/editExam')
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#addSubject{{$exam->id}}">
                    科目
                </button>
                @include('subject/addSubject')
            </td>
        </tr>
    @endforeach
</table>