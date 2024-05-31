@props(['clients'])


<div class="lg:grid lg:grid-cols-2">
    @foreach ($clients as $client)
        <x-client-card :client="$client" />
    @endforeach

</div>
