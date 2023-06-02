<?php

namespace App\Http\Controllers;

use App\Models\Treatments;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("welcome", [
            'treatments' => Treatments::all(),
            'types' => Types::all()
        ]);
    }

    public function GetSpaMassagesTreatments() : View
    {
        $results = DB::select('CALL GetSpaMassagesTreatments()');
        return view('treatments.GetSpaMassagesTreatments',[
            'treatments' => $results
           ]);
    }

    public function GetFacialTreatments() : View
    {
        $results = DB::select('CALL GetFacialTreatments()');
        return view('treatments.GetFacialTreatments',[
            'treatments' => $results
           ]);
    }

    public function GetBodyTreatments() : View
    {
        $results = DB::select('CALL GetBodyTreatments()');
        return view('treatments.GetBodyTreatments',[
            'treatments' => $results
           ]);
    }

    public function GetTreatmentsAsc() : View
    {
        $results = DB::select('CALL GetTreatmentsAsc()');
        return view('treatments.GetTreatmentsAsc',[
            'treatments' => $results
           ]);
    }

    public function GetTreatmentsDesc() : View
    {
        $results = DB::select('CALL GetTreatmentsDesc()');
        return view('treatments.GetTreatmentsDesc',[
            'treatments' => $results
           ]);
    }

    public function GetBodyTreatmentsAsc() : View
    {
        $results = DB::select('CALL GetBodyTreatmentsAsc()');
        return view('treatments.GetBodyTreatmentsAsc',[
            'treatments' => $results
           ]);
    }

    public function GetBodyTreatmentsDesc() : View
    {
        $results = DB::select('CALL GetBodyTreatmentsDesc()');
        return view('treatments.GetBodyTreatmentsDesc',[
            'treatments' => $results
           ]);
    }

    public function GetFacialTreatmentsAsc() : View
    {
        $results = DB::select('CALL GetFacialTreatmentsAsc()');
        return view('treatments.GetFacialTreatmentsAsc',[
            'treatments' => $results
           ]);
    }

    public function GetFacialTreatmentsDesc() : View
    {
        $results = DB::select('CALL GetFacialTreatmentsDesc()');
        return view('treatments.GetFacialTreatmentsDesc',[
            'treatments' => $results
           ]);
    }

    public function GetSpaMassagesTreatmentsAsc() : View
    {
        $results = DB::select('CALL GetSpaMassagesTreatmentsAsc()');
        return view('treatments.GetSpaMassagesTreatmentsAsc',[
            'treatments' => $results
           ]);
    }

    public function GetSpaMassagesTreatmentsDesc() : View
    {
        $results = DB::select('CALL GetSpaMassagesTreatmentsDesc()');
        return view('treatments.GetSpaMassagesTreatmentsDesc',[
            'treatments' => $results
           ]);
    }
}
