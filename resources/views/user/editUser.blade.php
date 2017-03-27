{{--编辑用户--}}
<div class="modal fade" id="editUser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">编辑用户</h4>
            </div>
            <form method="post" action="{{route('user.update',$user->id)}}">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="User">姓名：</label>
                        <input type="text" class="form-control" id="User" name="name">
                        {{method_field('PUT')}}
                    </div>
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="Email">邮箱：</label>
                            <input type="text" class="form-control" id="Email" name="email" value="{{$user->email}}">
                            {{method_field('PUT')}}
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="Password">密码：</label>
                        <input type="password" class="form-control" id="Password" name="password">
                        {{method_field('PUT')}}
                    </div>
                    <div>
                        <label>角色：</label>
                        @foreach($roles as $role)
                            <label class="radio-inline">
                                <input type="radio" name="role" value="{{$role->id}}">{{$role->role}}
                                {{method_field('PUT')}}
                            </label>
                        @endforeach
                    </div>
                    <div>
                        <label>城市：</label>
                        <label class="radio-inline">
                            <input type="radio" name="city" value="上海"> 上海
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="city" value="北京"> 北京
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="city" value="广州"> 广州
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="city" value="成都"> 成都
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="city" value="长春"> 长春
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="city" value="沈阳"> 沈阳
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="city" value="大连"> 大连
                            {{method_field('PUT')}}
                        </label>
                    </div>
                    <div>
                        <label>状态：</label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="使用中" checked> 启用
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="停用"> 停用
                            {{method_field('PUT')}}
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
            </form>
        </div>
    </div>
</div>