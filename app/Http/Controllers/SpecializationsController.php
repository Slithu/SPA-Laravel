<?php

namespace App\Http\Controllers;

use App\Models\Specializations;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreSpecializationRequest;

class SpecializationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('specializations.index', [
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("specializations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecializationRequest $request): RedirectResponse
    {
        $specialization = new Specializations($request->validated());
        $specialization->save();
        return redirect(route('specializations.index'))->with('status', 'Specialization stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Specializations $specializations)
    {
        return view("specializations.show", [
            'specialization' => $specializations,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specializations $specializations): View
    {
        return view('specializations.edit', [
            'specialization' => $specializations
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSpecializationRequest $request, Specializations $specializations): RedirectResponse
    {
        $specializations->fill($request->validated());
        $specializations->save();
        return redirect(route('specializations.index'))->with('status', 'Specialization updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specializations $specializations)
    {
        $specializations->delete();
        return redirect(route('specializations.index'))->with('status', 'Specialization deleted!');
    }
}
