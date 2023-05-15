<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
                
                
            ]
            );
        $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
        
            return redirect()->route('users.index', $user);

    
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $request->all();
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
                
                
            ]
            );
        $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
        $user->update($request->all());
        return redirect()->route('porcinos.index',$user)->with('mensaje','Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
