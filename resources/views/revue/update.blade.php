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

              <form class="row g-3 needs-validation" action="{{route('revue.update', $revue)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="col-12">
                  <label  class="form-label">Titre</label>
                  <input type="text" name="titre" value="{{$revue->titre}}" class="form-control" id="titre"  required>
                  <div class="invalid-feedback">Tapez le titre!</div>
                </div>

                <div class="col-12">
                    <label  class="form-label">Volume</label>
                    <input type="text" name="volume" value="{{$revue->volume}}"  class="form-control" id="volume" >
                    <div class="invalid-feedback">Tapez le volume!</div>
                  </div>

                  <div class="col-12">
                    <label  class="form-label">Issue</label>
                    <input type="text" name="issue" value="{{$revue->issue}}"  class="form-control" id="issue" >
                    <div class="invalid-feedback">Tapez le issue!</div>
                  </div>

                  <div class="col-12">
                    <label  class="form-label">Nombre Page</label>
                    <input type="number" name="nbrPage" value="{{$revue->nbrPage}}"  class="form-control" id="nbrPage"  min="0" max="100" >
                    <div class="invalid-feedback">Tapez le nbrPage!</div>
                  </div>
                  <div class="col-12">
                    <label for="discipline" class="form-label">Discipline</label>
                  <select name="discipline" id="discipline" class="form-control form-select">
                      <option value="{{$revue->discipline_id}}" >{{implode($revue->discipline()->get()->pluck('discipline')->toArray())}}</option>
                      @foreach ($discipline as $item)
                      <option value="{{$item->id}}">{{$item->discipline}}</option>
                      @endforeach
                  </select>
                  </div>
                  <div class="col-12">
                    <label for="auteur" class="form-label">Auteur Principal</label>
                  <select name="auteurPrincipal" id="auteur" class="form-control form-select" >

                      <option value="{{$revue->princilauteur_id}}">{{ implode($revue->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($revue->auteur()->get()->pluck('prenom')->toArray()) }}</option>
                      @foreach ($auteur as $item)
                      <option value="{{$item->nom}} {{$item->prenom}}">{{$item->nom}} {{$item->prenom}}</option>
                      @endforeach
                  </select>
                  </div>

                  <div class="col-12">
                    <label for="AutreAuteur" class="form-label">Autre Auteurs</label>
                  <select name="autreAuteurs" id="autre-auteur" id="multiple" class="form-control select2" multiple>
                      <option value="{{$revue->auteur_id}}">{{ implode($revue->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($revue->auteur()->get()->pluck('prenom')->toArray()) }}</option>
                      @foreach ($auteur as $item)
                      <option value="{{$item->id}} ">{{$item->nom}} {{$item->prenom}}</option>
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
                        {{$revue->description}}
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
  <script type="text/javascript">
   $(document).ready(function() {
        // Select2 Multiple
        $('.select2').select2({
            placeholder: "Select Auteurs",
            allowClear: true
        });

    });
  </script>
@endsection



