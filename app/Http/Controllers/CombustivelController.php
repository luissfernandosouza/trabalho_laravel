<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filmesController extends Controller
{

   public function filme()
   {

    $filmes = [
        'Velozes e furiosos',
        'Titanic',
        'Transformes',

    ];
    
    
    return view('filmes', compact('filmes'));
   }
}



