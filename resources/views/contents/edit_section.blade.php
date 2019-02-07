@extends('layout')
@section('content')
    @include('parts/errors')
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h1 class="title" style="text-align:center;">Edit Section</h1>
                <form method="POST" action="/questionnaire/section/{{$section->id}}">
                    @method('PATCH')
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
                            value={{$section->name}}
                            required
                            >
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
                            value={{$section->order}}
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!--card-->
        </div><!--col-->
    </div> <!--row-->
@endsection