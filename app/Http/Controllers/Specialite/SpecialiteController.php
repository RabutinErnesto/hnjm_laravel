<?php

namespace App\Http\Controllers\Specialite;

use App\Http\Controllers\Controller;
use App\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialite = Specialite::all();
        return view('specialite.read',[
            'specialite'=>$specialite,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specialite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialite = new Specialite();
        $specialite->abr=$request->abr;
        $specialite->specialite=$request->specialite;
        $specialite->save();
        return redirect()->route('specialite.index');
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
    public function edit(Specialite $specialite)
    {
        return view('specialite.update',[
            'specialite'=>$specialite,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialite $specialite)
    {
        $specialite->abr=$request->abr;
        $specialite->specialite=$request->specialite;
        $specialite->save();
        return redirect()->route('specialite.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialite $specialite)
    {
        $specialite->delete();
        return redirect()->route('specialite.index');
    }
}
