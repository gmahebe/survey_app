<?php

namespace App\Http\Controllers;
use App\Http\Controllers\QuestionaireController;

use Illuminate\Http\Request;
// use App\Questionaire;
use App\Http\Controllers\Questionaire;

class QuestionController extends Controller
{
    public function create (\App\Models\Questionaire $questionaire)
    {
    	 return view('question.create', compact('questionaire') );
    }

    public function store (\App\Models\Questionaire $questionaire)
    {
    	$data = request()->validate([
    		'question.question' => 'required',
    		'answers.*.answer' => 'required',
    	]);

    	$question = $questionaire->questions()->create($data['question']); 
dd($question->answers()->createMany());
    	$question->answers()->createMany($data['answers']);

    	return redirect('/questionaires/'.$questionaire->id);
    }
}
