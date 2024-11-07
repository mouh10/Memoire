<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public function Clients(){
        return $this->belongsTo(Client::class,'IdClient');
      }

    public function Models(){
        return $this->belongsTo(Models::class,'IdModel');
      }
    public function Employers(){
        return $this->belongsTo(Employee::class,'IdEmployer');
      }
}
