<x-layout>
    <x-dashboard heading="Projects">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <h3 class="text-3xl uppercase font-bold">
                @if ($client)
                    Client: {{ $client->name }}
                @else
                    All Clients
                @endif
            </h3>
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                <x-client-dropdown />
            </div>
            @if ($client)
                <a href="/project"
                    class="px-7 py-3 border border-black-300  text-black-300 text-m uppercase font-bold ml-5"
                    style="font-size: 10px">Delete filters</a>
            @endif
            @auth
                @can('dev')
                    <a href="/task/?user={{ auth()->user()->id }}"
                        class="px-7 py-3 border border-red-300 rounded-full text-red-300 text-m uppercase font-bold ml-5"
                        style="font-size: 10px">Show Tasks assigned to me</a>
                @endcan

                @can('pm')
                    <a href="/client/create"
                        class="px-7 py-3 border border-red-300 rounded-full text-red-300 text-m uppercase font-bold ml-5"
                        style="font-size: 10px">Add Client</a>
                    <a href="/project/create"
                        class="px-7 py-3 border border-red-300 rounded-full text-red-300 text-m uppercase font-bold ml-5"
                        style="font-size: 10px">Add Project</a>
                @endcan
            @endauth


            @if ($project->count())
                <x-project-grid :projects="$project" />
                {{ $project->links() }}
            @else
                <p class="text-center">No projects!</p>
            @endif

        </main>
    </x-dashboard>
</x-layout>
