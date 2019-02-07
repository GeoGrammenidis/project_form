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
                <td>
                    <a href="/questionnaire/question/{{$question->id}}/edit">
                        <span style="color:blue;">
                            <i class="fas fa-pencil-alt"></i>
                        </span>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/questionnaire/question/{{$question->id}}">
                        @method('DELETE')
                        @csrf
                        <div class="spacer">
                            <a href="javascript:void(0)" class="submit-button">
                                <span style="color:red">
                                    <i class="fas fa-trash-alt"></i>
                                </span>
                            </a>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>