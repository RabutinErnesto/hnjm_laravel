@extends('layouts.front')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
                ARCHIVES
          </h1>
        </div>
        @foreach($data as $item => $i)
        <div class="row row-cards row-deck">
            <div class="card-header btn-light"  href="#collapse">
                <a class="btn" data-toggle="collapse" href="#{{ $item }}" role="button" aria-expanded="false" aria-controls="{{ $item }}">
                   <h5 class="mb-0">
                            <span >
                                {{ $item }} ({{ $i->count() }})
                            </span>
                          </h5></a>

            </div>
                <div  class="collapse" id="{{ $item }}">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">NOM DU 1ER AUTEUR</th>
                                <th scope="col">TITRE</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($i as $rev)
                              <tr>
                                  <th scope="row">{{ implode($rev->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($rev->auteur()->get()->pluck('prenom')->toArray()) }}</th>
                                  <td><a href="">{{ $rev->titre }}</a></td>
                                </tr>
                                @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
        </div> <br>
        @endforeach


    </div>
</div>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
$(document).ready(function(){
  $(".visible").click(function(){
    $(".collapse").toggle("slide");
  });
});
</script>--}}
@endsection
