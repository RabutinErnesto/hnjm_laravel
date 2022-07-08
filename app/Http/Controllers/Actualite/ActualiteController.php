<?php

namespace App\Http\Controllers\Actualite;

use App\Actualite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actualiteview(){
        $actualite = Actualite::all();
        return view('actualite.actualite',[
            'actualite'=>$actualite
        ]);
    }
    public function index()
    {
        $actualite = Actualite::all();
        return view('actualite.read',[
            'actualite'=>$actualite
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actualite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actualite = new Actualite();
        $actualite->titre=$request->titre;
        $actualite->description=$request->description;
        $actualite->userCreated = Auth::user()->id;
        $actualite->save();
        return redirect()->route('actualite.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        return view('actualite.viewactualite',[
            'actualite'=>$actualite
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        return view('actualite.update',[
            'actualite'=>$actualite
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        $actualite->titre=$request->titre;
        $actualite->description=$request->description;
        $actualite->save();
        return redirect()->route('actualite.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect()->route('actualite.index');
    }
}
