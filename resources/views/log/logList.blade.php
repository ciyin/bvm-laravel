<table class="table table-responsive">
    <tr>
        <td>序号</td>
        <td>用户</td>
        <td>操作内容</td>
        <td>时间</td>
    </tr>

    @foreach($logs as $log)
        <tr>
            <td>{{$log->id}}</td>
            <td>{{$log->user->name}}</td>
            <td>{{$log->operation}}</td>
            <td>{{$log->created_at}}</td>
        </tr>
    @endforeach

</table>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div style="float: left">
            {{$logs->links()}}
        </div>
        <div style="float: left;height: 95px;line-height: 95px;margin-left: 5px">
            <small>每页20条，共{{$rows}}条</small>
        </div>
    </div>
</div>