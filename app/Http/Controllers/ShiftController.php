<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesiredShift;
use App\Models\ConfirmedShift;
use App\Models\WorkedShift;

class ShiftController extends Controller
{
    public function index()
    {
        return view('shifts/index')/**->with(['shifts' => $shift->get()])*/; 
    }
}
