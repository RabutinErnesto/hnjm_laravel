<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Specialite;
use App\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $user->titre_id = $request->titre;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->matricule = $request->matricule;
        $user->tel = $request->tel;
        $user->specialite_id = $request->specialite;
        $user->email = $request->email;
        $user->password =hash::make($request->password);
        $user->userCreated = Auth::user()->id;
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
    public function modification_pass(Request $request, User $user){

    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', 'min:4'],
        ]);
        $user->titre_id = $request->titre;
        $user->specialite_id = $request->specialite;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->matricule = $request->matricule;
        $user->tel = $request->tel;
        $user->password = hash::make($request->password);
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
