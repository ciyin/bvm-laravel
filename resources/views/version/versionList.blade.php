<table class="table table-responsive">
    <thead>
    <tr>
        <td>版本信息：</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td width="10%" class="td">版本号</td>
        <td width="90%" class="td">改版说明&附件</td>
    </tr>
    <tr>
        <td width="10%" class="td">
            <ul style="padding-left: 20px;margin-bottom: 0">
                @foreach($versions as $version)
                    <li>{{$version->version}}</li>
                @endforeach
            </ul>
        </td>
        <td width="90%" class="td">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-xs-10">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <span>改版说明：</span>{{$version->update_reason}}
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <span>附件：</span>
                            <ul>
                                <li>答案&nbsp;&nbsp;<a href=""><small>下载</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-2">
                    <img src="" alt="暂无封面">
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>