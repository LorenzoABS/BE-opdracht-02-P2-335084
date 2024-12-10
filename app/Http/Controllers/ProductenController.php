<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Leverancier;
use App\Models\Producten;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($leverancierId)
    { 
        // Vind de leverancier op basis van het ID
        $leverancier = Leverancier::findOrFail($leverancierId);

        // Haal de producten op die aan deze leverancier gekoppeld zijn
        $producten = Product::where('leverancier_id', $leverancierId)->get();

        // Geef de producten en leverancier door aan de view
        return view('producten.show', compact('leverancier', 'producten'));
    }
}
