@props(['tasks'])
{{-- <x-post-featured-card :task="$tasks[0]"/> --}}
@if($tasks->count()>1)  
    <div class="lg:grid lg:grid-cols-1">
        @foreach($tasks as $task)
        

        <x-task-card 
        :task="$task" 
        />
        @endforeach

</div>
@endif