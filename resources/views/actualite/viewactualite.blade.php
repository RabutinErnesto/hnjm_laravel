@extends('layouts.front')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h2 class="page-title">{{ $actualite->titre }}</h2>
            <h4></h4><br>
          </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <div style="padding-top: 5%"> {!! $actualite->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <
@endsection
