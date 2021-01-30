<div class="flex">
    <div class="w-1/4">
        <p>Skills</p>
    </div>

    <div class="w-3/4">
        <div class="grid grid-cols-3">
        @foreach($skills as $skill)
            <div class="flex space-x-1 items-center">
                <img class="w-3 h-3" src="/assets/images/bolt.svg" alt="Bolt Icon">
                {!! $skill !!}
            </div>
        @endforeach
        </div>
    </div>
</div>
