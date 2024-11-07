<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'IdUser',
    ];

    public function Utilisateurs(){
        return $this->belongsTo(User::class,'IdUser');
      }
}
