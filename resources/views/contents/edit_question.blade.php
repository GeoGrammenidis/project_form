@extends('layout')
@section('content')
    @include('parts/errors')
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h1 class="title" style="text-align:center;">Edit Question</h1>
                <form method="POST" action="/questionnaire/question/{{$question->id}}">
                    @method('PATCH')
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
                                <option value="{{$section->id}}" 
                                    @if ($section->id == $question->section_id)
                                            selected 
                                        @endif
                                    >{{$section->name}}</option>
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
                            value="{{$question->question_text}}"
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
                                <option @if ($question->input_type == "text")
                                            selected 
                                        @endif>text</option>
                                <option @if ($question->input_type == "number")
                                            selected 
                                        @endif>number</option>
                                <option @if ($question->input_type == "select")
                                            selected 
                                        @endif>select</option>
                                <option @if ($question->input_type == "radio")
                                            selected 
                                        @endif>radio</option>
                                <option @if ($question->input_type == "checkbox")
                                            selected 
                                        @endif>checkbox</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!--card-->
        </div><!--col-->
    </div> <!--row-->
@endsection