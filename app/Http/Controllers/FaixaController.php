<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albun;
use App\Models\Faixa;

class FaixaController extends Controller
{
    
    public function index(){
        $albuns = Albun::all();
        $faixas = Faixa::all();

        return view('faixa', ['faixas' => $faixas, 'albuns' => $albuns]);
    
       }
       public function store(Request $request){
        $faixa = new Faixa;
        $faixa->name = $request->nomeFaixa;
        $faixa->duracao = $request->tmpFaixa;
        $faixa->num = $request->numFaixa;
        $faixa->album_pert = $request->albumPert;
        $faixa->save();
  
        return redirect('/faixa');
     }
     
   public function destroy($id){
    Faixa::findOrFail($id)->delete();
    return redirect('/faixa');

 }
}
