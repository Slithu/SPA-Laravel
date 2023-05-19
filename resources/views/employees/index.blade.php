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
        <div class="col-2">
            <a class="float-right" href=" {{ route('employees.create') }} ">
                <button type="button" class="btn btn-primary">Create new Employee</button>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Specialization</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{$employee->id}}</th>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->surname}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->specializations->name ?? 'None' }}</td>
                        <td>
                            <a href="{{ route('employees.show', $employee->id) }}">
                                <button class="btn btn-success btn-sm">Show</button>
                            </a>
                            <a href="{{ route('employees.edit', $employee->id) }}">
                                <button class="btn btn-info btn-sm">Edit</button>
                            </a>
                            <a href="{{ route('employees.destroy', $employee->id) }}">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x">
        {{$employees->links()}}
    </div>
</div>
@endsection
