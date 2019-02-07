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
                <td>
                    <a href="/questionnaire/section/{{$section->id}}/edit">
                        <span style="color:blue;">
                            <i class="fas fa-pencil-alt"></i>
                        </span>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/questionnaire/section/{{$section->id}}">
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