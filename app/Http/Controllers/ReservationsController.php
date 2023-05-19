<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use App\Models\Employees;
use App\Models\Treatments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreReservationRequest;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("reservations.index", [
            'reservations' => Reservations::paginate(10),
            'users' => User::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("reservations.create", [
            'users' => User::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request) : RedirectResponse
    {
        $reservation = new Reservations($request->validated());
        $reservation->save();
        return redirect(route('reservations.index'))->with('status', 'Reservation stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservations $reservations) : View
    {
        return view("reservations.show", [
            'reservation' => $reservations,
            'users' => User::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservations $reservations) : View
    {
        return view('reservations.edit', [
            'reservation' => $reservations,
            'users' => User::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReservationRequest $request, Reservations $reservations) : RedirectResponse
    {
        $reservations->fill($request->validated());
        $reservations->save();
        return redirect(route('reservations.index'))->with('status', 'Reservation updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservations $reservations)
    {
        //$reservations = Treatments::find($treatments);
        $reservations->delete();
        return redirect(route('reservations.index'))->with('status', 'Reservation deleted!');
    }
}
