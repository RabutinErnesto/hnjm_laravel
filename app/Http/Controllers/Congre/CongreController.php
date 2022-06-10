<?php

namespace App\Http\Controllers\Congre;

use App\Auteur;
use App\Congres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CongreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $congre = Congres::all();
        return view('congre.read',[
            'congre'=>$congre
        ]);
    }
    public function resumecongre()
    {
        $congre = Congres::all();
        return view('congre.congre',[
            'congre'=>$congre
        ]);
    }
    public function programcongre()
    {
        $congre = Congres::all();
        return view('congre.program',[
            'congre'=>$congre
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auteur = Auteur::all();
        return view('congre.create',[
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
        $congre = new Congres();
        $congre->titre = $request->titre;
        $congre->auteur = $request->auteur;
        $congre->date_congre = $request->date;
        $congre->contenue =$request->contenue;
        $congre->save();
        return redirect()->route('congre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Congres $congre)
    {
        $all = Congres::orderBy('id','DESC')->get();
        return view('congre.viewcongre',[
            'congre'=>$congre,
            'all'=>$all,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Congres $congre)
    {
        $auteur = Auteur::all();
        return view('congre.update',[
            'congre'=>$congre,
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
    public function update(Request $request, Congres $congre)
    {
        $congre->titre = $request->titre;
        $congre->auteur = $request->auteur;
        $congre->contenue =$request->contenue;
        $congre->save();
        return redirect()->route('congre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Congres $congre)
    {
        $congre->delete();
        return redirect()->route('congre.index');
    }
}
