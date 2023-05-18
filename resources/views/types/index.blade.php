@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Types of Treatments List</h1>
        </div>
        <div class="col-6">
            <a class="float-right" href=" {{ route('types.create') }} ">
                <button type="button" class="btn btn-primary">Create new Type of Treatment</button>
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
                @foreach ($types as $type)
                    <tr>
                        <th scope="row">{{$type->id}}</th>
                        <td>{{$type->name}}</td>
                        <td>
                            <a href="{{ route('types.show', $type->id) }}">
                                <button class="btn btn-success btn-sm">Show</button>
                            </a>
                            <a href="{{ route('types.edit', $type->id) }}">
                                <button class="btn btn-info btn-sm">Edit</button>
                            </a>
                            <a href="{{ route('types.destroy', $type->id) }}">
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
