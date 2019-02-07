<div class="accordion" id="accordion">
    <!-- for each section in database an extra line is added in accordion -->
    @foreach ($sections as $section)
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapse{{$section->id}}"
                    aria-expanded="true"
                    aria-controls="collapse{{$section->id}}">
                    {{$section->name}}
                </button>
                </h5>
            </div><!--card-header-->
            <div id="collapse{{$section->id}}"
                class="collapse"
                aria-labelledby="heading{{$section->id}}"
                data-parent="#accordion">
                <div class="card-body">
                    <form method="POST"
                    action="/questionnaire/{{$section->id}}/create">
                        @include('parts/index/questions')
                        <button type="submit"
                            class="btn btn-primary">Submit</button>
                    </form>
                </div><!--card-body-->
            </div><!--collapse-->
        </div><!--card-->
    @endforeach
</div><!--accordion-->