<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    use HasFactory;

    //  Relacion Uno A Uno (president has one team, since teams.president_id references this)
    public function team()
    {
        return $this->hasOne(Team::class); 
    }
}
