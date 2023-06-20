@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Editing A Reservation</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="userId" class="col-md-4 col-form-label text-md-end">User ID</label>

                            <div class="col-md-6">
                                @if(Auth::user()->role === 'admin')
                                    <select id="userId" class="form-control @error('userId') is-invalid @enderror" name="userId" required>
                                        <option value="{{ $reservation->user->id }}">{{ $reservation->user->id }}</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->id }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="text" class="form-control" value="{{ $reservation->user->id }}" readonly>
                                    <input type="hidden" name="userId" value="{{ $reservation->user->id }}">
                                @endif

                                @error('userId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="typeId" class="col-md-4 col-form-label text-md-end">Type ID</label>

                            <div class="col-md-6">
                                @if(Auth::user()->role === 'admin')
                                    <select id="typeId" class="form-control @error('typeId') is-invalid @enderror" name="typeId" required>
                                        <option value="{{ $reservation->types->id }}">{{ $reservation->types->name }}</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="text" class="form-control" value="{{ $reservation->types->name }}" readonly>
                                    <input type="hidden" name="typeId" value="{{ $reservation->types->id }}">
                                @endif

                                @error('typeId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="treatmentId" class="col-md-4 col-form-label text-md-end">Treatment</label>

                            <div class="col-md-6">
                                @if(Auth::user()->role === 'admin')
                                    <select id="treatmentId" class="form-control @error('treatmentId') is-invalid @enderror" name="treatmentId" required>
                                        <option value="{{ $reservation->treatments->id }}">{{ $reservation->treatments->name }}</option>
                                        @foreach($treatments as $treatment)
                                            <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="text" class="form-control" value="{{ $reservation->treatments->name }}" readonly>
                                    <input type="hidden" name="treatmentId" value="{{ $reservation->treatments->id }}">
                                @endif

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
                                @if(Auth::user()->role === 'admin')
                                    <select id="employeeId" class="form-control @error('employeeId') is-invalid @enderror" name="employeeId" required>
                                        <option value="{{ $reservation->employees->id }}">{{ $reservation->employees->id }}</option>
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->id }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="text" class="form-control" value="{{ $reservation->employees->id }}" readonly>
                                    <input type="hidden" name="employeeId" value="{{ $reservation->employees->id }}">
                                @endif

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
                                @if(Auth::user()->role === 'admin')
                                    <input id="datetime" type="datetime-local" class="form-control @error('datetime') is-invalid @enderror" name="datetime" value="{{ $reservation->datetime }}" required autocomplete="datetime">
                                @else
                                    <input id="datetime" type="datetime-local" class="form-control @error('datetime') is-invalid @enderror" name="datetime" value="{{ $reservation->datetime }}" required autocomplete="datetime" disabled>
                                    <input type="hidden" name="datetime" value="{{ $reservation->datetime }}">
                                @endif

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
                                    <option value="confirmed" <?php if ($lastSelectedValue === 'confirmed') echo 'selected'; ?>>Confirmed</option>
                                    <option value="cancelled" <?php if ($lastSelectedValue === 'cancelled') echo 'selected'; ?>>Cancelled</option>
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
