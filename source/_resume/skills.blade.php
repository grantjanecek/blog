<div class="space-y-2 lg:space-y-0 lg:flex">
    <div class="lg:w-1/4">
        <p class="text-2xl lg:text-base">Skills</p>
    </div>

    <div class="lg:w-3/4">
        <div class="grid grid-cols-2 lg:grid-cols-3">
        @foreach($skills as $skill)
            <div class="flex space-x-1 items-center">
                <img class="w-3 h-3" src="/assets/images/bolt.svg" alt="Bolt Icon">
                {!! $skill !!}
            </div>
        @endforeach
        </div>
    </div>
</div>
