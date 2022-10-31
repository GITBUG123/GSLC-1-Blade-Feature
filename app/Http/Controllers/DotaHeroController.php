<?php

namespace App\Http\Controllers;

use App\Models\dotaHero;
use Illuminate\Http\Request;

class DotaHeroController extends Controller
{
    public function index(){
        $dotaherolist = dotaHero::all();
        return view('dota', compact('dotaherolist'));
    }
}
