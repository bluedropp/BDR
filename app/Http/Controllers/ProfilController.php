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
        return view('accueil', ['users' => $users]);
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

    public function edit($pseudo)
    {
        $user = DB::table('users')->where('pseudo',$pseudo)->first();
        return view('edit',['user'=>$user]);
    }

    public function update($pseudo)
    {
        $user = Profil::where('pseudo',$pseudo)->first();
        if (request('PP') != null ){

            $ok=request('PP')->store('PP');
            $user->name = request('name');
            $user->age = request('age');
            $user->taille = request('taille');
            $user->bio = request('bio');
            $user->fumeur = request('fumeur');
            $user->genre = request('genre');
            $user->PP= $ok;
        }
        else {
            
            $user->name = request('name');
            $user->age = request('age');
            $user->taille = request('taille');
            $user->bio = request('bio');
            $user->fumeur = request('fumeur');
            $user->genre = request('genre');
        
        }







        $user->save();
        
        return redirect('profil/'.$user->pseudo);

    public function search(){


        $qpseudo=request('qpseudo');
        $qage=request('qage');
        $qhobby=request('qhobby');
        $qfumeur=request('qfumeur');
        

        $query = DB::table('users');
            if (isset($qpseudo))
            $query->where('pseudo', $qpseudo."%");

        
            if (isset($qage))
                if ( $qage != "50+" )
                    $query->where('age','<=',$qage);
                else
                    $query->where('age','>',1);
                

        
            if (isset($qhobby))
                $query->where('hobby'== $qhobby);
            

        
            if (isset($qfumeur))
                $query->where('fumeur'== $qfumeur);
            
            $query->get();
            
        dd($query);








        return view();
    }


}
