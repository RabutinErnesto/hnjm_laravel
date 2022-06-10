<?php

namespace App\Http\Controllers\Revue;

use App\Http\Controllers\Controller;
use App\Revue;
use Illuminate\Http\Request;
use App\Auteur;
use App\Discipline;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

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
        $data = new Revue();
        $data->auteurs = serialize($request->autreAuteur) ;
        $data->titre=$request->titre;
        $data->volume=$request->volume;
        $data->idAuteur=$request->auteurPrincipal;
        $data->issue=$request->issue;
        $data->nbrePage=$request->nbrPage;
        $data->idDiscipline=$request->discipline;
        $data->description=$request->description;
        $data->fichier=$request->fichier;
        $data->save();
        return redirect()->route('revue.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Revue $revue)
    {
        $all = Revue::all();
        return view('article.viewarticle',[
            'revue'=>$revue,
            'all'=>$all,


        ]);
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
    public function article(){
        $revue = Revue::all();
        $auteur = Auteur::all();
        return view('article.article',[
            'revue'=>$revue,
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
        $fichier=$request->fichier;
        $filename=$fichier->getClientOriginalName();
        $request->fichier->move('back/fichier',$filename);
        $revue->fichier=$filename;
        $revue->titre = $request->titre;
        $revue->volume = $request->volume;
        $revue->issue = $request->issue;
        $revue->nbrPage = $request->nbrPage;
        $revue->idDiscipline = $request->discipline;
        $revue->idAuteur = $request->auteurPrincipal;
        $revue->description = $request->description;

        $revue['auteurs'] = json_encode($request->autreAuteurs);
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
