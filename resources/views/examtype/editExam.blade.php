{{--编辑考试类型--}}
<div class="modal fade" id="editExam{{$exam->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">编辑考试类型</h4>
            </div>
            <form method="post" action="{{route('examtype.update',$exam->id)}}">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editExam">考试类型：</label>
                        <input type="text" class="form-control" id="editExam" name="exam_type">
                        {{method_field('PUT')}}
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