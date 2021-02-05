<div class="space-y-2 lg:space-y-0 lg:flex">
    <div class="lg:w-1/4">
        <p class="text-2xl lg:text-base">Experience</p>
    </div>

    <div class="lg:w-3/4">
        @foreach ($experiences as $experience)
            <div>
                <div class="lg:flex justify-between">
                    <p class="font-bold ">{{ $experience->title }}</p>
                    <div class="flex space-x-1">
                        <p>{{ date('F Y', $experience->date_from) }}</p>
                        -
                        <p>{{ $experience->date_to ? date('F Y', $experience->date_to) : 'Current' }}</p>
                    </div>
                </div>
                <p class="mb-2 lg:mb-0">{{ $experience->company }}</p>
                <div class="text-sm">
                    {!! $experience !!}
                </div>
            </div>

            @if (! $loop->last)
                <hr class="border-b my-6">
            @endif
        @endforeach
    </div>
</div>
