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

    public function index() { //renders a list of a ressource //affiche le home
        $users = DB::table('users')->get();
        return view('home', ['users' => $users]);
    }   

    public function show($pseudo)//affiche le profile de l'utilisateur actuel
    {
        $user = DB::table('users')->where('pseudo',$pseudo)->first();
         return view('profile',['user'=>$user]);
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
