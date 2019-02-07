@extends('layout')
@section('content')
    @include('parts/errors')
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h1 class="title" style="text-align:center;">Edit Option</h1>

                <form method="POST" action="/questionnaire/option/{{$option->id}}">
                    @method('PATCH')
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
                                @if ($question->input_type=="checkbox"||$question->input_type=="radio"||$question->input_type=="select")
                                    <option value="{{$question->id}}"
                                        @if ($question->id == $option->question_id)
                                            selected 
                                        @endif
                                        >{{$question->question_text}}</option>
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
                            value="{{$option->value}}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!--card-->
        </div><!--col-->
    </div> <!--row-->
@endsection