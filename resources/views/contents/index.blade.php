@extends('layout')
@section('content')
	@include('parts/errors')
	<div class="row">
	    <div class="col-sm">
	        <div class="card">
				<h1 class="title" style="text-align:center;">Questionnaire</h1>
				<div class="accordion" id="accordion">
					<!-- for each section in database an extra line is added in our accordion -->
					@foreach ($sections as $section)
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$section->id}}" aria-expanded="true" aria-controls="collapse{{$section->id}}">
								  {{$section->name}}
								</button>
								</h5>
							</div><!--card-header-->
							<div id="collapse{{$section->id}}" class="collapse" aria-labelledby="heading{{$section->id}}" data-parent="#accordion">
								<div class="card-body">
									@include('parts/questions')
								</div><!--card-body-->
							</div><!--collapse-->
						</div><!--card-->
					@endforeach
				</div><!--accordion-->
	        </div><!--card-->
	    </div><!--col-->
	</div> <!--row-->
@endsection