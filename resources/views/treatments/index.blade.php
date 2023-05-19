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
            <h1>Treatments List</h1>
        </div>
        <div class="col-2">
            <a class="float-right" href=" {{ route('treatments.create') }} ">
                <button type="button" class="btn btn-primary">Create new Treatment</button>
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
                <th scope="col">Type of Treatment</th>
                <th scope="col">Description</th>
                <th scope="col">Duration</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($treatments as $treatment)
                    <tr>
                        <th scope="row">{{$treatment->id}}</th>
                        <td>{{$treatment->name}}</td>
                        <td>{{$treatment->types->name ?? 'None' }}</td>
                        <td>{{$treatment->description}}</td>
                        <td>{{$treatment->duration}}</td>
                        <td>{{$treatment->price}} PLN</td>
                        <td>
                            <a href="{{ route('treatments.show', $treatment->id) }}">
                                <button class="btn btn-success btn-sm">Show</button>
                            </a>
                            <a href="{{ route('treatments.edit', $treatment->id) }}">
                                <button class="btn btn-info btn-sm">Edit</button>
                            </a>
                            <a href="{{ route('treatments.destroy', $treatment->id) }}">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x">
        {{$treatments->links()}}
    </div>
</div>
@endsection
