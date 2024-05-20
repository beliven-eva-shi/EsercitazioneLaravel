<x-layout>
    {{-- @include('posts._header') --}}

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <x-client-dropdown />
        </div>

        @if ($project->count())
            <x-project-grid :projects="$project" />
            {{ $project->links() }}

            {{-- {{$tasks->links()}} --}}
        @else
            <p class="text-center">No projects!</p>
        @endif



        {{-- <div class="lg:grid lg:grid-cols-3">
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
        </div> --}}

    </main>

</x-layout>
