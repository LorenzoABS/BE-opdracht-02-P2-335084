<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeleverdeProducten;

class GeleverdeProductenController extends Controller
{
    public function index()
    {
        $leveranciers = GeleverdeProducten::all();

        return view('geleverdeProducten.index'); // Zorg dat deze view bestaat
    }
}
