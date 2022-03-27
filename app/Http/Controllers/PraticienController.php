<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Praticien;

class PraticienController extends Controller
{
    // Affichage des praticiens
    public function liste()
    {
        $praticien = Praticien::all()->first();
        $praticiens = Praticien::all();

        return view("praticien", ["praticien" => $praticien,"praticiens" => $praticiens]);
    }

    // Barre de recherche
    public function search()
    {
        $q = request()->input('q');
        $searchPraticien = Praticien::where('PRA_NOM', 'like', "$q%")
        ->get();

        return view('praticien')->with('praticiens', $searchPraticien);
    }
}
