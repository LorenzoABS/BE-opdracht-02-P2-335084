<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leverancier;

class LeverancierController extends Controller
{
    public function index()
    {
        // Ophalen van alle leveranciers
        $leveranciers = Leverancier::all();

        // Gegevens doorgeven aan de view
        return view('leveranciers.index', compact('leveranciers'));
    }
}
