{{--新增教材--}}
<div class="modal fade" id="addBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">新增教材</h4>
            </div>
            <form method="post" action="{{route('book.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="addBook">教材名称：</label>
                        <input type="text" class="form-control" id="addBook" name="book">
                    </div>
                    <div>
                        <label>考试类型：</label>
                        @foreach($exams as $exam)
                            <label class="radio-inline">
                                <input type="radio" name="exam_type" value="{{$exam->id}}">{{$exam->exam_type}}
                            </label>
                        @endforeach
                    </div>
                    <div>
                        <label>教材分类：</label>
                        @foreach($types as $type)
                            <label class="radio-inline">
                                <input type="radio" name="book_type" value="{{$type->id}}">{{$type->book_type}}
                            </label>
                        @endforeach
                    </div>
                    <div>
                        <label>使用分类：</label>
                        <label class="radio-inline">
                            <input type="radio" name="using_type" value="学生用书">学生用书
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="using_type" value="教师用书">教师用书
                        </label>
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
                    <div>
                        <label>内容简介：</label>
                        <textarea class="form-control" rows="3" name="contents"></textarea>
                    </div>
                    <div>
                        <label>使用说明：</label>
                        <textarea class="form-control" rows="3" name="using_instruction"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="addVersion">版本号：</label>
                        <input type="text" class="form-control" id="addVersion" name="version">
                        <input type="hidden" name="update_reason" value="此版本为该书的第一个版本">
                    </div>
                    <div class="form-group">
                        <label for="cover">封面：</label>
                        <input type="file" id="cover" name="cover">
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