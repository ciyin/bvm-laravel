{{--改版--}}
<div class="modal fade" id="addVersion{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">教材改版</h4>
            </div>
            <form method="post" action="{{route('version.store')}}">
                {{csrf_field()}}
                <div class="modal-body">
                    <div>
                        <input type="hidden" name="book_id" value="{{$book->id}}">
                    </div>
                    <div class="form-group">
                        <fieldset disabled>
                            <label for="editBook">教材名称：</label>
                            <input type="text" class="form-control" id="editBook" name="book" value="{{$book->book}}">
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <label for="addVersion">版本号：</label>
                        <input type="text" class="form-control" id="addVersion" name="version">
                    </div>
                    <div class="form-group">
                        <label>改版说明：</label>
                        <textarea class="form-control" rows="3" name="update_reason"></textarea>
                    </div>
                    <div>
                        <label>封面：</label>
                        <input type="file">
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