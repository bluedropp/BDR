<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $user = User::find($id);
         return view('profil', ['user' => $user]);
    }

    public function create()
    {
        return view('register');

    }

    public function store()
    {

    }

    public function edit()
    {
        return view('edit');
    }

    public function update()
    {
        
    }




}
