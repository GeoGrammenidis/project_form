<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Section;

class QuestionsController extends Controller{
    
    public function create(){
        Question::create(request()->validate([
            'section_id' => ['required','numeric'],
            'question_text' => ['required', 'min:2'],
            'input_type' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/create");
    }

    public function edit(Question $question){
        $sections = Section::all();
        return view('/contents/edit_question', compact('question','sections'));
    }

    public function update(Question $question){
        $question->update(request()->validate([
            'section_id' => ['required','numeric'],
            'question_text' => ['required', 'min:2'],
            'input_type' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/search");
    }
    public function destroy(Question $question){
        $question->delete();
        return redirect("/questionnaire/search");
    }
}
