@extends('layout')

@section('content')
	<div class="row">
	    <div class="col-sm">
	        <div class="card">
				<h1 class="title">Questionnaire</h1>

				<div class="accordion" id="accordion">
					@foreach ($sections as $section)

						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$section->id}}" aria-expanded="true" aria-controls="collapse{{$section->id}}">
								  {{$section->name}}
								</button>
								</h5>
							</div>

							<div id="collapse{{$section->id}}" class="collapse" aria-labelledby="heading{{$section->id}}" data-parent="#accordion">
								<div class="card-body">
									@include('questions')
								</div>
							</div>
						</div>
					@endforeach
				</div>
	        </div>
	    </div>
	</div>
@endsection