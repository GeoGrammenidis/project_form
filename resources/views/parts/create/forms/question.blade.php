<form method="POST" action="/questionnaire/create/question">
    @csrf
    <div class="form-group">
        <label for="select_section">
            Select Section
        </label>
        <select
            class="form-control"
            name="section_id"
            id="select_section">
            @foreach ($sections as $section)
                <option value="{{$section->id}}">{{$section->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="question_text">
            Question Text
        </label>
        <input
            class="form-control"
            type="text"
            name="question_text"
            id="question_text"
            placeholder="Type a text"
            required>
    </div>
    <div class="form-group">
        <label for="input_type">
            Select Input Type
        </label>
        <select
            class="form-control"
            name="input_type"
            id="input_type">
                <option>text</option>
                <option>number</option>
                <option>select</option>
                <option>radio</option>
                <option>checkbox</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>