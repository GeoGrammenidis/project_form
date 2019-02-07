<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Ansewer;

class Section extends Model{

    protected $guarded = ['id'];
    //A function that creates a table with tables for validation for
    //each question we have posted.
    public function get_table_to_val(Section $section){
        $section_questions=Question::where('section_id',$section->id)->get();
        $data = [];
        foreach ($section_questions as $section_question) {
            if($section_question->input_type=='text')
                $val = ['required','min:2','max:255'];
            else if($section_question->input_type=='number')
                $val = ['required','numeric'];
            else
                $val = ['required'];
            $data['question_'.$section_question->id]=$val;
        }
        return $data;
    }
    //A function that creates the answers in our database
    public function create_answers(Section $section, $data){
        $section_questions=Question::where('section_id',$section->id)->get();
        foreach ($section_questions as $section_question) {
            //this is to check for a checkbox type question.
            if($section_question->input_type!="checkbox")
                $q_value = request()->all()['question_'.$section_question->id];
            else
                $q_value = implode(", ",
                    request()->all()['question_'.$section_question->id]
                );
            Answer::create([
                'question_id'=>$section_question->id,
                'value'=>$q_value
            ]);
        }
    }
}
