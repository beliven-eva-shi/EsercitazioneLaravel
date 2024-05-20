@props(['task'])

<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">

        <div class="space-x-2">


            <div class="mt-4">
                <h1 class="text-3xl">
                    <a href="/task/{{ $task->id }}">
                        {{ $task->title }}
                    </a>

                    {{-- <span class="mt-2 block text-gray-400 text-xs">
                                Creato il <time>{{$task->created_at->diffForHumans() }}</time>
                            </span> --}}
                    <span class="mt-2 block text-gray-400 text-xs">
                        Cliente: {{ $task->project->client->name }}
                    </span>
                    <span class="mt-2 block text-gray-400 text-xs">
                        Progetto: {{ $task->project->title }}
                    </span>
                    <span class="mt-2 block text-gray-400 text-xs">
                        Assegnato a {{ $task->user->nome }}
                    </span>
            </div>

        </div>
    </div>

</article>
