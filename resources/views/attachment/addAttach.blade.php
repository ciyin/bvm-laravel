{{--新增附件--}}
<div class="modal fade" id="addAttach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">添加附件</h4>
            </div>
            <form method="post" action="">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label>附件名称：</label>
                        <input type="text" class="form-control" name="attachment">
                    </div>
                    <div>
                        <label>是否通用：</label>
                        <label class="radio-inline">
                            <input type="radio" name="is_general" value="1"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_general" value="0"> 否
                        </label>
                    </div>
                    <div>
                        <label>关联版本号：</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">V1.00
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">V1.00
                            </label>
                        </div>
                    </div>
                    <div>
                        <label>使用状态：</label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="1" checked> 启用
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="0"> 停用
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