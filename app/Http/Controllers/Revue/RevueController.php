<?php

namespace App\Http\Controllers\Revue;

use App\Http\Controllers\Controller;
use App\Revue;
use Illuminate\Http\Request;
use App\Auteur;
use App\Discipline;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
        $data->auteur_id = implode(',', $request->autreAuteur) ;
        $data->titre=$request->titre;
        $data->volume=$request->volume;
        $data->idAuteur=$request->auteurPrincipal;
        $data->issue=$request->issue;
        $data->nbrPage=$request->nbrPage;
        $data->discipline_id=$request->discipline;
        $data->description=$request->description;
        if ($request->hasFile('fichier')){
            $fichier=$request->fichier;
            $filename=$fichier->getClientOriginalName();
            $request->fichier->move('back/fichier',$filename);
            $data->fichier=$filename;
        }else{
            $data->fichier = $request->fichier;
        }
        $data->userInserted = Auth::user()->id;
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

        $all = Revue::paginate('5');
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
            'auteur'=>$auteur,
        ]);
    }
    public function article(){
        $re = Revue::paginate(4);

       
        return view('article.article',[
            're'=>$re,
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
        if ($request->hasFile('fichier')){
            $fichier=$request->fichier;
            $filename=$fichier->getClientOriginalName();
            $request->fichier->move('back/fichier',$filename);
            $revue->fichier=$filename;
        }else{
            $revue->fichier = $request->fichier;
        }
        $revue->titre=$request->titre;
        $revue->volume=$request->volume;
        $revue->idAuteur=$request->auteurPrincipal;
        $revue->issue=$request->issue;
        $revue->nbrPage=$request->nbrPage;
        $revue->discipline_id=$request->discipline;
        $revue->description=$request->description;
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
