@props(['projects'])


<div class="lg:grid lg:grid-cols-2">
    @foreach ($projects as $project)
        <x-project-card :project="$project" />
    @endforeach

</div>
