@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Reservations List</h1>
        </div>
        <div class="col-2">
            <a class="float-right" href=" {{ route('reservations.create') }} ">
                <button type="button" class="btn btn-primary">Create new Reservation</button>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">User Name</th>
                <th scope="col">User Surname</th>
                <th scope="col">User Email</th>
                <th scope="col">Treatment</th>
                <th scope="col">Employee ID</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <th scope="row">{{$reservation->id}}</th>
                        <td>{{$reservation->user->id ?? 'None' }}</td>
                        <td>{{$reservation->user->name ?? 'None' }}</td>
                        <td>{{$reservation->user->surname ?? 'None' }}</td>
                        <td>{{$reservation->user->email ?? 'None' }}</td>
                        <td>{{$reservation->treatments->name ?? 'None' }}</td>
                        <td>{{$reservation->employees->id ?? 'None' }}</td>
                        <td>{{$reservation->datetime}}</td>
                        <td>{{$reservation->status}}</td>
                        <td>
                            <a href="{{ route('reservations.show', $reservation->id) }}">
                                <button class="btn btn-success btn-sm">Show</button>
                            </a>
                            <a href="{{ route('reservations.edit', $reservation->id) }}">
                                <button class="btn btn-info btn-sm">Edit</button>
                            </a>
                            <a href="{{ route('reservations.destroy', $reservation->id) }}">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x">
        {{$reservations->links()}}
    </div>
</div>
@endsection
