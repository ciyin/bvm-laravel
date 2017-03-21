<table class="table td">
    <tr>
        <td width="10%" class="td">教材名称：</td>
        <td width="20%" class="td">{{$book->book}}</td>
        <td width="10%" class="td">考试类型：</td>
        <td width="20%" class="td">{{$book->examType->exam_type}}</td>
        <td width="15%" class="td">教材分类：</td>
        <td width="25%" class="td">{{$book->bookType->book_type}}</td>
    </tr>
    <tr>
        <td width="10%" class="td">使用分类：</td>
        <td width="20%" class="td">lalallalalla</td>
        <td width="10%" class="td">使用状态：</td>
        @if($book->status==1)
            <td width="20%" class="td">使用中</td>
        @else
            <td width="20%" class="td">停用</td>
        @endif
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