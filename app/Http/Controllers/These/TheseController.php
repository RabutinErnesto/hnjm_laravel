<?php

namespace App\Http\Controllers\These;

use App\Http\Controllers\Controller;
use App\These_et_Memoire;
use Illuminate\Http\Request;
use App\Auteur;
use App\Discipline;
use Illuminate\Support\Facades\Auth;

class TheseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $these = These_et_Memoire::all();
        return view('these.read',[
            'these'=>$these,
        ]);
    }
    public function viewthese(){
        $these = These_et_Memoire::all();
        return view('these.viewthese',['these'=>$these]);
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
        return view('these.create',[
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
        $these = new These_et_Memoire();
        $these->fichier= $request->fichier;
        $these->titre = $request->titre;
        $these->discipline_id = $request->discipline;
        $these->auteur_id = $request->auteur;
        $these->userCreated = Auth::user()->id;
        if ($request->hasFile('fichier')){
            $fichier=$request->fichier;
            $filename=$fichier->getClientOriginalName();
            $request->fichier->move('back/these_fichier',$filename);
            $these->fichier=$filename;
        }else{
            $these->fichier = $request->fichier;
        }
        $these->save();
        return redirect()->route('these.index');
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
    public function edit(These_et_Memoire $these)
    {
        $discipline = Discipline::all();
        $auteur = Auteur::all();
        return view('these.update',[
            'these'=>$these,
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
    public function update(Request $request, These_et_Memoire $these)
    {
        $these->titre = $request->titre;
        $these->discipline = $request->discipline;
        $these->auteur = $request->auteur;
        if ($request->hasFile('fichier')){
            $fichier=$request->fichier;
            $filename=$fichier->getClientOriginalName();
            $request->fichier->move('back/these_fichier',$filename);
            $these->fichier=$filename;
        }else{
            $these->fichier = $request->fichier;
        }
        $these->save();
        return redirect()->route('these.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(These_et_Memoire $these)
    {
        $these->delete();
        return redirect()->route('these.index');
    }
}
