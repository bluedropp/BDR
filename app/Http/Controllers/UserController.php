<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
      //  $users = DB::table('users')->where('pseudo', $_POST['pseudonyme']);

        //return view('result', ['users' => $users]);
    }
}
