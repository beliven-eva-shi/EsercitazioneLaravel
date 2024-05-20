<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {


        return view(
            'project.index',
            [
                'project' => Project::latest()->filter(request(['client']))->paginate(6)
            ]
        );
    }
    // public function index()
    // {
    //     $projectsQuery = Project::latest()->filter(request(['client']));


    //     dd($projectsQuery->toSql(), $projectsQuery->getBindings());

    //     return view(
    //         'project.index',
    //         [
    //             'project' => $projectsQuery->paginate(6)
    //         ]
    //     );
    // }

}
