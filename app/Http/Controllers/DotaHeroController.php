<?php

namespace App\Http\Controllers;

use App\Models\dotaHero;
use Illuminate\Http\Request;

class DotaHeroController extends Controller
{
    public function index(){
        // $dotahero = dotaHero::all();
        // return view('dota', compact('dotahero'));
        $dotahero = dotahero::latest()->paginate(4);
        return view('dota', compact('dotahero'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function index2(){
        $dotahero = dotahero::whereNotNull('id')->get();
        // $dotahero = dotaHero::all();
        // return view('dotaherolist', compact('dotahero'));
        $dotahero = dotahero::latest()->paginate(5);
        return view('dotaherolist', compact('dotahero'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function deleteHero($id){
        $dotahero = dotaHero::find($id);

        if(isset($dotahero)){
            $dotahero->delete();
        }

        return redirect()->back();
    }
}
