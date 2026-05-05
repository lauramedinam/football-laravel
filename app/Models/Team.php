<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    //uno a uno con llave foranea
    public function President()
    {
       return $this->hasOne('App\Models\president');
    }
    // Relacion Uno a Muchos 
    public function Players(){
        return $this->hasMany('App\Models\Player');
    }
     public function Games()
    {
       return $this->belongsToMany('App\Models\games');
    }
}