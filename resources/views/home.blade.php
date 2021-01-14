@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <div class="px-4 py-3 leading-normal text-indigo-700 border border-indigo-500 rounded-lg mb-3" role="alert">
                  <p class="font-bold"><a href="/questionaires/create">Create new questionaire</a></p>
                  
                </div>
                <small >
                      You can login or post anonymously.
                  </small>
            </div>

        </section>        

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg mt-5">


            <div class="">
                <div class="p-3">
                    <h1 class="mb-4 mt-4 text-bold"> My Questionaires</h1>
                    <ul class="list-disc">

                        

                        <?php //$user = Auth::user()->questionaires; ?>    
                        
                        @auth

                            @foreach($questionaires as $questionaire)
                                
                                <li class="border list-none rounded-sm px-3 py-2 mt-1">  
                                                        
                                    <a href="{{ $questionaire->path() }}"> {{ $questionaire->title }} </a> 
                                    
                                    <div class="mt-2">
                                        <small class="">
                                            <a href="$questionaire->publicPath()">Share Survey </br> {{ $questionaire->publicPath() }}</a>
                                        </small>
                                    </div>
                                </li>
                                
                            @endforeach

                        @endauth
                        
                    </ul>                  
                  
                </div>
                
            </div>

        </section>
    </div>
</main>
@endsection
