<div class="flex">
    <div class="w-1/4 flex justify-center">
        <img class="w-32 h-32 rounded-full" src="/assets/images/headshot.jpg" alt="Headshot">
    </div>
    <div class="w-3/4">
        <h1 class="text-4xl mb-1">{{ $page->name }}</h1>
        <h2 class="text-xl mb-2">{{ $page->current_title }}</h2>
        <div class="flex space-x-10 mb-2">
            <div class="flex space-x-1 items-center">
                <img class="w-4 h-4" src="/assets/images/link.svg" alt="Link Icon">
                <p>{{ $page->website }}</p>
            </div>
            <div class="flex space-x-1 items-center">
                <img class="w-4 h-4" src="/assets/images/envelope.svg" alt="Envelope Icon">
            <p>{{ $page->email }}</p>
            </div>
        </div>
        <div>
            <p>
                I am a fullstack web developer with a passion for Laravel, Vue and Tailwindcss. In my free time I like to experiement with new technologies and on the weekends I like to spend my time outdoors rockclimbing or hiking.
            </p>
        </div>
    </div>
</div>
