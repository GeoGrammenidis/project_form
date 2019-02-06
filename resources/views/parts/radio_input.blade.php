<fieldset class="form-group">
    <legend class="col-form-label pt-0">{{$question->question_text}}</legend>
    @foreach ($options as $option)
        @if ($option->question_id == $question->id)
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="question_{{$question->id}}"
                    id="Radios{{$option->id}}"
                    value="option{{$option->id}}"
                    required>
                <label class="form-check-label" for="Radios{{$option->id}}">
                    {{$option->value}}
                </label>
            </div>
        @endif
    @endforeach
</fieldset>