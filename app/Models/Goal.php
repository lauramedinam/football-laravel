<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) 
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    //Relacion Uno a Muchos (Inversa) 
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
