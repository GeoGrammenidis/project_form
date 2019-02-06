<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;

class OptionsController extends Controller
{
    public function create(){
        Option::create(request()->validate([
            'question_id' => ['required','numeric'],
            'value' => ['required', 'min:2']
        ]));
        return redirect("/questionnaire/create");
    }
}
