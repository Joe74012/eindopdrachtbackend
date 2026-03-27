<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerecht extends Model
{
    protected $table = 'gerechten'; // ← dit vertelt Laravel de juiste tabelnaam

    protected $fillable = ['naam', 'beschrijving', 'prijs', 'categorie'];
}
