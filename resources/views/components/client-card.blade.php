@props(['client'])

<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">


        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">


                    <div class="mt-4">
                        <h1 class="text-3xl">

                            <a href="/project/?client={{ $client->id }}">
                                {{ $client->name }}
                            </a>



                    </div>
            </header>


        </div>
    </div>

</article>
