<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use App\Models\President;
use App\Models\Goal;
use App\Models\Player;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{
     public function index()
    {
        return Game::all();
        
    }
     public function index1()
    {
        return Team::with('president')->get();
        
    }
}
