<label>考试科目：</label>
<label class="radio-inline">
    <input type="radio" name="subject_id" value="0">不限科目
</label>
@foreach($subjects as $value)
    <label class="radio-inline">
        <input type="radio" name="subject_id" value={{$value['id']}}>{{$value['subject']}}
    </label>
@endforeach