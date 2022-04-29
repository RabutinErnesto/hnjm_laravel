@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Titres</h1>
    </div><!-- End Page Title -->
    <section class="section align-center">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modifier</h5>

              <form class="row g-3 needs-validation" action="{{route('titre.update', $titre)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="col-12">
                  <label for="titre" class="form-label">Abr</label>
                  <input type="text" name="abr" class="form-control" id="titre" value="{{$titre->abr}}" required>
                  <div class="invalid-feedback">Tapez le titre!</div>
                </div>
                <div class="col-12">
                    <label for="nom" class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control" id="titre" value="{{$titre->titre}}" required>
                    <div class="invalid-feedback">Tapez le titre!</div>
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


