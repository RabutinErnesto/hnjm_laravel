@extends('layouts.front')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
                ARCHIVES
          </h1>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-lg-12">

                <div id="accordion">
                    <div class="card">

                        <div class="card-header" id="heading1">

                          <h5 class="mb-0">
                            <span class="btn btn-link" id="but" onclick="afficherMasquer()"  href="#collapse1" >
                         {!! date('Y', strtotime($time)) !!}              ( {{ $revue->count() }} )
                             </span>
                          </h5>

                        </div>

                        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion" style="display: none">
                          <div class="card-body">
                              <table class="table">
                                  <thead class="thead-light">
                                    <tr>
                                      <th scope="col">NOM DU 1ER AUTEUR</th>
                                      <th scope="col">TITRE</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($revue as $item)
                                    <tr>
                                        <th scope="row">{{implode(',',$item->auteur()->get()->pluck('nom')->toArray())}}  {{implode(',',$item->auteur()->get()->pluck('prenom')->toArray())}}</th>
                                        <td><a href="{{ route('revue.show',$item) }}">{{ $item->titre }}</a></td>
                                      </tr>
                                    @endforeach
                                   </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                    </div>

            </div>

        </div>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#but").click(function(){
    $("#collapse1").toggle();
  });
});
</script>
@endsection
