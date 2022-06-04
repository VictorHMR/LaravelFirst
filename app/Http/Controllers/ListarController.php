<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albun;
use App\Models\Faixa;


class ListarController extends Controller
{
    public function index(){
    
        $albuns = Albun::all();
        $faixas = Faixa::all();
        return view('listar', ['albuns' => $albuns, 'faixas' => $faixas]);
    }
}
