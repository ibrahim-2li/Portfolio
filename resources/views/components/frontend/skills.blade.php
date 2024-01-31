@props(['skills'])
<section class="bg-light-tail-100 dark:bg-dark-navy-500 py-24">
    <div class="container flex items-center justify-center">
        <div class="grid grid-cols-5 md:grid-flow-col space-x-2 md:space-x-20">
            @foreach ($skills as $skill)
                <div class="flex items-center justify-center">
                    <img src="{{ asset('storage/' . $skill->image) }}" class=" lg:h-20" alt="{{ $skill->name }}" />
                </div>
            @endforeach

        </div>
    </div>
</section>
