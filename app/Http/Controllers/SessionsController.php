<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect("/")->with("success", "Goodbye");
    }
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/dashboard')->with('success', 'Wecome back!');
        }
        return back()->withInput()->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }
}
