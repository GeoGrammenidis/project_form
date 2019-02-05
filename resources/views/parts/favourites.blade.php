@extends('layout')

@section('content')
<div class="card">
	<div class="card-body">
		<form method='POST' action="">
			@csrf
			<div class="form-group row">
				<label for="food" class="col-sm-4 col-lg-2 col-form-label">Favourite Food</label>
				<div class="col-sm-8 col-lg-10">
					<input type="text" class="form-control" id="food" placeholder="Type your favourite food">
				</div>
			</div>
			<fieldset class="form-group">
				<div class="row">
					<legend class="col-form-label col-sm-4 col-lg-2 pt-0">Favourite Color</legend>
					<div class="col-sm-8 col-lg-10">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="colorRadios" id="colorRadios1" value="option1" checked>
							<label class="form-check-label" for="colorRadios1">
							Red
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="colorRadios" id="colorRadios2" value="option2">
							<label class="form-check-label" for="colorRadios2">
							Blue
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="colorRadios" id="colorRadios3" value="option3">
							<label class="form-check-label" for="colorRadios3">
							Green
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="colorRadios" id="colorRadios4" value="option3">
							<label class="form-check-label" for="colorRadios4">
							Orange
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="colorRadios" id="colorRadios5" value="option3">
							<label class="form-check-label" for="colorRadios5">
							Other
							</label>
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset class="form-group">
				<div class="row">
					<legend class="col-form-label col-sm-4 col-lg-2 pt-0">Favourite OS</legend>
					<div class="col-sm-8 col-lg-10">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="osRadios" id="osRadios1" value="option1" checked>
							<label class="form-check-label" for="osRadios1">
							macOS
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="osRadios" id="osRadios2" value="option2">
							<label class="form-check-label" for="osRadios2">
							Windows
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="osRadios" id="osRadios3" value="option3">
							<label class="form-check-label" for="osRadios3">
							Linux
							</label>
						</div>
					</div>
				</div>
			</fieldset>
			<div class="form-group row">
				<label for="food" class="col-sm-4 col-lg-2 col-form-label">Favourite Code Editor</label>
				<div class="col-sm-8 col-lg-10">
					<input type="text" class="form-control" id="food" placeholder="Type your code editor">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4 col-lg-2">Favourite Language</div>
				<div class="col-sm-8 col-lg-10">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="languageCheck1">
						<label class="form-check-label" for="languageCheck1">
						PHP
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="languageCheck2">
						<label class="form-check-label" for="languageCheck2">
						Java
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="languageCheck3">
						<label class="form-check-label" for="languageCheck3">
						Javascript
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="languageCheck4">
						<label class="form-check-label" for="languageCheck4">
						Ruby
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="languageCheck5">
						<label class="form-check-label" for="languageCheck5">
						Perl
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="languageCheck6">
						<label class="form-check-label" for="languageCheck6">
						Other
						</label>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-12">
					<button type="submit" class="btn">Previous</button>
					<button type="submit" class="btn btn-primary">Finish</button>
				</div>
			</div>
		</form>
	</div>
</div>




@endsection