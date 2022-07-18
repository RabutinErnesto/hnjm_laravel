<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;
use App\Article;
use App\Congres;
use App\Discipline;
use App\Revue;
use App\These_et_Memoire;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::all();
        $discipline = Discipline::all();
        $Congre = Congres::all();
        $these = These_et_Memoire::all();
        $revue = Revue::all();
        $actualite = Actualite::all();
        return view('home',[
            'these'=>$these,
            'revue'=>$revue,
            'actualite'=>$actualite,
            'congre'=>$Congre,
            'article'=>$article,
            'discipline'=>$discipline,
        ]);
    }


}
