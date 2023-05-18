@extends('layouts.app')

@section('content')
<section class="py-5 text-center container">
    <div class="row py-lg-6">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">SPA Treatments Reservation System</h1><br>
        <p class="lead text-muted">Welcome to the SPA Treatments Reservation System, we have many available treatments of various types: SPA Massage, Facial Treatments, Body Treatments. Check them out, create an account and reserve your treatment now!</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($treatments as $treatment)
            <div class="col">
            <div class="card shadow-sm">
                @if (!is_null($treatment->image_path))
                    <img src="{{ asset('storage/' . $treatment->image_path) }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Treatment image">
                @else
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Treatment</text></svg>
                @endif
                <div class="card-body">
                    <h4>{{ $treatment->name }}</h4>
                    <h5 class="lead text-muted"><i>{{ $treatment->types->name }}</i></h5>
                    <p class="card-text">{{ $treatment->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                          <small>Duration: {{ $treatment->duration }}</small>
                        </div>
                        <small class="text-muted">Price: {{ $treatment->price }} PLN</small>
                      </div>
                </div>
            </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
