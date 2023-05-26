<?php

namespace App\Http\Controllers;

use App\Models\Types;
use App\Models\Specializations;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreTypeRequest;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Redirect;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('types.index', [
            'types' => Types::all(),
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("types.create", [
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request): RedirectResponse
    {
        $type = new Types($request->validated());
        $type->save();
        return redirect(route('types.index'))->with('status', 'Type stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Types $types)
    {
        return view("types.show", [
            'type' => $types,
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Types $types): View
    {
        return view('types.edit', [
            'type' => $types,
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTypeRequest $request, Types $types): RedirectResponse
    {
        $types->fill($request->validated());
        $types->save();
        return redirect(route('types.index'))->with('status', 'Type updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Types $types)
    {
        $types->delete();
        return redirect(route('types.index'))->with('status', 'Type deleted!');
    }
}
