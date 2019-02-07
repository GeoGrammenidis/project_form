<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Question;
use App\Option;

class SectionsController extends Controller{

    //section
    public function store2(){
        Section::create(request()->validate([
            'order' => ['required','numeric'],
            'name' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/create");
    }

    //section
    public function edit(Section $section){
        return view('/contents/edit_section', compact('section'));
    }

    //section
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
