<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) 
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function goals()
    {
       return $this->hasMany(Goal::class);
    }
}
