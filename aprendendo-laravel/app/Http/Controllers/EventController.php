<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
     public function index(){


    $nome = "Giovane";
    $idade = 31;

    $arr  = [10,20,30,40,50];

    $nomes = ["Giovane", "maria", "João", "Saulo"];


    return view ('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "Frentista",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
     }

     public function create() {
        return view('events.create');
     }
}
