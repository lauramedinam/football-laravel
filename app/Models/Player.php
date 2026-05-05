<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
     //Relacion Uno a Muchos (Inversa) 
    public function team(){
        return $this->belongsTo('App\Models\team');
    }
       public function goals()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->hasMany('App\Models\goal');
    }
}
