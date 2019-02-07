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
                @include('parts/search/tables/section')
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
                @include('parts/search/tables/question')

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
                @include('parts/search/tables/option')
            </div><!--card-body-->
        </div><!--collapse-->
    </div><!--card-->
</div><!--accordion-->