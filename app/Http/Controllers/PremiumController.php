<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premium;

class PremiumController extends Controller
{
    public function create() { //shows a view to create a new ressource (article)

        $page = request('prix');
        if ($page == 1) 
            return view('payements.mensuel');
        elseif ($page == 2)
            return view('payements.demi-annuel');
        else return view('payements.annuel');

         
       
    }
}
