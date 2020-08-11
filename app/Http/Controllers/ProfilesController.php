<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        return view('profiles.show',['user'=>$user,'tweets'=>$user->tweets()->paginate(3)]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit',['user'=>$user]);
    }

    public function update(Request $request, User $user)
    {
       $attributes= $request->validate([
           'username' => ['required', 'string', 'max:255','alpha_dash',
               Rule::unique('users')->ignore($user)],

            'avatar'=>['file'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore($user)],

            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
       if($request->avatar)
           $attributes['avatar']=$request->avatar->store('avatars');

       $user->update($attributes);
       return redirect($user->path());

    }
    public function destroy($id)
    {
        //
    }
}
