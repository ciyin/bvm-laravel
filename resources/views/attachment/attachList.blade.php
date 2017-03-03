<table class="table table-responsive">
    <thead>
    <tr>
        <td colspan="6">附件信息：
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addAttach">
                添加
            </button>
            @include('attachment/addAttach')
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="td">序号</td>
        <td class="td">附件名称</td>
        <td class="td">是否全书通用</td>
        <td class="td">关联版本号</td>
        <td class="td">状态</td>
        <td class="td">上传日期</td>
        <td class="td">操作</td>
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

    </tbody>
</table>