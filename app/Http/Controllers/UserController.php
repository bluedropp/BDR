<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Messagerie;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


    public function index() {

      $number = DB::table('messagerietable')->count();
      if ($number!=0) {
        $messages = DB::table('messagerietable')->where('Destinataire', Auth::user()->pseudo)->get();
        $data = array('messages' => $messages);
        return \View::make("messagerie")->with($data);
      } else {

        return view('messagerie');
      }
    }

    public function create() {

      $message = new Messagerie();
      $message->Contenu = request('contenu');
      $message->Destinataire = request('destinataire');
      $message->Destinateur = Auth::user()->pseudo;
      $message->save();
      return view('messagerie');
    }
}
