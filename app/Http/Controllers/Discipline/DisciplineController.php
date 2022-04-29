<?php

namespace App\Http\Controllers\Discipline;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Discipline;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discipline =Discipline::all();
        return view('discipline.read',[
            'discipline'=>$discipline
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discipline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discipline = new Discipline();
        $discipline->abr=$request->abr;
        $discipline->discipline=$request->discipline;
        $discipline->save();
        return redirect()->route('discipline.index');
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
    public function edit(Discipline $discipline)
    {
        return view('discipline.update',[
            'discipline'=>$discipline,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, discipline $discipline)
    {
        $discipline->abr=$request->abr;
        $discipline->discipline=$request->discipline;
        $discipline->save();
        return redirect()->route('discipline.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(discipline $discipline)
    {
        $discipline->delete();
        return redirect()->route('discipline.index');
    }
}
