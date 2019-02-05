<form>
  	@csrf
	@foreach ($questions as $question)
		@if ($section->id == $question->section_id)
			@if ($question->input_type == "text")
				<div class="form-group">
					<label for="question_{{$question->id}}">{{$question->question_text}}</label>
					<input type="text" class="form-control" id="question_{{$question->id}}" placeholder="Type text">
				</div>
			@endif
			@if ($question->input_type == "number")
				<div class="form-group">
					<label for="question_{{$question->id}}">{{$question->question_text}}</label>
					<input type="number" class="form-control" id="question_{{$question->id}}" placeholder="Type a number">
				</div>
			@endif
			@if ($question->input_type == "select")
				<div class="form-group">
					<label for="question_{{$question->id}}">{{$question->question_text}}</label>
					<select id="question_{{$question->id}}" class="form-control">
						@foreach ($options as $option)
							@if ($option->question_id == $question->id)
		        				<option>{{$option->value}}</option>
							@endif
						@endforeach
	      			</select>
	      		</div>
			@endif
			@if ($question->input_type == "radio")
				<fieldset class="form-group">
					<legend class="col-form-label pt-0">{{$question->question_text}}</legend>
					@foreach ($options as $option)
						@if ($option->question_id == $question->id)
							<div class="form-check">
								<input class="form-check-input" type="radio" name="radios{{$question->id}}" id="Radios{{$option->id}}" value="option{{$option->id}}">
								<label class="form-check-label" for="osRadios1">
									{{$option->value}}
								</label>
							</div>
						@endif
					@endforeach
				</fieldset>
			@endif
			@if ($question->input_type == "checkbox")
				<fieldset class="form-group">
					<legend class="col-form-label pt-0">{{$question->question_text}}</legend>
						@foreach ($options as $option)
							@if ($option->question_id == $question->id)
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="check{{$question->id}}">
									<label class="form-check-label" for="check{{$question->id}}">
										{{$option->value}}
									</label>
								</div>
							@endif
						@endforeach
				</fieldset>
			@endif
		@endif
	@endforeach
	<button type="submit" class="btn btn-primary">Submit</button>
</form>