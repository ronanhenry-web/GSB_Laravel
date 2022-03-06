<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Visiteur;

class VisiteurController extends Controller
{
    public function liste()
    {
        $visiteurs = Visiteur::all();
        $visiteur = Visiteur::all()->first();
        
        return view("visiteur", ["visiteur" => $visiteur,"visiteurs" => $visiteurs]);
    }

    public function search()
    {
        $q = request()->input('q');
        // dd($q);

        $searchVisiteur = Visiteur::where('VIS_NOM', 'like', "$q%")
        ->get();

        return view('visiteur')->with('visiteurs', $searchVisiteur);
    }
}
