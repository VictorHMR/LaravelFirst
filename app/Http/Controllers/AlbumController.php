<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albun;

class AlbumController extends Controller
{
   public function create(){
      $albuns = Albun::all();
    return view('album', ['albuns' => $albuns]);
   }


}
