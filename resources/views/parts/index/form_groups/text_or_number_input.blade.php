<div class="form-group">
    <label for="question_{{$question->id}}">
        {{$question->question_text}}
    </label>
    <input
        class="form-control"
        type="{{$question->input_type}}"
        name="question_{{$question->id}}"
        id="question_{{$question->id}}"
        placeholder="Type a {{$question->input_type}}"
        required>
</div>