{{--新增附件--}}
<div class="modal fade" id="addAttach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">添加附件</h4>
            </div>
            <form method="post" action="{{route('attachment.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <input type="hidden" name="book_id" value="{{$book->id}}">

                    <div class="form-group">
                        <label for="attachment">附件：</label>
                        <input type="file" id="attachment" name="attachment">
                    </div>

                    <div class="form-group">
                        <label>适用于：</label>
                        <label class="radio-inline">
                            <input type="radio" name="is_general" value="1" onclick="hideVersion()"> 全部版本
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_general" value="0" onclick="showVersion()"> 特定版本
                        </label>
                    </div>

                    <div class="form-group" style="display: none" id="versionDiv">
                        <label>关联版本：</label>
                        @foreach($versions as $version)
                            <label class="checkbox-inline">
                                <input type="checkbox" name="related_version[]" value="{{$version->id}}"> {{$version->version}}
                            </label>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label>备注：</label>
                        <textarea class="form-control" rows="3" name="note"></textarea>
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


