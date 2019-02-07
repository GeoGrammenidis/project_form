<form method="POST" action="/questionnaire/create/option">
    @csrf
    <div class="form-group">
        <label for="question_id">
            Select Question
        </label>
        <select
            class="form-control"
            name="question_id"
            id="question_id">
            @foreach ($questions as $question)
                @if ($question->input_type=="checkbox"
                    ||$question->input_type=="radio"
                    ||$question->input_type=="select")
                    <option value="{{$question->id}}">
                        {{$question->question_text}}
                    </option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="option_value">
            Option text
        </label>
        <input
            class="form-control"
            type="text"
            name="value"
            id="option_value"
            placeholder="Type a text"
            required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>