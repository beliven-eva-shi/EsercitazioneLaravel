<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        // $posts = Post::latest();
        // if (request('search')) {
        //     $posts
        //         ->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }


        return view(
            'project.index',
            [
                'project' => Project::latest()->filter(request(['client']))->paginate(6),
                'clients' => Client::all()
            ]
        );
    }
}
