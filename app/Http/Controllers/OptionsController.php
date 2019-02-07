<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use App\Question;

class OptionsController extends Controller{
    
    public function create(){
        Option::create(request()->validate([
            'question_id' => ['required','numeric'],
            'value' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/create");
    }
    
    public function edit(Option $option){
        $questions = Question::all();
        return view('/contents/edit_option', compact('option','questions'));
    }

    public function update(Option $option){
        $option->update(request()->validate([
            'question_id' => ['required','numeric'],
            'value' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/search");
    }
    public function destroy(Option $option){
        $option->delete();
        return redirect("/questionnaire/search");
    }
}
