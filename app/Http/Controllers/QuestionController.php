<?php

namespace App\Http\Controllers;
use App\Http\Controllers\QuestionaireController;

use Illuminate\Http\Request;
use App\Models\Questionaire;
use App\Models\Question;

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
    	$question->answers()->createMany($data['answers']);

    	return redirect('/questionaires/'.$questionaire->id);
    }


    public function destroy(\App\Models\Questionaire $questionaire, \App\Models\Question $question)
    {
        dd($question);
        $questions->answers()->delete();
        $questions->delete();
        
        return redirect($questionaire->path());
    }
}
