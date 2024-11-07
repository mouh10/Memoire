<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesure extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cou',
        'Epaule',
        'Poitrine',
        'Poignet',
        'Bras',
        'Cuisse',
        'Hanches',
        'Pantalon',
        'IdClient',
    ];
}
