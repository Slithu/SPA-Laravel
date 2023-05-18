<?php

namespace App\Http\Controllers;

use App\Models\Treatments;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


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
}
