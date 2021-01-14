@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words">


        <!--
            <form action="/questionaire" method="post">
              <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="border py-2 px-3 text-grey-darkest" >
              </div>
              <div>
                <label for="purpose">Purpose</label>
                <input type="text" name="purpose" id="purpose" class="border py-2 px-3 text-grey-darkest" >
              </div>

              <button type="submit" class="border py-2 px-3 text-grey-darkest" >Create questionaire</button>
            </form> -->

             <div class="flex flex-col lg-6 p-8">
                <form class="mb-6" action="/questionaires/{{ $questionaire->id }}/questions " method="post">
                     @csrf
                  <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="question">question</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="question[question]" id="question" placeholder="Enter question">

                    @error('question.question')
                    <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                        {{ $message      }}
                    </small>
                    @enderror

                  </div>
                  
                  <fieldset>
                    <legend class="text-lg">
                      Choices
                    </legend>
                      

                    <div class="input-group pt-5">
                      <div class="flex flex-col mb-6">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="answer">Answer 1</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="text" name="answers[][answer]" id="answer" placeholder="Enter choice 1">

                        @error('answers.0.answer')
                        <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ $message      }}
                        </small>
                        @enderror

                      </div>
                    </div>

                    <div class="input-group">
                      <div class="flex flex-col mb-6">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="answer">Answer 2</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="text" name="answers[][answer]" id="answer" placeholder="Enter choice 2">

                        @error('answers.1.answer')
                        <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ $message      }}
                        </small>
                        @enderror

                      </div>
                    </div>

                    <div class="input-group">
                      <div class="flex flex-col mb-6">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="answer">Answer 3</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="text" name="answers[][answer]" id="answer" placeholder="Enter choice 3">

                        @error('answers.2.answer')
                        <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ $message      }}
                        </small>
                        @enderror

                      </div>
                    </div>

                    <div class="input-group">
                      <div class="flex flex-col mb-6">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="answer">Answer 4</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="text" name="answers[][answer]" id="answer" placeholder="Enter choice 4">

                        @error('answers.3.answer')
                        <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ $message      }}
                        </small>
                        @enderror

                      </div>
                    </div>

                    <div class="input-group">
                      <div class="flex flex-col mb-6">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="answer">Answer 5</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="text" name="answers[][answer]" id="answer" placeholder="Enter choice 5">

                        @error('answers.4.answer')
                        <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ $message      }}
                        </small>
                        @enderror

                      </div>
                    </div>

                  </fieldset>

                  <button class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Add question</button>
                </form>

             </div>


        </section>
    </div>
</main>
@endsection
