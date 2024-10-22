<?php

namespace App\Http\Controllers;
use App\User;
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
    
    public function search(){


        $qpseudo=request('qpseudo');
        
        $qage=request('qage');
        $qgenre=request('qgenre');
        if (isset($qage)) {
            settype($qage,"int");
        }
        $qhobby=request('qhobby');
        $qfumeur=request('qfumeur');
        $users = DB::table('users')
                ->when(isset($qpseudo),function($query) use ($qpseudo) {
                    return $query->where('pseudo','like',$qpseudo.'%');                
                    })
                ->when(isset($qgenre),function($query) use ($qgenre) {
                return $query->where('genre','like',$qgenre);                
                })
                ->when(isset($qage),function($query) use ($qage) {
                    if ($qage != '51') {
                        return $query->where('age','<=',$qage);
                    } else {
                        return $query->where('age','>',$qage);
                    }
                })
                ->when(isset($qhobby),function($query) use ($qhobby) {
                    return $query->where('hobby',$qhobby);                
                    })
                ->when(isset($qfumeur),function($query) use ($qfumeur) {
                return $query->where('fumeur',$qfumeur);                
                })
                ->get();
        return view("resultats",['users'=>$users]);          
    }
}
