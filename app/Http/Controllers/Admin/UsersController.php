<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Gate;
use App\Role;
use App\Profil;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        if(Gate::denies('admin')){
            return redirect('/accueil');
        }
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

   

    

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        $roles = Role::all();
        return view('admin.users.edit')->with([
            'user'=> $user,
            'role'=> $roles


        ]);





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        
        $pseudo = $user->pseudo;
        $user = Profil::where('pseudo',$pseudo)->first();
        if (request('PP') != null ){

            $ok=request('PP')->store('PP');
            $user->name = request('name');
            $user->age = request('age');
            $user->taille = request('taille');
            $user->bio = request('bio');
            $user->fumeur = request('fumeur');
            $user->genre = request('genre');
            $user->pseudo = request('pseudo');
            $user->hobby = request('hobby');
            $user->PP= $ok;
        }
        else {
            
            $user->name = request('name');
            $user->age = request('age');
            $user->taille = request('taille');
            $user->bio = request('bio');
            $user->fumeur = request('fumeur');
            $user->genre = request('genre');
            $user->pseudo = request('pseudo');
            $user->hobby = request('hobby');
        }







        $user->save();
        
        return redirect('profil/'.$user->pseudo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
