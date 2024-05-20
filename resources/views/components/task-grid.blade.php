@props(['tasks'])

<div class="lg:grid lg:grid-cols-2">
    @foreach ($tasks as $task)
        <x-task-card :task="$task" />
    @endforeach

</div>
