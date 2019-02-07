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
                <td>
                    <a href="/questionnaire/option/{{$option->id}}/edit">
                        <span style="color:blue;">
                            <i class="fas fa-pencil-alt"></i>
                        </span>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/questionnaire/option/{{$option->id}}">
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