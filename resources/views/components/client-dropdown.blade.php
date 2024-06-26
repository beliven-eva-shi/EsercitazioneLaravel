<div x-data="{ open: false }" @click.away="open=false">
    <button x-on:click="open = !open" class="py-2 pl-3 pr-9 text-sm font-semibold flex lg:inline-flex">Clients


        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22"
            viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>
    </button>
    <div x-show="open" class='py-2 absolute bg-gray-100 w-full mt-2 rounded-xl' style="display:none">
        <a href="/project" class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300">All</a>
        @foreach ($clients as $client)
            {{-- <a href="/categories/{{$category->slug}}" class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300">{{$category->name}}</a> --}}
            <a href="/project/?client={{ $client->id }}"
                class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300">{{ $client->name }}</a>
        @endforeach

    </div>
</div>
