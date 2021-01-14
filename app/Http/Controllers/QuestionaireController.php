<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Questionaire;
// use \App\Questionaire;
use App\Http\Controllers\Controller;
use App\Http\Controllers\QuestionaireController;
use App\Http\Controllers\Questionaire;


class QuestionaireController extends Controller
{
    public function create()
    {
    	return view('questionaire.create');
    }



    public function store()
    {
    	$data = request()->validate([
    		'title' => 'required',
    		'purpose' => 'required',
    	]);


    	 $data['user_id'] = auth()->user()->id;

    	 $questionaire = \App\Models\Questionaire::create($data);
    	 return redirect('/questionaires/'.$questionaire->id);

    }


    public function show( \App\Models\Questionaire $questionaire)
    {
        $questionaire->load('questions.answers.responses');
        $questionaire_id = $questionaire->id;

        $results = \App\Models\Question::with(['questionaire'])->where('questionaire_id', $questionaire_id);
        $questionaires = $results->get();



        return view('questionaire.show', compact('questionaire', 'questionaires'));
  
    }


   

}
