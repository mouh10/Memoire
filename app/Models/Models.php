<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Description',
        'Prix',
        'Image',
        'Categorie'
    ];

    public function Categories(){
        return $this->belongsTo(Categorie::class,'IdCategorie');
      }
}
