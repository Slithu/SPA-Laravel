<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use App\Models\Employees;
use App\Models\Treatments;
use App\Models\User;
use App\Models\Types;
use App\Models\Specializations;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreReservationRequest;
use Illuminate\Support\Facades\Auth;
use App\Enums\UserRole;
use Carbon\Carbon;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("reservations.index", [
            'reservations' => Reservations::paginate(4),
            'users' => User::all(),
            'types' => Types::all(),
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
            'types' => Types::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all()
        ]);
    }
    /*
    public function create2(Request $request, $treatmentId, $typeId) : View
    {
        return view("reservations.create2", [
            'users' => User::all(),
            'types' => Types::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all(),
            'typeId' => $typeId,
            'treatmentId' => $treatmentId
        ]);
    }
    */
    public function create2(Request $request, $treatmentId, $typeId) : View
    {
        $types = Types::all();
        $treatments = Treatments::all();
        $employees = Employees::where('specializationId', $typeId)->get();

        return view("reservations.create2", [
            'users' => User::all(),
            'types' => $types,
            'treatments' => $treatments,
            'employees' => $employees,
            'typeId' => $typeId,
            'treatmentId' => $treatmentId
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request): RedirectResponse
    {
        $employeeId = $request->input('employeeId');
        $datetime = $request->input('datetime');

        $selectedTime = Carbon::parse($datetime)->format('H:i');
        $earliestTime = '08:00';
        $latestTime = '20:00';

        if ($selectedTime < $earliestTime || $selectedTime > $latestTime) {
            return back()->withErrors(['datetime' => 'Unfortunately, there are no treatments at this time. Hours available are (8:00 - 20:00)'])->withInput();
        }

        $existingReservation = Reservations::where('employeeId', $employeeId)
            ->where('datetime', $datetime)
            ->first();

        if ($existingReservation) {
            return back()->withErrors(['datetime' => 'The employee is already occupied on the selected date'])->withInput();
        }

        $earliestPreviousReservationTime = Carbon::parse($datetime)->subHours(3);
        $previousReservation = Reservations::where('employeeId', $employeeId)
            ->where('datetime', '>', $earliestPreviousReservationTime)
            ->where('datetime', '<=', $datetime)
            ->first();

        if ($previousReservation) {
            return back()->withErrors(['datetime' => 'The employee is already occupied within 3 hours of the selected date'])->withInput();
        }

        $earliestNextReservationTime = Carbon::parse($datetime)->addHours(3);
        $nextReservation = Reservations::where('employeeId', $employeeId)
            ->where('datetime', '>=', $datetime)
            ->where('datetime', '<', $earliestNextReservationTime)
            ->first();

        if ($nextReservation) {
            return back()->withErrors(['datetime' => 'The employee is already occupied within 3 hours of the selected date'])->withInput();
        }

        $reservation = new Reservations($request->validated());
        $reservation->save();

        return redirect(route('reservations.session'))->with('status', 'Reservation stored!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Reservations $reservations) : View
    {
        return view("reservations.show", [
            'reservation' => $reservations,
            'users' => User::all(),
            'types' => Types::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservations $reservations) : View
    {
        $lastSelectedValue = $reservations->status;

        return view('reservations.edit', [
            'reservation' => $reservations,
            'users' => User::all(),
            'types' => Types::all(),
            'treatments' => Treatments::all(),
            'employees' => Employees::all(),
            'lastSelectedValue' => $lastSelectedValue
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReservationRequest $request, Reservations $reservations) : RedirectResponse
    {
        $reservations->fill($request->validated());
        $reservations->save();

        $user = Auth::user();

    if ($user->role === UserRole::USER) {
        return redirect()->route('reservations.session')->with('status', 'Reservation updated!');
    }

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

    public function getTreatmentsByType($typeId)
    {
        $treatments = Treatments::where('typeId', $typeId)->get();

        return response()->json($treatments);
    }

    public function getEmployeesByType($typeId)
    {
        $type = Types::findOrFail($typeId);
        $specializationId = $type->specializationId;

        $employees = Employees::where('specializationId', $specializationId)->get();

        return response()->json($employees);
    }

    public function showReservations()
    {
        $reservations = Reservations::where('userId', Auth::id())->paginate(4);

        return view('reservations.session', compact('reservations'));
    }
}
