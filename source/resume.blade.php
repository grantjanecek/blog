@extends('_layouts.app', ['title' => 'Resume'])

@section('body')
    <div class="bg-gray-100 min-h-screen py-10">
        <div class="container w-1/2 mx-auto shadow bg-white p-10 space-y-4">
            @include('_resume.header')
            <hr class="border-b my-6">
            @include('_resume.skills')
            <hr class="border-b my-6">
            @include('_resume.experience')
            <hr class="border-b my-6">
            @include('_resume.education')
        </div>
    </div>
@endsection
