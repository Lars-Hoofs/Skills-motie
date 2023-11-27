<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stelling;
use App\Models\Optie;
use Illuminate\Http\Request;

class StellingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'opties.*' => 'nullable|string',
        ]);
        $stelling = Stelling::create([
            'title' => $request->titel,
            'beschrijving' => $request -> beschrijving,
        ]);

        foreach($request->opties ?? [] as $optie)
        {
            Optie::create([
                'S_id' => $stelling->id,
                'optie' => $optie,
            ]);
        }
        return redirect()->route('home');
    }

    public function home(){
        return view('home');
    }

    public function maak(){
        $stelling = Stelling::all();
        return view('create', compact('stelling'));
    }


    public function join() {
        return view('join');
    }

}
