@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words border-b border-t border-gray-200 sm:border sm:rounded-lg overflow-hidden mt-16 p-6">
            <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">{{ $questionaire->title }}</h1>
             <div class="">
                <form class="mb-6" action="/surveys/{{ $questionaire->id }}-{{ Str::slug($questionaire->title) }} " method="post">
                  <div class="input-group">
                    
                  
                    @csrf 
                    
                    @foreach($questionaire->questions as $key => $question)
                      <div class="">
                         <div class="mt-4"></br><strong>{{ $key+1 }}</strong>  :  {{ $question->question }} </div>

                         @error('responses.' . $key . '.answer_id')
                            <small class="text-red-600 mt-3">
                              {{ $message }}
                            </small>
                         @enderror

                        <ul class="px-0" style="margin-top: 15px">
                        @foreach($question->answers as $answer)
                          <label for="answer{{ $answer->id }}" >
                            <li class="border list-none rounded-sm px-3 py-3">  
                              <input type="radio" name="responses[{{ $key }}][answer_id]"  id="answer{{ $answer->id }}" value="{{ $answer->id }}" class="mr-2">
                              {{ old('responses.' . $key . '.answer_id') == $answer->id ? 'checked' : '' }}
                              {{ $answer->answer }} 
                              <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{$question->id}}">
                            </li>
                          </label>
                        @endforeach
                        </ul>
                      </div>
                    @endforeach
                  </div>  
                  
                  <div class="col-span-6 sm:col-span-3 py-3 mt-5">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="survey[name]" id="name" autocomplete="given-name" placeholder="Name" class="p-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm xl:text-xl border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6 sm:col-span-3 py-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="survey[email]" id="email" autocomplete="given-name" placeholder="E-mail" class="p-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm xl:text-xl border-gray-300 rounded-md">
                  </div>
                  

          
                  <button class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Complete survey</button>

                </form>

             </div>


        </section>
    </div>
</main>
@endsection
