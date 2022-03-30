<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();

        /* $nuovoFilm = new Movie();
        $nuovoFilm['id']=11;
        $nuovoFilm['title']="Mamma ho perso l'aereo";
        $nuovoFilm['original_title']="Mom, I lost the plane";
        $nuovoFilm['nationality']="italian";
        $nuovoFilm['vote']=9.8;
        $nuovoFilm->save(); */

        
        /* $moviesGood = Movie::where("vote", ">=", 8.5)->get(); */


        //ricavo tutti i film dal database e li passo come paramero alla vista
        return view('home', ["movies" => $movies]); 
    }
}
