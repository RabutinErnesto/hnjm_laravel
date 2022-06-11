@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Photo</h1>
    </div><!-- End Page Title -->
    <section class="section align-center">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter</h5>

              <form class="row g-3 needs-validation" action="{{ route('photo.store') }}" method="POST"
              enctype="multipart/form-data">
              @method('POST')
                @csrf
                <div class="col-12">
                    <label for="fichier" class="form-label">Photo</label>
                    <div class="input-group has-validation">
                      <input type="file" name="photo" class="form-control" id="fichier" >
                      <div class="invalid-feedback">Entrez votre image .</div>
                    </div>
                  </div>
                <div class="col-12">
                  <label  class="form-label">Commentaire</label>
                  <input type="text" name="commentaire" class="form-control">
                  <div class="invalid-feedback">Tapez le commentaire</div>
                </div>
                  <div class="col-12">
                    <label for="auteur" class="form-label">auteur</label>
                  <select name="auteur" id="auteur" class="form-control form-select">
                      <option value="">choisir</option>
                      @foreach ($auteur as $item)
                      <option value="{{$item->id}} ">{{$item->nom}} {{$item->prenom}}</option>
                      @endforeach
                  </select>
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


