<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
     //Relacion Uno a Muchos (Inversa) 
    public function game(){
        return $this->belongsTo('App\Models\game');
    }
       //Relacion Uno a Muchos (Inversa) 
    public function player(){
        return $this->belongsTo('App\Models\player');
    }
}
