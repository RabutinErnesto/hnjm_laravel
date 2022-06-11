@extends('layouts.app')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Auteurs</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <br>
                <a href="{{route('auteur.create')}}" class="btn btn-primary">
                    <i class="bi bi-plus-square me-1"></i> Ajouter
                </a>
                <br>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">Nom et Prenom</th>
                            <th scope="col">specialite</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($auteur as $item)
                            <tr>
                              <td>{{implode($item->titre()->get()->pluck('abr')->toArray())}}  {{$item->nom}} {{$item->prenom}}</td>
                              <td>{{implode($item->specialite()->get()->pluck('specialite')->toArray())}}</td>
                              <td><a href="{{route('auteur.edit', $item->id)}}" class="btn btn-success">
                                  <i class="bi bi-pen"></i>
                              </a>
                              <form action="{{route('auteur.destroy', $item->id)}}" method="POST" class="d-inline">
                                  @csrf
                                  @method('Delete')
                                 <button class="btn btn-danger "><i class="bi bi-trash"></i></button>
                              </form>

                              </td>
                          </tr>
                            @endforeach

                        </tbody>
                </table>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
