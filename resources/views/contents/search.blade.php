@extends('layout')
@section('content')
    @include('parts/errors')
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h1 class="title" style="text-align:center;">Search</h1>
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
                                Sections
                            </button>
                            </h5>
                        </div><!--card-header-->
                        <div id="collapse1"
                            class="collapse"
                            aria-labelledby="heading1"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table data-toggle="table">
                                    <thead>
                                        <tr>
                                            <th>order</th>
                                            <th>name</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as $section)
                                            <tr>
                                                <td>{{$section->order}}</td>
                                                <td>{{$section->name}}</td>
                                                <td><a href="/questionnaire/section/{{$section->id}}/edit"><span style="color:blue;"><i class="fas fa-pencil-alt"></i></span></a></td>
                                                <td>
                                                    <form method="POST" action="/questionnaire/section/{{$section->id}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="spacer">
                                                            <a href="javascript:void(0)" class="submit-button"><span style="color:red"><i class="fas fa-trash-alt"></i></span></a>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                                Questions
                            </button>
                            </h5>
                        </div><!--card-header-->
                        <div id="collapse2"
                            class="collapse"
                            aria-labelledby="heading2"
                            data-parent="#accordion">
                            <div class="card-body">
                                 <table data-toggle="table">
                                    <thead>
                                        <tr>
                                            <th>section</th>
                                            <th>question</th>
                                            <th>input type</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($questions as $question)
                                            <tr>
                                                <td>
                                                    @foreach ($sections as $section)
                                                        @if ($section->id == $question->section_id)
                                                            {{$section->name}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{$question->question_text}}</td>
                                                <td>{{$question->input_type}}</td>
                                                <td><a href="/questionnaire/question/{{$question->id}}/edit"><span style="color:blue;"><i class="fas fa-pencil-alt"></i></span></a></td>
                                                <td>
                                                    <form method="POST" action="/questionnaire/question/{{$question->id}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="spacer">
                                                            <a href="javascript:void(0)" class="submit-button"><span style="color:red"><i class="fas fa-trash-alt"></i></span></a>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                                Options
                            </button>
                            </h5>
                        </div><!--card-header-->
                        <div id="collapse3"
                            class="collapse"
                            aria-labelledby="heading3"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table data-toggle="table">
                                    <thead>
                                        <tr>
                                            <th>question</th>
                                            <th>value</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($options as $option)
                                            <tr>
                                                <td>
                                                    @foreach ($questions as $question)
                                                        @if ($question->id == $option->question_id)
                                                            {{$question->question_text}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{$option->value}}</td>
                                                <td><a href="/questionnaire/option/{{$option->id}}/edit"><span style="color:blue;"><i class="fas fa-pencil-alt"></i></span></a></td>
                                                <td>
                                                    <form method="POST" action="/questionnaire/option/{{$option->id}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="spacer">
                                                            <a href="javascript:void(0)" class="submit-button"><span style="color:red"><i class="fas fa-trash-alt"></i></span></a>
                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--card-body-->
                        </div><!--collapse-->
                    </div><!--card-->
                </div><!--accordion-->
            </div><!--card-->
        </div><!--col-->
    </div> <!--row-->
@endsection