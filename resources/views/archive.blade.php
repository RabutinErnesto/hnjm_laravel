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
                            <button class="btn btn-link" id="but" onclick="mpoitra()"  href="#collapse1" >
                              2019 (18)      </button>
                          </h5>
                          <script type="text/javascript">
                          function mpoitra(){
                           document.getElementById(collapse1).style.display =block;
                          }
                          </script>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion" style="display:none">
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
                                        <th scope="row"></th>
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
@endsection
