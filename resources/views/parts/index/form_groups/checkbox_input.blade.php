checkbox_input.blade.php
<fieldset class="form-group">
    <legend class="col-form-label pt-0">{{$question->question_text}}</legend>
    @foreach ($options as $option)
        @if ($option->question_id == $question->id)
            <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                name="question_{{$question->id}}[]"
                id="check{{$question->id}}"
                value="option{{$option->id}}">
            <label class="form-check-label" for="check{{$question->id}}">
                {{$option->value}}
            </label>
            </div>
        @endif
    @endforeach
</fieldset>