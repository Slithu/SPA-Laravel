<?php

namespace App\Http\Controllers;

use App\Models\Specializations;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Specializations $specializations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specializations $specializations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specializations $specializations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specializations $specializations)
    {
        //
    }
}
