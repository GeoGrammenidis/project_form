<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Question;
use App\Option;
use App\Answer;
class SectionsController extends Controller
{
    public function index(){
    	$sections = Section::all();
    	$questions = Question::all();
    	$options = Option::all();
    	// methode to be called from model for order.
    	return view('parts/index', compact('sections', 'questions', 'options'));
    }
    public function store(Section $section){
    //	$my_array = [];
    	$section_questions = Question::where('section_id',$section->id)->get();

    	$data = [];
    	foreach ($section_questions as $section_question) {
    		if($section_question->input_type=='text')
    			$val = ['required','min:3','max:255'];
    		else if($section_question->input_type=='number')
    			$val = ['required','numeric'];
    		else
    			$val = ['required'];
    		$data['question_'.$section_question->id]=$val;
    	}
    	request()->validate($data);
    	foreach ($section_questions as $section_question) {
    		if(!is_array(request()->all()['question_'.$section_question->id]))
    			Answer::create(['question_id'=>$section_question->id,"value"=>request()->all()['question_'.$section_question->id]]);
    		else
    			Answer::create(['question_id'=>$section_question->id,"value"=>implode(", ",request()->all()['question_'.$section_question->id])]);

    	}
    	return redirect('/questionnaire');
    }
}
