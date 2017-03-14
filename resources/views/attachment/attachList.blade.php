<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>附件名称</td>
        <td>是否全书通用</td>
        <td>关联版本号</td>
        <td>状态</td>
        <td>上传日期</td>
        <td>操作</td>
    </tr>

    {{--@foreach($attachs as $attach)--}}
        {{--<tr>--}}
            {{--<td>{{$attach->id}}</td>--}}
            {{--<td>{{$attach->attachment}}</td>--}}
            {{--<td>{{$attach->attachmentable_type}}</td>--}}
            {{--<td>{{$attach->version->version}}</td>--}}
            {{--<td>{{$attach->status}}</td>--}}
            {{--<td>{{$attach->created_at}}</td>--}}
            {{--<td>--}}
                {{--<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editAttach{{$attach->id}}">--}}
                    {{--编辑--}}
                {{--</button>--}}
                {{--@include('attachment/editAttach')--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--@endforeach--}}

</table>