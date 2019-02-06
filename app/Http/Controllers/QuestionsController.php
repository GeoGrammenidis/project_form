<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function create(){
        Question::create(request()->validate([
            'section_id' => ['required','numeric'],
            'question_text' => ['required', 'min:2'],
            'input_type' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/create");
    }
}
