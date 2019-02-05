<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Question;
use App\Option;
class SectionsController extends Controller
{
    public function index(){
    	$sections = Section::all();
    	$questions = Question::all();
    	$options = Option::all();
    	// methode to be called from model for order.
    	return view('parts/index', compact('sections', 'questions', 'options'));
    }
}
