<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\QuestionaireController;
use App\Http\Controllers\Questionaire;

class SurveyController extends Controller
{

    
   public function show( \App\Models\Questionaire $questionaire, $slug)
    {
        $questionaire->load('questions.answers');
    	return view('survey.show', compact('questionaire'));
        // return view('questionaire.show', compact('questionaires'));
    }


    public function store()
    {
    	$survey = $questionaire->surveys()->create();
    }


}
