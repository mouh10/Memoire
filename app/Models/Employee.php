<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'Statut',
        'Specialite',
        'IdUser',
    ];

    public function Utilisateurs(){
        return $this->belongsTo(User::class,'IdUser');
      }
}
