<div class="form-group">
    <label for="question_{{$question->id}}">
        {{$question->question_text}}
    </label>
    <select
        class="form-control"
        name="question_{{$question->id}}"
        id="question_{{$question->id}}">
        @foreach ($options as $option)
            @if ($option->question_id == $question->id)
                <option>{{$option->value}}</option>
            @endif
        @endforeach
    </select>
</div>