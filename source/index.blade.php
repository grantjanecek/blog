@extends('_layouts.app')

@section('body')
    <div class="min-h-screen bg-gradient-to-br from-indigo-100 to-white flex justify-center items-center">
        <div>
            <h1 class="text-xl md:text-4xl lg:text-6xl text-center font-bold">Grant Janecek</h1>
            <div class="flex space-x-3 justify-center align-baseline mt-2">
                <a class="text-lg text-gray-600 hover:text-indigo-600" href="{{ $page->github_url }}">Github</a>
                <a class="text-lg text-gray-600 hover:text-indigo-600" href="{{ $page->linkedin_url }}">Linkedin</a>
                <a class="text-lg text-gray-600 hover:text-indigo-600" href="/resume">Resume</a>
            </div>
        </div>
    </div>
@endsection
