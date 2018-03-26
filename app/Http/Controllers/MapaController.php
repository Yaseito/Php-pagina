<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapaController extends Controller
{
    public function vermapa(){
    	return view('mapa/muestramapa');
    }
 }
