@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Show Specialization</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $specialization->name }}" disabled>
                            </div>
                        </div>

                        <a class="nav-link" href="{{ route('specializations.index') }}" style="text-align:center">
                            <button class="btn btn-success btn-sm">Return to Specialization List</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
