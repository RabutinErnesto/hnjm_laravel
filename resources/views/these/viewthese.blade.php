@extends('layouts.front')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        @if ($these->isNotEmpty())
        <div class="row g-4">
            @foreach ($these as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <h4 class="mb-3"> {{ $item->titre }}</h4>
                    <h6>{{ Implode($item->auteur()->get()->pluck('nom')->toArray()) }}</h6>
                    <a class="btn" href="{{ route('these.show', $item) }}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
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
