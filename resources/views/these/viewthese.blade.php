@extends('layouts.front')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        @if ($these->isNotEmpty())
        <div class="row g-4">
            @foreach ($these as $item)
                        <div class="row row-cards row-deck">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Auteur</th>
                                    <th>These et memoire</th>
                                    <th>Discipline</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <td>{{ Implode($item->auteur()->get()->pluck('nom')->toArray()) }}</td>
                                    <td>{{ $item->titre }}</td>
                                    <td>{{ Implode($item->discipline()->get()->pluck('discipline')->toArray()) }}</td>                                
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>

                </div>
            @endforeach
        </div>
        @else
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Pas de These</p>
        </div>
        @endif
    </div>
</div>
@endsection
