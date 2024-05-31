<x-layout>
    <x-dashboard heading="Clients">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

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


            @if ($clients->count())
                <x-client-grid :clients="$clients" />


                {{ $clients->links() }}
            @else
                <p class="text-center">No Clients!</p>
            @endif

        </main>
    </x-dashboard>
</x-layout>
