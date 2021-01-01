@extends('layouts.app')



@section('content')
    <div class="flex flex-col">

        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                        {{ config('app.name', 'Laravel') }}
                    </h1>
          
                           
                        
                </div>
            </div>
        </div>
    </div>
@endsection
