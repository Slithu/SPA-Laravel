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
    @if ($reservations->isEmpty())
    <h1>Your Reservations</h1><br><br>
        <h4 style="text-align: center">You don't have any reservations yet. If you want to reserve a treatment, go to the Reservations tab</h4>
    @else
    <h1>Your Reservations</h1>
    <br>
    <h6 style="text-align: center">You can edit your reservations by clicking the edit button and changing the reservation details. If you want to cancel the reservation, click the edit button and change the status to "Cancelled"</h6>
    <br><br>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">User Name</th>
                <th scope="col">User Surname</th>
                <th scope="col">User Email</th>
                <th scope="col">Type</th>
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
                        <td>{{$reservation->types->name ?? 'None' }}</td>
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
