<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specificeer de tabelnaam als deze afwijkt
    protected $table = 'products';

    // Definieer welke kolommen in de database massaal ingevuld mogen worden
    protected $fillable = [
        'naam',
        'prijs',
        'beschrijving',
        'leverancier_id', // Relatie naar de leveranciers
    ];

    // Relatie met Leverancier
    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }
}
