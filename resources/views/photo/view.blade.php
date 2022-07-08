@extends('layouts.front')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        @if ($photo->isNotEmpty())
        <div class="row g-4">
            @foreach ($photo as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <img src="../back/photos/{{ $item->photo }}" alt="" class="img-fluid">
                    <br> <br>
                    <span>{{ $item->commentaire }}</span>
                   <!-- <a class="btn" href="{{ route('photo.show', $item) }}"><i class="fa fa-plus text-primary me-3"></i>Read More</a> -->
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Pas de photos</p>
        </div>
        @endif
    </div>
</div>
@endsection
