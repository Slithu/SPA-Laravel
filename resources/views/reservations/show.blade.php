@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Reservation</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="userId" class="col-md-4 col-form-label text-md-end">User ID</label>
                            <div class="col-md-6">
                                <select id="userId" class="form-control" name="userId" disabled>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="treatmentId" class="col-md-4 col-form-label text-md-end">Treatment</label>
                            <div class="col-md-6">
                                <select id="treatmentId" class="form-control" name="treatmentId" disabled>
                                    @foreach($treatments as $treatment)
                                        <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="employeeId" class="col-md-4 col-form-label text-md-end">Employee ID</label>
                            <div class="col-md-6">
                                <select id="employeeId" class="form-control" name="employeeId" disabled>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="datetime" class="col-md-4 col-form-label text-md-end">Date</label>
                            <div class="col-md-6">
                                <input id="datetime" type="datetime-local" class="form-control" name="duration" value="{{ $reservation->datetime }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">Status</label>
                            <div class="col-md-6">
                                <select class="form-control" id="status" name="status" selected disabled>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <a class="nav-link" href="{{ route('reservations.index') }}" style="text-align:center">
                            <button class="btn btn-success btn-sm">Return to Reservations</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
