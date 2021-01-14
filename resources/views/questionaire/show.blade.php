@extends('layouts.app')

@section('content')


<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                    {{ $questionaire->title }}
                </h1>


                


                <p>
                    <a href="/questionaires/{{ $questionaire->id }}/questions/create">
                        <button class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Add question</button>
                    </a>
               
                    <a href="/surveys/{{ $questionaire->id }}-{{ Str::slug($questionaire->title) }}">
                        <button class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Take survey</button>
                    </a>
                </p>
            </div>


            <div>
                    

                    @foreach($questionaire['questions'] as $answer)
                        
                        
                        <div class="border list-none rounded-sm px-3 py-3 mb-4">

                            <p class="font-bold mb-3">{{ $answer->question  }}</p>


                                <ol class="list-decimal ml-4">
                                    <li>
                                        {{ $answer['answers'][0]->answer  }}
                                        
                                    </li>
                                    <li>
                                        {{ $answer['answers'][1]->answer  }}
                                    </li>
                                    <li>
                                        {{ $answer['answers'][2]->answer  }}
                                    </li>
                                    <li>
                                        {{ $answer['answers'][3]->answer  }}
                                    </li>
                                    <li>
                                        {{ $answer['answers'][4]->answer  }}
                                    </li>
                                </ol>


                            <form action="" method="">
                                @method('DELETE')
                                @csrf

                                <a href="/questionaires/{{ $questionaire->id }}/questions/{{ $questionaires[1]->id }}" class="content-end">
                                    <button class="h-7 px-2 mt-2 text-red-100 transition-colors duration-150 bg-red-700  focus:shadow-outline hover:bg-red-800">Delete Question
                                        </button>
                                </a>    
                            </form>


                                 
                        </div>                        

                    @endforeach
                    



                    

                

                


            </div>    

        </div>
    </div>
</div>



@endsection

