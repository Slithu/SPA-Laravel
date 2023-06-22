@extends('layouts.app')

@section('content')
<section class="py-5 text-center container">
    <div class="row py-lg-6">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">SPA Treatments Reservation System</h1><br>
        <p class="lead text-muted">Welcome to the SPA Treatments Reservation System, we have many available treatments of various types: SPA Massages, Facial Treatments, Body Treatments. Check them out, create an account and reserve your treatment now!</p>
      </div>
    </div>
</section>

  <div class="album py-5 bg-light" style="background-image: url('{{ asset('/images/bg2.png')}}'); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row justify-content-center mb-4 fw-bold">
            <div class="col-md-3 text-center">
                <label for="filtert">Filter by Treatment Type:</label>
                <select id="filtert" class="form-control" onchange="window.location.href=this.options[this.selectedIndex].value;">
                    <option value="{{ route('welcome') }}" class="text-center" selected>All Treatments</option>
                    <option value="{{ route('treatments.GetSpaMassagesTreatments') }}" class="text-center">SPA Massages</option>
                    <option value="{{ route('treatments.GetFacialTreatments') }}" class="text-center">Facial Treatments</option>
                    <option value="{{ route('treatments.GetBodyTreatments') }}" class="text-center">Body Treatments</option>
                </select>
            </div>
            <div class="col-md-3 text-center">
                <label for="filterp">Filter by Price:</label>
                <select id="filterp" class="form-control" onchange="window.location.href=this.options[this.selectedIndex].value;">
                    <option value="{{ route('welcome') }}" class="text-center">All Prices</option>
                    <option value="{{ route('treatments.GetTreatmentsAsc') }}" class="text-center">Low to High</option>
                    <option value="{{ route('treatments.GetTreatmentsDesc') }}" class="text-center">High to Low</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="treatments">
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
                        <small class="text-muted">Duration: {{ $treatment->duration }}</small>
                        <small class="text-muted">Price: {{ $treatment->price }} PLN</small>
                        <a href="{{ route('reservations.create2', ['treatmentId' => $treatment->id, 'typeId' => $treatment->typeId]) }}">
                            <button type="button" class="btn btn-success btn-sm">Reserve</button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
