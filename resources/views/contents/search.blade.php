@extends('layout')
@section('content')
    @include('parts/errors')
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h1 class="title" style="text-align:center;">Search</h1>
                @include('/parts/search/accordion')
            </div><!--card-->
        </div><!--col-->
    </div> <!--row-->
@endsection