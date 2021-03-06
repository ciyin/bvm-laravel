<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>教材分类</td>
        <td>创建人</td>
        <td>创建时间</td>
        <td>最后修改时间</td>
        <td>操作</td>
    </tr>
    @foreach($types as $type)
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->book_type}}</td>
            <td>{{$type->user->name}}</td>
            <td>{{$type->created_at}}</td>
            <td>{{$type->updated_at}}</td>
            <td>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editType{{$type->id}}">
                    编辑
                </button>
                @include('booktype/editType')
            </td>
        </tr>
    @endforeach
</table>