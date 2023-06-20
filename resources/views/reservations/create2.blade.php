@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Creating A New Reservation</div>

                <div class="card-body" style="background-image: url('{{ asset('/images/resbg2.png')}}')">
                    <form method="POST" action="{{ route('reservations.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="userId" class="col-md-4 col-form-label text-md-end">User ID</label>

                            <div class="col-md-6">
                                <select id="userId" class="form-control @error('userId') is-invalid @enderror" name="userId" required>
                                    <option value="{{ auth()->user()->id }}">{{ auth()->user()->id }}</option>
                                </select>

                                @error('userId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="typeId" class="col-md-4 col-form-label text-md-end">Type</label>

                            <div class="col-md-6">
                                <select id="typeId" class="form-control @error('typeId') is-invalid @enderror" name="typeId" required>
                                    <option value="">-</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}" @if($type->id == old('typeId') || $type->id == $typeId) selected @endif>{{ $type->name }}</option>
                                    @endforeach
                                </select>
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
                                <select id="treatmentId" class="form-control @error('treatmentId') is-invalid @enderror" name="treatmentId" required>
                                    <option value="">-</option>
                                    @foreach($treatments as $treatment)
                                        <option value="{{ $treatment->id }}" @if($treatment->id == old('treatmentId', $treatmentId)) selected @endif>{{ $treatment->name }}</option>
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
                                    <option value="">-</option>
                                </select>

                                @error('employeeId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var typeIdSelect = document.getElementById('typeId');
                                var employeeSelect = document.getElementById('employeeId');

                                typeIdSelect.addEventListener('change', updateEmployees);
                                typeIdSelect.addEventListener('DOMContentLoaded', updateEmployees);

                                function updateEmployees() {
                                    var typeId = typeIdSelect.value;

                                    while (employeeSelect.firstChild) {
                                        employeeSelect.firstChild.remove();
                                    }

                                    var defaultOption = document.createElement('option');
                                    defaultOption.value = '';
                                    defaultOption.text = '-';
                                    employeeSelect.appendChild(defaultOption);

                                    if (typeId) {
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('GET', '/reservations/employees/' + typeId);
                                        xhr.setRequestHeader('Content-Type', 'application/json');
                                        xhr.onload = function() {
                                            if (xhr.status === 200) {
                                                var employees = JSON.parse(xhr.responseText);

                                                employees.forEach(function(employee) {
                                                    var option = document.createElement('option');
                                                    option.value = employee.id;
                                                    option.text = employee.name + ' ' + employee.surname;
                                                    employeeSelect.appendChild(option);
                                                });
                                            } else {
                                                console.error('Request failed. Status: ' + xhr.status);
                                            }
                                        };
                                        xhr.onerror = function() {
                                            console.error('Request failed');
                                        };
                                        xhr.send();
                                    }
                                }

                                updateEmployees();
                            });
                        </script>

                        <div class="row mb-3">
                            <label for="datetime" class="col-md-4 col-form-label text-md-end">Date</label>

                            <div class="col-md-6">
                                <input id="datetime" type="datetime-local" class="form-control @error('datetime') is-invalid @enderror" name="datetime" value="{{ old('datetime') }}" required autocomplete="datetime">

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
