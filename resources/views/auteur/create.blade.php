@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Auteurs</h1>
    </div><!-- End Page Title -->
    <section class="section align-center">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un auteur</h5>

              <form class="row g-3 needs-validation" action="{{route('auteur.store')}}"
               method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="titre" class="form-label">Titre</label>
                  <select name="titre" id="titre" class="form-control form-select">
                      <option value="">choisir ...</option>
                      @foreach ($titre as $item)
                      <option value="{{$item->id}}">{{$item->abr}}</option>
                      @endforeach

                  </select>
                  </div>
                <div class="col-12">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" id="nom" required>
                  <div class="invalid-feedback">Entrez votre nom!</div>
                </div>
                <div class="col-12">
                    <label for="prenoms" class="form-label">Prenoms</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" required>
                    <div class="invalid-feedback">Entrez votre prenoms!</div>
                  </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autocomplete="email">
                  @error('email')
                  <div class="invalid-feedback"  role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                </div>

                <div class="col-12">
                    <label for="tel" class="form-label">Telephone</label>
                    <div class="input-group has-validation">
                      <input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror" id="tel" >
                      <div class="invalid-feedback">Entrez votre tel .</div>
                      @error('tel')
                      <div class="invalid-feedback"  role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    </div>
                  </div>
                <div class="col-12">
                    <label for="specialite" class="form-label">Specialite</label>
                  <select name="specialite" id="specialite" class="form-control form-select">
                      <option value="">choisir</option>
                      @foreach ($specialite as $item)
                      <option value="{{$item->id}}">{{$item->specialite}}</option>
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

