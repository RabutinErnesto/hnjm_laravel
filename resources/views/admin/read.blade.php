@extends('layouts.app')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Utilisateurs</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <br>
                <a href="{{route('users.create')}}" class="btn btn-primary">
                    <i class="bi bi-plus-square me-1"></i> Ajouter
                </a>
                <br>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                          <th scope="col">Titre</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Prenom</th>
                          <th scope="col">matricule</th>
                          <th scope="col">Email</th>
                          <th scope="col">specialite</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($user as $item)
                          <tr>
                            <th>{{implode($item->titre()->get()->pluck('abr')->toArray())}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->prenom}}</td>
                            <td>{{$item->matricule}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{implode($item->specialite()->get()->pluck('specialite')->toArray())}}</td>
                            <td><a href="{{route('users.edit', $item->id)}}" class="btn btn-success">
                                <i class="bi bi-pen"></i>
                            </a>
                            <form action="{{route('users.destroy', $item->id)}}" method="POST" class="d-inline">
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
