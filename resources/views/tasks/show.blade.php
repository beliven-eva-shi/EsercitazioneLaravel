<x-layout>

    <section class="px-6 py-8">

        
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    

                    

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        
                        <div class="ml-3 text-left">
                            <h5 class="font-bold"><a href="/?author={{$task->user->id}}">{{$task->user-> name}}</a></h5>
                            
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/dashboard"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to tasks dashboard
                        </a>
{{-- 
                        <div class="space-x-2">
                    
                            <a href="#"
                                class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">Updates</a>
                        </div> --}}
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{$task->title}}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        {{$task->description}}
                    </div>
                    <div class="space-y-4 lg:text-lg leading-loose">
                       <strong>Cliente:</strong>  {{$task->project->client->name}}                       
                    </div>
                    <div class="space-y-4 lg:text-lg leading-loose">
                        <strong>Progetto:</strong>   {{$task->project->title}}                      
                     </div>
                     <div class="space-y-4 lg:text-lg leading-loose">
                        <strong>Assegnato a:</strong>   {{$task->user->nome}}                       
                     </div>
                     <div class="space-y-4 lg:text-lg leading-loose">
                        <strong>Stato:</strong>   {{$task->stato}}                       
                     </div>
                     <div class="space-y-4 lg:text-lg leading-loose">
                        <strong>Priorità:</strong>   {{$task->priority}}                       
                     </div>



                </div>






{{-- 
                <section class="col-span-8 col-start-5 mt-10">
                    @auth
                    <form method="task" action="/tasks/{{$task->slug}}/comments" class="border border-gray-200 p-6 rounded-xl">
                        @csrf
                        <header class='flex'>
                            <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width='40' height='40' class="rounded-full">
                            <h2 class="ml-4">Want to participate?</h2>
                        </header>
                        <div>
                            <textarea name="body" class="w-full" cols="30" placeholder="Write something here"></textarea>
                        </div>
                        <div>
                            <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit">task</button>
                        </div>
                    </form>
                   @else
                   <p>
                    <a href="/register">Register</a> or <a href="/login">Log in</a> to leave a comment!
                   </p> 
                    @endauth

                    @foreach($task->comments as $comment)
                        <x-task-comment :comment="$comment"/>
                    @endforeach
                   
                </section> --}}


            </article>
        </main>


    </section>



</x-layout>