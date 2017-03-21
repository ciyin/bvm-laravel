{{--编辑教材--}}
<div class="modal fade" id="editBook{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">编辑教材</h4>
            </div>
            <form method="post" action="{{route('book.update',$book->id)}}">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <fieldset disabled>
                            <label for="editBook">教材名称：</label>
                            <input type="text" class="form-control" id="editBook" name="book" value="{{$book->book}}">
                            {{method_field('PUT')}}
                        </fieldset>
                    </div>
                    <div>
                        <label>考试类型：</label>
                        @foreach($exams as $exam)
                            <label class="radio-inline">
                                <input type="radio" name="exam_type" value="{{$exam->id}}">{{$exam->exam_type}}
                                {{method_field('PUT')}}
                            </label>
                        @endforeach
                    </div>
                    <div>
                        <label>教材分类：</label>
                        @foreach($types as $type)
                            <label class="radio-inline">
                                <input type="radio" name="book_type" value="{{$type->id}}">{{$type->book_type}}
                                {{method_field('PUT')}}
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
                        <label>内容简介：</label>
                        <textarea class="form-control" rows="3" name="contents">{{$book->contents}}</textarea>
                        {{method_field('PUT')}}
                    </div>
                    <div>
                        <label>使用说明：</label>
                        <textarea class="form-control" rows="3" name="using_instruction">{{$book->using_instruction}}</textarea>
                        {{method_field('PUT')}}
                    </div>
                    <div>
                        <label>使用状态：</label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="1" checked> 启用
                            {{method_field('PUT')}}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="0"> 停用
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