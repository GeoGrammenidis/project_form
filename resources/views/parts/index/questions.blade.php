
@csrf
@foreach ($questions as $question)
    @if ($section->id == $question->section_id)
        @if($question->input_type == "text"||
            $question->input_type == "number")
            <!--form-group generated only for text and number input types-->
            @include('/parts/index/form_groups/text_or_number_input')
        @endif
        @if ($question->input_type == "select")
            <!--form-group generated only for select input types-->
            @include('/parts/index/form_groups/select_input')
        @endif
        @if ($question->input_type == "radio")
            <!--form-group generated only for radio input types-->
            @include('/parts/index/form_groups/radio_input')
        @endif
        @if ($question->input_type == "checkbox")
            <!--form-group generated only for checkbox input types-->
            @include('/parts/index/form_groups/checkbox_input')
        @endif
    @endif
@endforeach