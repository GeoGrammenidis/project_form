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
	@endif
@endforeach