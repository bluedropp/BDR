<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() { //renders a list of a ressource
        $users = DB::table('users')->get();
        echo 'this is the index';
        return view('home', ['users' => $users]);
    }   

    public function show($id)
    {
        $user = DB::table(('users')->where('')
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
