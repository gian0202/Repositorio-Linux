<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Gian Marcos";
    $idade = 21;

    $arr = [1,2,3,4,5];
    $nomes = ["Gian", "Maria", "Joana", "Ricardo"];
    return view('welcome', 
    [
        'nome' => $nome,
        'idade' =>$idade,
        'arr' => $arr,
        'nomes' => $nomes,
    ]);
    }
    public function create(){
        return view('events.create');
    }
}