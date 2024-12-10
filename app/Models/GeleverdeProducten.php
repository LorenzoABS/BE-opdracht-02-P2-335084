<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeleverdeProducten extends Model
{
    use HasFactory;

    protected $table = 'geleverde_productens'; // Explicitely define the table name

    protected $fillable = [
        'leverancier_id',
        'naam_product',
        'aantal_in_magazijn', 
        'verpakkingsgrootte',
        'laatste_levering',
        'nieuwe_levering',
    ];

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }
}
