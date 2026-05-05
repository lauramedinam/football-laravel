<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    use HasFactory;
     //  Relacion Uno A Uno
    public function team(){
        return $this->belongsTo('App\Models\team'); 
    }
}
