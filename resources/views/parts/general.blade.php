@extends('layout')

@section('content')
<form method='POST' action="">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="title">Title</label>
      <select id="title" class="form-control">
        <option selected>Mr</option>
        <option>Mrs</option>
        <option>Ms</option>
        <option>Miss</option>
        <option>Mx</option>
      </select>
    </div>
    <div class="form-group col-md-9">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Type your name">
    </div>
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" placeholder="Type your age">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" id="country" placeholder="Type your country">
  </div>
  <button type="submit" class="btn btn-primary">Next</button>
</form>
@endsection