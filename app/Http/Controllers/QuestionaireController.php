<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Questionaire;
// use \App\Questionaire;
use App\Http\Controllers\Controller;
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
                         // \App\Models\User::factory(10)->create();

		// $questionaire = auth()->user()->questionaires()->create($data);

    	 return redirect('/questionaires/'.$questionaire->id);
    	// return view('questionaire.create');
    	// return back();

    }


    public function show( \App\Models\Questionaire $questionaire)
    {
        $questionaire->load('questions.answers');
    	return view('questionaire.show', compact('questionaire'));
        // return view('questionaire.show', compact('questionaires'));
    }



    // public function show(Questionaire $id)
    // {
    //     return view('questionaires.show', ['questionaire' => $id]);
    // }


}
