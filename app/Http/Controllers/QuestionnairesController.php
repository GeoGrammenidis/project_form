<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Question;
use App\Option;

class QuestionnairesController extends Controller{
    public function index(){
        $sections = Section::all();
        $questions = Question::all();
        $options = Option::all();
        return view('contents/index', compact('sections', 'questions', 'options'));
    }

    public function store(Section $section){
        $data = $section->get_table_to_val($section);
        request()->validate($data);
        $section->create_answers($section, $data);
        return redirect('/questionnaire');
    }

    public function create_page(){
        $sections = Section::all();
        $questions = Question::all();
        return view('contents/create', compact('sections','questions'));
    }

    public function search_page(){
        $sections = Section::all();
        $questions = Question::all();
        $options = Option::all();
        return view('contents/search', compact('sections', 'questions', 'options'));
    }
}
