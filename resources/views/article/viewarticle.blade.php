@extends('layouts.front')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h2 class="page-title">{{ $revue->titre }}</h2><br>
          </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body ">

                            {!! $revue->description !!}

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href=" ../back/fichier/{{ $revue->fichier}}" class="btn btn-block btn-primary mb-12 col-12">
                  <i class="fa fa-download mr-2">  Télécharger en pdf</i>
                </a>

                <div class="list-group list-group-transparent mb-2 mt-4 ">
                  <a href="#" class="list-group-item list-group-item-action  text-center"><i class="fa fa-flag mr-2 "> </i> Autres revues</a>
                </div>
                <div class="list-group list-group-transparent mb-0">
                    @foreach ($all as $item)
                    <a href="{{ route('revue.show', $item) }}" class="list-group-item list-group-item-action text-center"><span style="font-size:10.0pt">{{ $item->titre }}</span>  </a>
                    @endforeach
                </div> 
                <div class="mt-3"> <small>{{ $all->links() }}</small> </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
