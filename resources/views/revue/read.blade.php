@extends('layouts.app')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Revue</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <br>
                <a href="{{route('revue.create')}}" class="btn btn-primary">
                    <i class="bi bi-plus-square me-1"></i> Ajouter
                </a>
                <br>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Titre</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($revue as $item)
                          <tr>
                            <th> {{$item->id}} </th>
                            <td> {{$item->titre}} </td>
                            <td><a href="{{route('revue.edit', $item->id)}}" class="btn btn-success">
                                <i class="bi bi-pen"></i>
                            </a>
                            <form action="{{route('revue.destroy', $item->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('Delete')
                               <button class="btn btn-danger "><i class="bi bi-trash"></i></button>
                            </form></td>
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
