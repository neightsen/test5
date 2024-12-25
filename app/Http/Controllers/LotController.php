<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;

class LotController extends Controller
{
    public function showLots() {
        $lots = Lot::orderBy('name', 'desc')->get();
        return view('welcome', compact('lots'));
    }

    public function createLots(Request $request){
        $request -> validate([
            'name' => 'required|max:255',
            'descripton' => 'required|max:255',
            'bet' => 'required|max:255|min:1'
        ]);

        Lot::create([
            'name' => $request -> name,
            'description' => $request -> description,
            'bet' => $request -> bet
        ]);
        return redirect('/')->with('success', 'Лот успешно создан! Дима списывает!');
    }
}
