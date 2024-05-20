@props(['project'])

<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">


        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    {{-- <a href="/categories/{{$post->category->slug}}"
                                class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">{{$post ->category->name}}</a> --}}



                    <div class="mt-4">
                        <h1 class="text-3xl">

                            <a href="/task/?project={{ $project->id }}">
                                {{ $project->title }}
                            </a>

                            {{-- <span class="mt-2 block text-gray-400 text-xs">
                                Creato il <time>{{$project->created_at->diffForHumans() }}</time>
                            </span> --}}
                            <span class="mt-2 block text-gray-400 text-xs">
                                Cliente: {{ $project->client->name }}
                            </span>


                    </div>
            </header>


        </div>
    </div>

</article>
