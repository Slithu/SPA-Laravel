<?php

namespace App\Http\Controllers;

use App\Models\Treatments;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTreatmentRequest;
use Illuminate\Support\Facades\DB;


class TreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("treatments.index", [
            'treatments' => Treatments::paginate(3),
            'types' => Types::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("treatments.create", [
            'types' => Types::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreatmentRequest $request) : RedirectResponse
    {
        $treatment = new Treatments($request->validated());
        if ($request->hasFile('image')) {
            $treatment->image_path = Storage::disk('public')->put('treatments', $request->file('image'));
        }
        $treatment->save();
        return redirect(route('treatments.index'))->with('status', 'Treatment stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Treatments $treatments) : View
    {
        return view("treatments.show", [
            'treatment' => $treatments,
            'types' => Types::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Treatments $treatments) : View
    {
        return view('treatments.edit', [
            'treatment' => $treatments,
            'types' => Types::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTreatmentRequest $request, Treatments $treatments) : RedirectResponse
    {
        $treatments->fill($request->validated());
        if ($request->hasFile('image')) {
        $treatments->image_path = Storage::disk('public')->put('treatments', $request->file('image'));
        }
        $treatments->save();
        return redirect(route('treatments.index'))->with('status', 'Treatment updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatments $treatments)
    {
        //$treatment = Treatments::find($treatments);
        $treatments->delete();
        return redirect(route('treatments.index'))->with('status', 'Treatment deleted!');
    }
}
