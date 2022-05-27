<?php

namespace App\Http\Controllers;

use App\Article;
use App\Revue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::where('id','2')->get();
        return view('welcome',[
            'article'=>$article
        ]);
    }
    public function instr(){
        return view('instruction');
    }
    public function comite(){
        return view('comite');
    }
    public function archive(){
        $auteur = DB::table('auteurs')
        ->join('revues', 'auteurs.id', '=','revues.auteurs')
        ->select('auteurs.*','revues.auteurs')->get();
        $revue = Revue::orderBy('id','DESC')->get();
        return view('archive',['revue'=>$revue,'auteur'=>$auteur]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}