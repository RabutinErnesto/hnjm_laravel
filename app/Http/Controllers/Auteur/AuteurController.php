<?php

namespace App\Http\Controllers\Auteur;

use App\Auteur;
use App\Http\Controllers\Controller;
use App\Revue;
use Illuminate\Http\Request;
use App\Specialite;
use App\Titre;
use Illuminate\Support\Facades\Auth;

class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialite = Specialite::all();
        $auteur = Auteur::all();
        return view('auteur.read',[
            'auteur'=>$auteur,
            'specialite'=>$specialite
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titre = Titre::all();
        $specialite = Specialite::all();
        return view('auteur.create',[
            'titre'=>$titre,
            'specialite'=>$specialite
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Auteur $auteur)
    {
        $auteur = new auteur;
        $auteur->titre_id= $request->titre;
        $auteur->nom = $request->nom;
        $auteur->prenom = $request->prenom;
        $auteur->phone = $request->tel;
        $auteur->specialite_id= $request->specialite;
        $auteur->email = $request->email;

        $auteur->userCreated = Auth::user()->id;
        if ($request->hasFile('images')){
            $fichier=$request->images;
            $filename=$fichier->getClientOriginalName();
            $request->images->move('back/photo_auteur',$filename);
            $auteur->photo=$filename;
        }else{
            $auteur->photo = $request->images;
        }
        $auteur->save();
        return redirect()->route('auteur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Auteur $auteur)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Auteur $auteur)
    {
        $titre = Titre::all();
        $specialite = Specialite::all();
        return view('auteur.update',[
            'titre'=>$titre,
            'specialite'=>$specialite,
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
    public function update(Request $request, Auteur $auteur)
    {

        $auteur->titre_id = $request->titre;
        $auteur->nom = $request->nom;
        $auteur->prenom = $request->prenom;
        $auteur->phone = $request->tel;
        $auteur->specialite_id = $request->specialite;
        $auteur->email = $request->email;
        if ($request->hasFile('images')){
            $fichier=$request->images;
            $filename=$fichier->getClientOriginalName();
            $request->images->move('back/photo_auteur',$filename);
            $auteur->photo=$filename;
        }else{
            $auteur->photo = $request->images;
        }
        $auteur->save();
        return redirect()->route('auteur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auteur $auteur)
    {
        $auteur->delete();
        return redirect()->route('auteur.index');
    }
}
