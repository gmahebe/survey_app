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

             <div class="flex flex-col lg-6 p-8">
                <form class="mb-6" action="/questionaires " method="post">
                     @csrf 
                  <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="title">Title</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="title" id="title">

                    @error('title')
                    <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                        {{ $message      }}
                    </small>
                    @enderror

                  </div>
                  <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="purpose">Purpose</label>
                    <textarea class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"  name="purpose" id="purpose"></textarea>


                    @error('purpose')
                    <small class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                        {{ $message      }}
                    </small>
                    @enderror

                  </div>
                  <button class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Create questionaire</button>
                </form>

             </div>


        </section>
    </div>
</main>
@endsection
