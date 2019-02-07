<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/questionnaire">Questionnaire</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item @if (Request::is('questionnaire'))
                active
            @endif">
                <a class="nav-link" href="/questionnaire">Home
                    @if (Request::is('questionnaire'))
                        <span class="sr-only">(current)</span>
                    @endif</a>
            </li>
            <li class="nav-item @if (Request::is('questionnaire/create'))
                active
            @endif">
                <a class="nav-link" href="/questionnaire/create" >Create
                    @if (Request::is('questionnaire/create'))
                        <span class="sr-only">(current)</span>
                    @endif</a>
            </li>
            <li class="nav-item @if (Request::is('questionnaire/search'))
                active
            @endif">
                <a class="nav-link" href="/questionnaire/search">Search
                    @if (Request::is('questionnaire/search'))
                        <span class="sr-only">(current)</span>
                    @endif</a>
            </li>
            <li class="nav-item @if (Request::is('questionnaire/*/edit'))
                active
            @endif">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="#">Edit
                    @if (Request::is('questionnaire/edit'))
                        <span class="sr-only">(current)</span>
                    @endif</a>
            </li>
        </ul>
    </div>
</nav>