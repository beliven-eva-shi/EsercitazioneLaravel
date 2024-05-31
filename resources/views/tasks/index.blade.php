<x-layout>
    {{-- @include('posts._header') --}}
    <x-dashboard heading="Tasks">

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <h3 class="text-3xl uppercase font-bold mb-8">
                @if ($project)
                    <div>
                        <div>Project: {{ $project->title }}</div>
                        <div class="text-sm mt-2">Client: {{ $project->client->name }}</div>
                    </div>
                @else
                    All Projects
                @endif
            </h3>

            <a href="/project"
                class="px-7 py-3 border border-black-300 rounded-full text-black-300 text-m uppercase font-bold ml-5"
                style="font-size: 10px">Back to projects</a>
            @auth
                @can('pm')
                    <a href="/task/create"
                        class="px-7 py-3 border border-red-300 rounded-full text-red-300 text-m uppercase font-bold ml-5"
                        style="font-size: 10px">Add Task</a>
                @endcan
            @endauth
            @if ($tasks->count())
                <x-task-grid :tasks="$tasks" />
                {{ $tasks->links() }}
            @else
                <p class="text-center">No tasks!</p>
            @endif



            {{-- <div class="lg:grid lg:grid-cols-3">
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
        </div> --}}

        </main>
    </x-dashboard>
</x-layout>
