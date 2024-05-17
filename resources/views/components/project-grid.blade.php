@props(['projects'])
{{-- <x-post-featured-card :project="$projects[0]"/> --}}
@if ($projects->count() > 1)
    <div class="lg:grid lg:grid-cols-1">
        @foreach ($projects as $project)
            <x-project-card :project="$project" />
        @endforeach

    </div>
@endif
