@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Utilisateurs</h1>
    </div><!-- End Page Title -->
    <section class="section align-center">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modifier {{$user->nom}} {{$user->prenom}}</h5>

              <form class="row g-3 needs-validation" action="{{route('users.update', $user)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-12">
                    <label for="titre" class="form-label">Titre</label>
                  <select name="titre" id="titre" class="form-control form-select">
                      <option value="{{$user->titre_id}}">{{implode($user->titre()->get()->pluck('abr')->toArray())}}</option>
                      @foreach ($titre as $item)
                      <option value="{{$item->abr}}">{{$item->abr}}</option>
                      @endforeach

                  </select>
                  </div>
                <div class="col-12">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" id="nom" value="{{$user->nom}}" required>
                  <div class="invalid-feedback">Entrez votre nom!</div>
                </div>
                <div class="col-12">
                    <label for="prenoms" class="form-label">Prenoms</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" value="{{$user->prenom}}" required>
                    <div class="invalid-feedback">Entrez votre prenoms!</div>
                  </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" required>
                  <div class="invalid-feedback">Veuillez saisir une adresse e-mail valide !</div>
                </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Password</label>
                  <input type="text" name="password" class="form-control" id="email" placeholder="nouveau mdp">
                  <div class="invalid-feedback">Veuillez saisir une adresse e-mail valide !</div>
                </div>

                <div class="col-12">
                  <label for="matricule" class="form-label">Matricule</label>
                  <div class="input-group has-validation">
                    <input type="text" name="matricule" class="form-control" id="matricule" value="{{$user->matricule}}">
                    <div class="invalid-feedback">Entrez votre matricule .</div>
                  </div>
                </div>
                <div class="col-12">
                    <label for="tel" class="form-label">Telephone</label>
                    <div class="input-group has-validation">
                      <input type="text" name="tel" class="form-control" id="tel" value="{{$user->tel}}" required>
                      <div class="invalid-feedback">Entrez votre tel .</div>
                    </div>
                  </div>
                <div class="col-12">
                    <label for="specialite" class="form-label">Specialite</label>
                  <select name="specialite" id="specialite" class="form-control form-select">
                      <option value="{{$user->specialite_id}}">{{implode($user->specialite()->get()->pluck('specialite')->toArray())}}</option>
                      @foreach ($specialite as $item)
                      <option value="{{$item->specialite}}">{{$item->specialite}}</option>
                      @endforeach

                  </select>
                  </div>
                  <div class="col-12">
                    <label for="images" class="form-label">Photo de profil</label>
                    <div class="input-group has-validation">
                      <input type="file" name="images" class="form-control" id="images" >
                      <div class="invalid-feedback">Entrez votre image .</div>
                    </div>
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>

                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>



        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection

