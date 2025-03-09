<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:50',
        'surname' => 'required|max:50',
        'email' => 'required|email',
    ]);

    return User::create($request->all());
    }

    public function index()
    {
    return User::all();
    }

    public function get(Request $request, $id)
    {
    return User::findOrFail($id);
    }
}
