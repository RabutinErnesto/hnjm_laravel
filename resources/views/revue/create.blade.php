@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Revue</h1>
    </div><!-- End Page Title -->
    <section class="section align-center">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter</h5>

              <form class="row g-3 needs-validation" id="form-revue" action="{{route('revue.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-12">
                  <label  class="form-label">Titre</label>
                  <input type="text" name="titre" class="form-control" id="titre"  required>
                  <div class="invalid-feedback">Tapez le titre!</div>
                </div>

                <div class="col-12">
                    <label  class="form-label">Volume</label>
                    <input type="text" name="volume" class="form-control" id="volume" >
                    <div class="invalid-feedback">Tapez le volume!</div>
                  </div>

                  <div class="col-12">
                    <label  class="form-label">Issue</label>
                    <input type="text" name="issue" class="form-control" id="issue" required>
                    <div class="invalid-feedback">Tapez le issue!</div>
                  </div>

                  <div class="col-12">
                    <label  class="form-label">Nombre Page</label>
                    <input type="number" name="nbrPage" class="form-control" id="nbrPage" value="0" min="0" max="100" required>
                    <div class="invalid-feedback">Tapez le nbrPage!</div>
                  </div>
                  <div class="col-12">
                    <label for="discipline" class="form-label">Discipline</label>
                  <select name="discipline" id="discipline"  class="form-control form-select">
                      <option value="">choisir</option>
                      @foreach ($discipline as $item)
                      <option value="{{$item->id}}">{{$item->discipline}}</option>
                      @endforeach
                  </select>
                  </div>
                  <div class="col-12">
                    <label for="auteur" class="form-label">Auteur Principal</label>
                  <select name="auteurPrincipal" id="auteur" class="form-control auteurP" data-live-search="true">
                      <option value="">Auteur Principal</option>
                      @foreach ($auteur as $item)
                      <option value="{{$item->id}}">{{$item->nom}} {{$item->prenom}}</option>
                      @endforeach
                  </select>
                  </div>
                  <div class="col-12">
                    <label for="AutreAuteur" class="form-label">Autre Auteurs</label>
                    <select name="autreAuteur[]" class="form-control select2" id="multiple" tabindex="-1" data-mdb-placeholder="Autre Auteurs" data-live-search="true" multiple="multiple">
                        @foreach ($auteur as $item)
                        <option value="{{$item->id}}">{{$item->nom}} {{$item->prenom}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="col-12">
                    <label for="fichier" class="form-label">Fichier</label>
                    <div class="input-group has-validation">
                      <input type="file" name="fichier" class="form-control" id="fichier" >
                      <div class="invalid-feedback">Entrez votre image .</div>
                    </div>
                  </div>
                <div class="col-12">
                    <label  class="form-label">Description</label>
                    <textarea class="tinymce-editor form-control" name="description" required>

                    </textarea>
                    <div class="invalid-feedback">Tapez les revues!</div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2').select2({
            placeholder: "Select Auteurs",
            allowClear: true
        });
    });
</script>
<script>
        $(document).ready(function() {
        $('.auteurP').select2({
            placeholder: "Select Principal Auteur",
            allowClear: true,
        });
    });
</script>
@endsection
