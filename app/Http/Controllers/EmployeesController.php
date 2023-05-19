<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Specializations;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreEmployeeRequest;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("employees.index", [
            'employees' => Employees::paginate(10),
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("employees.create", [
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request) : RedirectResponse
    {
        $employee = new Employees($request->validated());
        $employee->save();
        return redirect(route('employees.index'))->with('status', 'Employee stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employees $employees) : View
    {
        return view("employees.show", [
            'employee' => $employees,
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employees $employees) : View
    {
        return view('employees.edit', [
            'employee' => $employees,
            'specializations' => Specializations::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployeeRequest $request, Employees $employees) : RedirectResponse
    {
        $employees->fill($request->validated());
        $employees->save();
        return redirect(route('employees.index'))->with('status', 'Employee updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employees $employees)
    {
        //$employee = Employees::find($employees);
        $employees->delete();
        return redirect(route('employees.index'))->with('status', 'Employee deleted!');
    }
}
