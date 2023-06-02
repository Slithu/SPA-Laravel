@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <h1>Employees List</h1>
        </div>
        @can('isAdmin')
            <div class="col-2">
                <a class="float-right" href=" {{ route('employees.create') }} ">
                    <button type="button" class="btn btn-primary">Create new Employee</button>
                </a>
            </div>
        @endcan
    </div><br><br>
    <div class="container">
        <div class="row justify-content-left mb-4 fw-bold">
            <div class="col-md-3 text-center">
                <label for="filtert">Filter by Employee Specialization:</label>
                <select id="filtert" class="form-control" onchange="window.location.href=this.options[this.selectedIndex].value;">
                    <option value="{{ route('employees.index') }}">All Employees</option>
                    <option value="{{ route('employees.GetMasseurSpecializations') }}">Masseur/Physiotherapist</option>
                    <option value="{{ route('employees.GetBeauticianSpecializations') }}">Beautician</option>
                    <option value="{{ route('employees.GetBodyCareEmployeeSpecializations') }}" selected>Body Care Employee</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="employees">
            @foreach ($employees as $employee)
                <div class="col">
                <div class="card shadow-sm">
                    @if (!is_null($employee->image_path))
                        <img src="{{ asset('storage/' . $employee->image_path) }}" class="bd-placeholder-img card-img-top" width="100%" height="525" alt="Employee image">
                    @else
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Employee</text></svg>
                    @endif
                    <div class="card-body">
                        @can('isAdmin')
                            <h4>ID: {{ $employee->id }}</h4>
                        @endcan
                        <h4>{{ $employee->name }} {{ $employee->surname }}</h4>
                        <h5 class="lead text-muted"><i>{{ $employee->specializationId }}</i></h5><br>
                        <span class="card-text fw-bold">Phone Number: {{ $employee->phone }}</span>
                        <p class="card-text fw-bold">Email: {{ $employee->email}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            @can('isAdmin')
                                <a href="{{ route('employees.show', $employee->id) }}">
                                    <button class="btn btn-success">Show</button>
                                </a>
                                <a href="{{ route('employees.edit', $employee->id) }}">
                                    <button class="btn btn-info">Edit</button>
                                </a>
                                <a href="{{ route('employees.destroy', $employee->id) }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            @endcan
                        </div>
                    </div>
                </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    {{--
    <div class="position-absolute bottom-0 start-50 translate-middle-x">
        {{$employees->links()}}
    </div>
    --}}
</div>
@endsection
