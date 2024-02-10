<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function index() : Response {
        $users = User::all();

        return Inertia::render('Users/Index', [
            'users' => $users,
        ]);
    }

    public function create() : Response {
        return Inertia::render('Users/Create');
    }

    public function show(int $id) : Response {
        $user = User::find($id);
        if (!$user) return Inertia::render('NotFound');
        
        return Inertia::render('Users/Show', [
            'user' => $user
        ]);
    }

    public function edit(int $id) : Response {
        $user = User::find($id);
        if (!$user) return Inertia::render('NotFound');
        
        return Inertia::render('Users/Edit', [
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            "name"          => "required|min:3|max:30",
            "last_name"     => "required|min:2|max:30",
            "degree"        => "required|min:2|max:30",
            "department"    => "required|min:2|max:30",
            "email"         => [
                'required',
                'email',
                'unique:App\Models\User,email',
            ],
        ]);
        $user = new User();
        $user->name         = $request->get('name') ;
        $user->last_name    = $request->get('last_name');
        $user->degree        = $request->get('degree');
        $user->department   = $request->get('department');
        $user->email        = $request->get('email');
        $user->save();

        return to_route('users.show', ['id' => $user->id], 303);
    }

    public function update(Request $request, int $id) {
        $user = User::find($id);
        if (!$user) return to_route('404', [], 303);

        $request->validate([
            "name"          => "required|min:3|max:30",
            "last_name"     => "required|min:2|max:30",
            "degree"         => "required|min:2|max:30",
            "department"    => "required|min:2|max:30",
            "email"         => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
        ]);
        $user->name         = $request->get('name', $user->name) ;
        $user->last_name    = $request->get('last_name', $user->last_name);
        $user->degree        = $request->get('degree', $user->degree);
        $user->department   = $request->get('department', $user->department);
        $user->email        = $request->get('email', $user->email);
        $user->save();

        return to_route('users.show', ['id' => $user->id]);
    }

    public function destroy(int $id) {
        $user = User::find($id);
        if (!$user) return to_route('404', [], 303);
        $user->delete();

        return to_route('users.index', [], 303);
    }
}
