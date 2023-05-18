@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Treatment</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $treatment->name }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">Type of Treatment</label>
                            <div class="col-md-6">
                                <select id="typeId" class="form-control" name="typeId" disabled>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" maxlength="1500" class="form-control" name="description" disabled>{{ $treatment->description }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duration" class="col-md-4 col-form-label text-md-end">Duration</label>
                            <div class="col-md-6">
                                <input id="duration" type="time" class="form-control" name="duration" value="{{ $treatment->duration }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>
                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{ $treatment->price }}" disabled>
                            </div>
                        </div>
                        <a class="nav-link" href="{{ route('treatments.index') }}" style="text-align:center">
                            <button class="btn btn-success btn-sm">Return to Treatments List</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
