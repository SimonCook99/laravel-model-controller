<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();

        //ricavo tutti i film dal database e li passo come paramero alla vista
        return view('home', ["movies" => $movies]); 
    }
}
