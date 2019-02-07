<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Question;
use App\Option;

class SectionsController extends Controller{

    public function store(){
        Section::create(request()->validate([
            'order' => ['required','numeric'],
            'name' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/create");
    }

    public function edit(Section $section){
        return view('/contents/edit_section', compact('section'));
    }

    public function update(Section $section){
        $section->update(request()->validate([
            'order' => ['required','numeric'],
            'name' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/search");
    }

    public function destroy(Section $section){
        $section->delete();
        return redirect("/questionnaire/search");
    }
}
