<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>姓名</td>
        <td>邮箱</td>
        <td>角色</td>
        <td>城市</td>
        <td>状态</td>
        <td>创建人</td>
        <td>创建时间</td>
        <td>操作</td>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role_id}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->status}}</td>
            <td>{{$user->user_id}}</td>
            <td>{{$user->created_at}}</td>
            <td>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editUser{{$user->id}}">
                    编辑
                </button>
                @include('user/editUser')
            </td>
        </tr>
    @endforeach
</table>