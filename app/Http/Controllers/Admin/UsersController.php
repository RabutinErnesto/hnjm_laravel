<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Specialite;
use App\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        return view('admin.read',[
            'user'=>$user,
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
        return view('admin.create',[
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
    public function store(Request $request, User $user)
    {
        $user = new User;
        $images=$request->images;
        $filename=$images->getClientOriginalName();
        $request->images->move('back/photo_user',$filename);
        $user->images=$filename;
        $user->titre = $request->titre;
        $user->specialite = $request->specialite;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->matricule = $request->matricule;
        $user->tel = $request->tel;
        $user->titre = $request->titre;
        $user->specialite = $request->specialite;
        $user->email = $request->email;
        $user->password =hash::make($request->password) ;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $titre = Titre::all();
        $specialite = Specialite::all();
        return view('admin.update',[
            'titre'=>$titre,
            'specialite'=>$specialite,
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $images=$request->images;
        $filename=$images->getClientOriginalName();
        $request->images->move('back/photo_user',$filename);
        $user->images=$filename;
        $user->titre = $request->titre;
        $user->specialite = $request->specialite;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->matricule = $request->matricule;
        $user->tel = $request->tel;
        $user->titre = $request->titre;
        $user->specialite = $request->specialite;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
