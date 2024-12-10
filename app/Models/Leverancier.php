<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    /** @use HasFactory<\Database\Factories\LeverancierFactory> */
    use HasFactory;

    protected $fillable = [
        'naam', 
        'contactpersoon',
        'leveranciernummer',
        'mobiel',
        'AantalVerschilendeProduchten',
    ];
    public $timestamps = false;



    public function producten()
    {
        return $this->hasMany(Product::class);
    }
    }