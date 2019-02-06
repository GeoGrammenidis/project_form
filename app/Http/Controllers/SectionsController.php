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
    		//if(request()->has('question_'.$section_question->id)){
    		if($section_question->input_type=='text')
    			$val = ['required','min:3','max:255'];
    		else
    			$val = ['required'];
    		$data['question_'.$section_question->id]=$val;
    		//request()->all()['question_'.$section_question->id];
    		//dd(request()->all());
    	//		$my_array['question_'.$section_question->id]='test';
    	}
    	//foreach ($datas as $data) {
    		//dd($data);
    		//Section::create($data->validate([
			//		'question_id' => ['required','numeric'],
			//		'value' => ['required']
			//	]));
    	//}
    	dd($data);
    	//App\Question::where('section_id',1)->get()[0]->id;
    	/*$rules = [
        	'question_1' => 'required',
        	'question_2' => 'required',
        	'question_3' => 'required',
        	'question_4' => 'required',
    	];
    	$customMessages = [
        	'required' => 'The :attribute field is required.'
    	];
    	$request = request();*
    	dd($data);
    	//Section::create();
    	//Section::create(request()->validate([
		//			'question_id' => ['required','numeric'],
		//			'value' => ['required', 'min:3', 'max:255']
		//		]));
    	//dd($my_array);
    	//dd(request()->all());
    	/*
    	    		$test = 4;
    		if(request()->has('question_'.$test)){
    			Section::create(['question_id':,]->validate([
					'question_id' => ['required','numeric'],
					'value' => ['required', 'min:3', 'max:255']
				]));
    			dd("hey");
    		}*/

    	//arraY_push($my_array,[]);
    	//dd($my_array);
    	//Project::create(request()->validate([
			//'question_id' => ['required','numeric'],
			//'value' => ['required', 'min:3', 'max:255']
		//]));
    	//Answer::create(request()->validate([
    	//		=> ['required'], 'min:3'; 'max:255'];
    	//	]));
    	// methode to be called from model for order.
    //	return redirect('/');
    }
}
