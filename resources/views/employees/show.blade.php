@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Show Employee</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $employee->name }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">Surname</label>
                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ $employee->surname }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $employee->email }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">Phone Number</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $employee->phone }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="specialization" class="col-md-4 col-form-label text-md-end">Specialization</label>
                            <div class="col-md-6">
                                <select id="specializationId" class="form-control" name="specializationId" disabled>
                                    @foreach($specializations as $specialization)
                                        <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <a class="nav-link" href="{{ route('employees.index') }}" style="text-align:center">
                            <button class="btn btn-success btn-sm">Return to Employees List</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
