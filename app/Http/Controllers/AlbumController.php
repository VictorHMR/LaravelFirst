<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albun;

class AlbumController extends Controller
{
   public function index(){
      $albuns = Albun::all();
    return view('album', ['albuns' => $albuns]);
   }


   public function store(Request $request){

      $album = new Albun;
      $album->name = $request->nomeAlbum;
      $album->dt_lanc = $request->anoAlbum;
      $album->save();

      return redirect('/album')->with('msg', 'Album Adicionado !');
   }


}
