<table class="table td">
    <tr>
        <td width="10%" class="td">教材名称：</td>
        <td width="20%" class="td">{{$book->book}}</td>
        <td width="10%" class="td">考试类型：</td>
        <td width="20%" class="td">{{$book->examType->exam_type}}</td>
        <td width="15%" class="td">科目：</td>
        <td width="25%" class="td">啦啦啦啦</td>
    </tr>
    <tr>
        <td width="10%" class="td">教材类型：</td>
        <td width="20%" class="td">{{$book->bookType->book_type}}</td>
        <td width="10%" class="td">使用分类：</td>
        <td width="20%" class="td">{{$book->using_type}}</td>
        <td width="15%" class="td">使用状态：</td>
        <td width="25%" class="td">
            @if($book->status==1)
                使用中
            @else
                停用
            @endif
        </td>
    </tr>
    <tr>
        <td width="10%" class="td">创建人：</td>
        <td width="20%" class="td">{{$book->user->name}}</td>
        <td width="10%" class="td">创建时间：</td>
        <td width="20%" class="td">{{$book->created_at}}</td>
        <td width="15%" class="td">最近一次修改时间：</td>
        <td width="25%" class="td">{{$book->updated_at}}</td>
    </tr>


    <tr>
        <td class="td">内容简介：</td>
        <td colspan="5">{{$book->contents}}</td>
    </tr>
    <tr>
        <td class="td">使用说明：</td>
        <td colspan="5">{{$book->using_instruction}}</td>
    </tr>
</table>