<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\QuestionaireController;
use App\Http\Controllers\Questionaire;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('dd');
        $user = auth()->user(); 
        $results = \App\Models\Questionaire::with(['user'])->where('user_id', $user->id);
        $questionaires = $results->get();

        return view('home', compact('questionaires'));

    }
   

}
