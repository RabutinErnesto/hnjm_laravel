<?php

namespace App\Http\Controllers\Photo;

use App\Http\Controllers\Controller;
use App\Photo;
use App\Auteur;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::all();
        return view('photo.read',['photo'=>$photo]);
    }
    public function photo()
    {
        $photo = Photo::all();
        return view('photo.view',['photo'=>$photo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auteur = Auteur::all();
        return view('photo.create',[
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

        $photo = new Photo();
        $photo->commentaire = $request->commentaire;
        $photo->auteur_id = $request->auteur;
        if ($request->hasFile('photo')){
            $fichier=$request->photo;
            $filename=$fichier->getClientOriginalName();
            $request->photo->move('back/photos',$filename);
            $photo->photo=$filename;
        }else{
            $photo->photo = $request->photo;
        }

        $photo->save();
        return redirect()->route('photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        $ph = Photo::all();
        return view('photo.show', ['ph'=>$ph]);
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
    public function update(Request $request, Photo $photo)
    {
        if ($request->hasFile('photo')){
            $fichier=$request->photo;
            $filename=$fichier->getClientOriginalName();
            $request->photo->move('back/photos',$filename);
            $photo->photo=$filename;
        }else{
            $photo->photo = $request->photo;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photo.index');
    }
}
