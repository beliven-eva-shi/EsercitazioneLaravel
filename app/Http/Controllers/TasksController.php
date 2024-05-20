<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return view(
            'tasks.index',
            [
                'tasks' => Task::latest()->filter(request(['project']))->paginate(6)
            ]
        );
    }


    public function show(Task $task)
    {
        return view(
            'tasks.show',
            [
                'task' => $task,
                'clients' => Client::all()
                //'categories' => Category::all()
                //'post' => Post::findOrFail($id)
            ]
        );
    }
    public function create()
    {


        return view(
            'tasks.create',
            [
                'users' => User::all(),
                'projects' => Project::all()

            ]

        );
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'titolo' => 'required|max:30',
                'descrizione' => 'required|max:255',
                //     'priorita' => 'required',
                //     'assegnato_a' => 'required',
                //     'stato' => 'required',
                //     'progetto' => 'required'
                //
            ]
        );
        $priorita = $request->get('priorita');

        $task = Task::create([
            'title' => $attributes['titolo'],
            'description' => $attributes['descrizione'],
            // 'priority' => $attributes['priorita'],
            //'user_id' => $attributes['assegnato_a'],
            // 'stato' => $attributes['stato'],
            // 'project_id' => $attributes['progetto'],
            'priority' => $request->get('priorita'),
            'user_id' => $request->get('assegnato_a'),
            'stato' => $request->get('stato'),
            'project_id' => $request->get('progetto')

        ]);
        $task->save();

        // $attributes = request()->validate([
        //     'titolo' => 'required|max:30',
        //     'descrizione' => 'required|max:255',
        //     'priorita' => 'required',
        //     'assegnato_a' => 'required',
        //     'stato' => 'required',
        //     'progetto' => 'required'

        // ]);
        // ddd($attributes);
        // Tasks::create($attributes);




        // session()->flash('success', 'Your account has been created!');
        return redirect('/task')->with('success', 'Il tuo task è stato aggiunto!');
    }
}
