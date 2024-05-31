<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function index()
    {
        return view(
            'client.index',
            [
                'clients' => Client::latest()->paginate(10)->withQueryString()
            ]
        );
    }
    public function create()
    {
        return view(
            'client.create'
        );
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'name' => 'required|max:30'
            ]
        );


        $client = Client::create([
            'name' => $attributes['name']
        ]);
        $client->save();
        return redirect('/project')->with('success', 'Il cliente è stato aggiunto!');
    }
}
