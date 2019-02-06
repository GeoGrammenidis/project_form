@extends('layout')
@section('content')
    @include('parts/errors')
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h1 class="title" style="text-align:center;">Create</h1>
                <div class="accordion" id="accordion">
                    <!-- for each section in database an extra line is added in accordion -->
                    <div class="card">
                        <div class="card-header" id="heading1">
                            <h5 class="mb-0">
                            <button class="btn btn-link"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapse1"
                                aria-expanded="true"
                                aria-controls="collapse1">
                                Create Section
                            </button>
                            </h5>
                        </div><!--card-header-->
                        <div id="collapse1"
                            class="collapse"
                            aria-labelledby="heading1"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form method="POST"
                                action="/questionnaire/create2">
                                    @csrf
                                    <div class="form-group">
                                        <label for="section_name">
                                            Section name
                                        </label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="name"
                                            id="section_name"
                                            placeholder="Type a text"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="section_order">
                                            Section order
                                        </label>
                                        <input
                                            class="form-control"
                                            type="number"
                                            name="order"
                                            id="section_order"
                                            placeholder="Type a text"
                                            required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div><!--card-body-->
                        </div><!--collapse-->
                    </div><!--card-->
                    <div class="card">
                        <div class="card-header" id="heading2">
                            <h5 class="mb-0">
                            <button class="btn btn-link"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapse2"
                                aria-expanded="true"
                                aria-controls="collapse2">
                                Create Question
                            </button>
                            </h5>
                        </div><!--card-header-->
                        <div id="collapse2"
                            class="collapse"
                            aria-labelledby="heading2"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form method="POST"
                                action="/questionnaire/create_question">
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
                            </div><!--card-body-->
                        </div><!--collapse-->
                    </div><!--card-->
                    <div class="card">
                        <div class="card-header" id="heading3">
                            <h5 class="mb-0">
                            <button class="btn btn-link"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapse3"
                                aria-expanded="true"
                                aria-controls="collapse3">
                                Create Option
                            </button>
                            </h5>
                        </div><!--card-header-->
                        <div id="collapse3"
                            class="collapse"
                            aria-labelledby="heading3"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form method="POST"
                                action="/questionnaire/create_option">
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
                                                @if ($question->input_type=="checkbox"||$question->input_type=="radio")
                                                    <option value="{{$question->id}}">{{$question->question_text}}</option>
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
                            </div><!--card-body-->
                        </div><!--collapse-->
                    </div><!--card-->
                </div><!--accordion-->
                
            </div><!--card-->
        </div><!--col-->
    </div> <!--row-->
@endsection