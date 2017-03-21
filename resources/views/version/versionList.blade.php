@foreach($versions as $version )
    <table class="table table-responsive">
        <tr>
            <td width="10%" class="td">版本号：</td>
            <td width="80%" class="td">{{$version->version}}</td>
            <td width="10%" class="td" rowspan="4">
                @if($version->cover)
                    <img src="{{$version->cover->saved_at}}" height="138px" width="95px">
                @else
                    <img src="" alt="暂无封面">
                @endif
            </td>
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
            <td width="80%" class="td">
                {{--全书通用附件--}}
                <ul style="padding-left: 15px">
                    @if(!count($attachments)==0)
                        @foreach($attachments as $value)
                            <li>
                                <a href="{{$value->saved_at}}">{{$value->original_name}}</a>
                                @if($value->status==1)
                                    <span>（使用中）</span>
                                    <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editAttachment">
                                        停用
                                    </button>
                                @else
                                    <span>（停用）</span>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
                {{--特定版本附件--}}
                <ul style="padding-left: 15px">
                    @if(!count($version->attachments)==0)
                        @foreach($version->attachments as $attachment)
                            <li>
                                <a href="{{$attachment->saved_at}}">{{$attachment->original_name}}</a>
                                @if($attachment->status==1)
                                    <span>（使用中）</span>
                                    <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editAttachment">
                                        停用
                                    </button>
                                @else
                                    <span>（停用）</span>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
                @if(count($attachments)==0&&count($version->attachments)==0)
                    <span>暂无附件</span>
                @endif
            </td>
        </tr>
    </table>
@endforeach
