<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>角色</td>
        <td>创建人</td>
        <td>创建时间</td>
        <td>最后修改时间</td>
        <td>操作</td>
    </tr>
    @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->role}}</td>
            <td>{{$role->user_id}}</td>
            <td>{{$role->created_at}}</td>
            <td>{{$role->updated_at}}</td>
            <td>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editRole{{$role->id}}">
                    编辑
                </button>
                @include('role/editRole')
            </td>
        </tr>
    @endforeach
</table>