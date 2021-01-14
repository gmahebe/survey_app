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


    public function store( \App\Models\Questionaire $questionaire)
    {
        // dd(request()->all());

        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
            'survey.name' => 'required',
            'survey.email' => 'required|email',
        ]);

        $survey = $questionaire->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']); 

        // return 'Thank you';
        return redirect('/')->with('status', 'Thank you!');


    	
    }





}
