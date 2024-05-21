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
                'tasks' => Task::latest()->filter(request(['project', 'user']))->paginate(10)
            ]
        );
    }


    public function show(Task $task)
    {
        return view(
            'tasks.show',
            [
                'task' => $task,
                'clients' => Client::all(),
                'users' => User::all()
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
            ]
        );

        $task = Task::create([
            'title' => $attributes['titolo'],
            'description' => $attributes['descrizione'],
            'priority' => $request->get('priorita'),
            'user_id' => $request->get('assegnato_a'),
            'stato' => $request->get('stato'),
            'project_id' => $request->get('progetto')

        ]);
        $task->save();

        return redirect('/task')->with('success', 'Il tuo task è stato aggiunto!');
    }

    public function editStato(Request $request, $id)
    {

        $task = Task::findOrFail($id);
        $task->stato = $request->input('stato');
        $task->save();

        return redirect("/task")->with('success', 'Task status updated!');
    }

    public function editUser(Request $request, $id)
    {

        $task = Task::findOrFail($id);
        $task->user_id = $request->input('assegnato_a');
        $task->save();

        return redirect("/task")->with('success', 'Task status updated!');
    }
}
