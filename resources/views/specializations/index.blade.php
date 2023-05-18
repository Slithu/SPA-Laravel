@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Specializations List</h1>
        </div>
        <div class="col-6">
            <a class="float-right" href=" {{ route('specializations.create') }} ">
                <button type="button" class="btn btn-primary">Create new Specialization</button>
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
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($specializations as $specialization)
                    <tr>
                        <th scope="row">{{$specialization->id}}</th>
                        <td>{{$specialization->name}}</td>
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
</div>
@endsection
