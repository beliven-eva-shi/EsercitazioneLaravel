<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index()
    {
        $clientId = request()->client;
        $client = Client::find($clientId);

        $projects = Project::latest()
            ->filter(request(['client']))
            ->withCount('tasks')
            ->paginate(10)
            ->withQueryString();

        return view(
            'project.index',
            [
                'project' => $projects,
                'client' => $client,
            ]
        );
    }


    public function create()
    {
        return view(
            'project.create',
            [
                'clients' => Client::all()
            ]
        );
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'titolo' => 'required|max:30',
                'descrizione' => 'max:255'
            ]
        );

        $project = Project::create([
            'title' => $attributes['titolo'],
            'description' => $attributes['descrizione'],
            'client_id' => $request->get('cliente')

        ]);
        $project->save();
        return redirect('/project')->with('success', 'Il cliente è stato aggiunto!');
    }
}
