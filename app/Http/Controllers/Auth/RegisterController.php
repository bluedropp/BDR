<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)

    {
        request('PP')->store('PP');
        
        $data['PP']= 'test';
        dd(request('PP'));
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'age' => ['required','Integer','min:18','max:130'],
            'taille'=> ['required','Integer','max:260','min:50'],
            'bio' => ['required','string','max:1500'],
            'pseudo' => ['required','string','max:50','unique:users'],
            'fumeur' => ['required', 'string'],
            'hobby' => ['required','string'],
            'PP' => ['required'],
            'prenom'=>['required','string','max:50'],
        ]);

        
        

        

    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'age' => $data['age'],
            'taille'=> $data['taille'],
            'bio'=>$data['bio'],
            'pseudo'=>$data['pseudo'],
            'fumeur'=>$data['fumeur'],
            'genre'=> $data['genre'],
            'hobby'=> $data['hobby'],
            'PP'=>$data['PP'],
            'prenom'=>$data['prenom'],
        ]);
        
        
    }
}
