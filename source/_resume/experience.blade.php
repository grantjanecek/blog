<div class="flex">
    <div class="w-1/4">
        <p>Experience</p>
    </div>

    <div class="w-3/4">
        @foreach ($experiences as $experience)
            <div>
                <div class="flex justify-between">
                    <p class="font-bold ">{{ $experience->title }}</p>
                    <div class="flex space-x-1">
                        <p>{{ date('F Y', $experience->date_from) }}</p>
                        -
                        <p>{{ $experience->date_to ? date('F Y', $experience->date_to) : 'Current' }}</p>
                    </div>
                </div>
                <p>{{ $experience->company }}</p>
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
