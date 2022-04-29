<?php

namespace App\Http\Controllers\Revue;

use App\Http\Controllers\Controller;
use App\Revue;
use Illuminate\Http\Request;
use App\Auteur;
use App\Discipline;

class RevueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revue = Revue::all();
        return view('revue.read',[
            'revue'=>$revue
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discipline = Discipline::all();
        $auteur = Auteur::all();
        return view('revue.create',[
            'discipline'=>$discipline,
            'auteur'=>$auteur
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $revue = new Revue;
        $revue->titre = $request->titre;
        $revue->volume = $request->volume;
        $revue->issue = $request->issue;
        $revue->nbrPage = $request->nbrPage;
        $revue->discipline = $request->discipline;
        $revue->auteurPrincipal = $request->auteurPrincipal;
        $revue->autreAuteurs = $request->autreAuteurs;
        $revue->description = $request->description;
        $revue->save();
        return redirect()->route('revue.index');
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
    public function edit( Revue $revue)
    {
        $discipline = Discipline::all();
        $auteur = Auteur::all();
        return view('revue.update',[
            'revue'=>$revue,
            'discipline'=>$discipline,
            'auteur'=>$auteur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Revue $revue)
    {
        $revue->titre = $request->titre;
        $revue->volume = $request->volume;
        $revue->issue = $request->issue;
        $revue->nbrPage = $request->nbrPage;
        $revue->discipline = $request->discipline;
        $revue->auteurPrincipal = $request->auteurPrincipal;
        $revue->autreAuteurs = $request->autreAuteurs;
        $revue->description = $request->description;
        $revue->save();
        return redirect()->route('revue.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Revue $revue)
    {
        $revue->delete();
        return redirect()->route('revue.index');
    }
}
