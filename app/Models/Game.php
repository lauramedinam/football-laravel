<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
       public function teams()
    {
       return $this->belongsToMany('App\Models\teams');
    }
        public function goals()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->hasMany('App\Models\goal');
    }
}
