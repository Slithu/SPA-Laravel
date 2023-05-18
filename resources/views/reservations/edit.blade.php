@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editing A Reservation</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="userId" class="col-md-4 col-form-label text-md-end">User ID</label>

                            <div class="col-md-6">
                                <select id="userId" class="form-control @error('userId') is-invalid @enderror" name="userId" required>
                                    <option value="{{ $reservation->user->id }}">{{ $reservation->user->id }}</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->id }}</option>
                                    @endforeach
                                </select>

                                @error('userId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="treatmentId" class="col-md-4 col-form-label text-md-end">Treatment</label>

                            <div class="col-md-6">
                                <select id="treatmentId" class="form-control @error('treatmentId') is-invalid @enderror" name="treatmentId" required>
                                    <option value="{{ $reservation->treatments->id }}">{{ $reservation->treatments->name }}</option>
                                    @foreach($treatments as $treatment)
                                        <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
                                    @endforeach
                                </select>

                                @error('treatmentId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="employeeId" class="col-md-4 col-form-label text-md-end">Employee ID</label>

                            <div class="col-md-6">
                                    <select id="employeeId" class="form-control @error('employeeId') is-invalid @enderror" name="employeeId" required>
                                        <option value="{{ $reservation->employees->id }}">{{ $reservation->employees->id }}</option>
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->id }}</option>
                                        @endforeach
                                    </select>

                                @error('employeeId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="datetime" class="col-md-4 col-form-label text-md-end">Date</label>

                            <div class="col-md-6">
                                <input id="datetime" type="datetime-local" class="form-control @error('datetime') is-invalid @enderror" name="datetime" value="{{ $reservation->datetime }}" required autocomplete="datetime">

                                @error('datetime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">Status</label>

                            <div class="col-md-6">
                                <select class="form-control" id="status" name="status" required>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                                <div class="col-md-6 offset-md-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
