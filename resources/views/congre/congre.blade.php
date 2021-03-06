@extends('layouts.front')
@section('content')
<div class="my-3 my-md-5">
	<div class="container">
		<div class="page-header">
		  <h1 class="page-title">
			Resume Congre
		  </h1>
		</div>

		<div class="row row-cards row-deck" >
            @foreach ($congre as $item)
            <div class="col-lg-6" style="padding: 2%">
                  <div class="card card-aside">
                    <a href="#" class="card-aside-column"></a>
                    <div class="card-body d-flex flex-column">
                          <h4><a href="{{ route('congre.show', $item) }}">{{ $item->titre }}</a></h4>
                          <div class="d-flex align-items-center pt-5 mt-auto">
                            <div>
                                <p  class="text-default" name="a">{{ implode($item->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($item->auteur()->get()->pluck('prenom')->toArray()) }}</p>

                            </div>

                          </div>
                    </div>
                  </div>
            </div>
            @endforeach
</div>


	</div>
</div>
@endsection

