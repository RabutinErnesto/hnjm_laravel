@extends('layouts.front')
@section('content')
<div class="my-3 my-md-5">
	<div class="container">
		<div class="page-header">
		  <h1 class="page-title">
			ARTICLE IN PRESS
		  </h1>
		</div>



		<div class="row row-cards row-deck" >
            @foreach ($re as $item)
            <div class="col-lg-6" style="padding: 2%">
                  <div class="card card-aside">
                    <a href=""  class="card-aside-column" style="background-image: url('')"></a>
                    <div class="card-body d-flex flex-column">
                        <h4 class="d-inline"> <img src="{{ asset('back/photo_auteur/user.jpg') }}" style="width: 60px"> <a href="{{ route('revue.show', $item) }}">{{ $item->titre }}</a></h4>

                        <div class="d-flex align-items-center pt-5 mt-auto">
                            <div>

                                <a href="#"  class="text-default" name="a">{{ implode($item->auteur()->get()->pluck('nom')->toArray()) }}  {{ implode($item->auteur()->get()->pluck('prenom')->toArray()) }}</a>

                          </div>
                        </div>



                    </div>
                  </div>
            </div>
            @endforeach
            {{ $re->links() }}
        </div>


	</div>
</div>
@endsection
