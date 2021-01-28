@extends('_layouts.resume')

@section('body')
    <div class="container w-1/2 my-5 mx-auto shadow bg-white p-10">
        <div class="flex">
            <div class="w-1/3 flex justify-center">
                <img class="w-40 h-40 rounded-full" src="/assets/images/headshot.jpg" alt="Headshot">
            </div>
            <div class="w-2/3 flex-grow">
                <h1 class="text-4xl mb-1">Grant Janecek</h1>
                <h2 class="text-xl mb-2">Software Developer</h2>
                <div class="flex space-x-10 mb-2">
                    <div class="flex space-x-1 items-center">
                        <img class="w-4 h-4" src="/assets/images/link.svg" alt="Link Icon">
                        <p>grantjaneck.dev</p>
                    </div>
                    <div class="flex space-x-1 items-center">
                        <img class="w-4 h-4" src="/assets/images/envelope.svg" alt="Envelope Icon">
                    <p>grantj@hey.com</p>
                    </div>
                </div>
                <div>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia suscipit
                    labore eum possimus vitae pariatur aut perferendis sunt,
                    a molestiae itaque, repellat accusamus facilis optio expedita maiores non, eius distinctio?
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
