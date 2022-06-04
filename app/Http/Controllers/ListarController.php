<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function index(){
    
        $numero = [1,2,3,4];
        $faixa = ['um', 'dois', 'tres', 'quatro'];
        $duracao = [1.1, 1.2, 1.3, 1.4];
        
        return view('listar', ['numero' => $numero, 'faixa' => $faixa, 'duracao' => $duracao]);

    }
}
