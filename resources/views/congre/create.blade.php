@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Congres</h1>
    </div><!-- End Page Title -->
    <section class="section align-center">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter</h5>

              <form class="row g-3 needs-validation" action="{{route('congre.store')}}" method="POST">
                @csrf
                <div class="col-12">
                  <label  class="form-label">Titre</label>
                  <input type="text" name="titre" class="form-control" id="congre"  required>
                  <div class="invalid-feedback">Tapez le congre!</div>
                </div>
                <div class="col-12">
                    <label for="auteur" class="form-label">Auteur</label>
                  <select name="auteur" id="auteur" class="form-control form-select">
                      <option value="">choisir</option>
                      @foreach ($auteur as $item)
                      <option value="{{$item->nom}} {{$item->prenom}}">{{$item->nom}} {{$item->prenom}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="col-12">
                    <label  class="form-label">Date du congre</label>
                    <input type="date" name="date" class="form-control" id="congre"  required>
                    <div class="invalid-feedback">Tapez le congre!</div>
                  </div>
                <div class="col-12">
                    <label  class="form-label">Description</label>
                    <textarea class="tinymce-editor form-control" name="contenue" required>

                    </textarea>
                    <div class="invalid-feedback">Tapez les contenu!</div>
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



