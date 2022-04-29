@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Disciplines</h1>
    </div><!-- End Page Title -->
    <section class="section align-center">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modifier</h5>

              <form class="row g-3 needs-validation" action="{{route('discipline.update', $discipline)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="col-12">
                  <label for="discipline" class="form-label">Abr</label>
                  <input type="text" name="abr" class="form-control" id="discipline" value="{{$discipline->abr}}" required>
                  <div class="invalid-feedback">Tapez le discipline!</div>
                </div>
                <div class="col-12">
                    <label for="nom" class="form-label">discipline</label>
                    <input type="text" name="discipline" class="form-control" id="discipline" value="{{$discipline->discipline}}" required>
                    <div class="invalid-feedback">Tapez le discipline!</div>
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


