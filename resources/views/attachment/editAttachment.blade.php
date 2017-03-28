{{--编辑特定版本的附件--}}
<div class="modal fade" id="editAttachments{{$attachment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">编辑附件</h4>
            </div>
            <form method="post" action="{{route('attachment.update',$attachment->id)}}">
                {{csrf_field()}}
                <div class="modal-body">
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    {{method_field('PUT')}}

                    <div class="form-group">
                        <fieldset disabled>
                            <label for="attachment">附件：</label>
                            <input id="attachment" class="form-control" name="original_name" value="{{$attachment->original_name}}">
                            <input type="hidden"   name="attachment" value="{{$attachment->id}}">
                            {{method_field('PUT')}}
                        </fieldset>
                        <input type="hidden" name="attach" value="{{$attachment->original_name}}">
                    </div>

                    <div class="form-group">
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


