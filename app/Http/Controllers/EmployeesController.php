<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Specializations;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreEmployeeRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("employees.index", [
            'employees' => Employees::paginate(6),
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
        $employees = new Employees($request->validated());
        if ($request->hasFile('image')) {
            $employees->image_path = Storage::disk('public')->put('employees', $request->file('image'));
        }
        $employees->save();
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
        if ($request->hasFile('image')) {
            $employees->image_path = Storage::disk('public')->put('employees', $request->file('image'));
        }
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

    public function GetMasseurSpecializations() : View
    {
        $results = DB::select('CALL GetMasseurSpecializations()');
        return view('employees.GetMasseurSpecializations',[
            'employees' => $results
           ]);
    }

    public function GetBeauticianSpecializations() : View
    {
        $results = DB::select('CALL GetBeauticianSpecializations()');
        return view('employees.GetBeauticianSpecializations',[
            'employees' => $results
           ]);
    }

    public function GetBodyCareEmployeeSpecializations() : View
    {
        $results = DB::select('CALL GetBodyCareEmployeeSpecializations()');
        return view('employees.GetBodyCareEmployeeSpecializations',[
            'employees' => $results
           ]);
    }
}
