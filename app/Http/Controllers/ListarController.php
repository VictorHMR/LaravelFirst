<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albun;
use App\Models\Faixa;


class ListarController extends Controller
{
    public function index(){
    
        $search = request('search');

        if($search){
            $albuns = Albun::where([
                ['name', $search]
            ])->get();
        }else{
            $albuns = Albun::all();
        }
        $faixas = Faixa::all();

        return view('listar', ['albuns' => $albuns, 'faixas' => $faixas, 'search' => $search]);
    }
}
