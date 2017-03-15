
@foreach($versions as $version )
    <table class="table table-responsive">
        <tr>
            <td width="10%" class="td">版本号：</td>
            <td width="80%" class="td">{{$version->version}}</td>
            <td width="10%" class="td" rowspan="4"><img src=""></td>
        </tr>
        <tr>
            <td width="10%" class="td">改版时间：</td>
            <td width="80%" class="td">{{$version->updated_at}}</td>
        </tr>
        <tr>
            <td width="10%" class="td">改版说明：</td>
            <td width="80%" class="td">{{$version->update_reason}}</td>
        </tr>
        <tr>
            <td width="10%" class="td">附件：</td>
            <td width="80%" class="td">答案</td>
        </tr>
    </table>
@endforeach
