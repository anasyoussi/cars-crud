@extends('layouts.app') 

@section('content') 
    <div class="m-auto w-4/8 py-24"> 
        <div class="text-center">
            <h1 class="text-5xl uppercase bold"> 
                Create Car
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST">
            @csrf
            <div>
                <input type="text" 
                       class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="name"
                        placeholder="Brand name..."
                >
                <input type="text" 
                       class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="founded"
                        placeholder="founded name..."
                >
                <input type="tex t" 
                       class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="description"
                        placeholder="description name..."
                >
                <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppdercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection