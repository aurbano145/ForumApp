<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }


    public function create()
    {
        return view('user.create');
    }


    public function store(UserCreateRequest $request)
    {
        try {
            $user = new user($request->all());
            $user->save();
            return redirect('/user');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(
                ['default' => 'Mensaje genérico que me muestre que controlamos la situación, pero que no tenemos ni idea de lo que ha pasado']);
        }
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
