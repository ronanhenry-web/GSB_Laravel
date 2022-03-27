<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Medicament;

class MedocController extends Controller
{
    // Affichage médoc
    public function liste()
    {
        $medicament = Medicament::all()->first();
        $medicaments = Medicament::all();
        
        return view("medicament", ["medicament" => $medicament,"medicaments" => $medicaments]);
    }

    // Afficher le premier médoc par défaut puis afficher avec un select en fonction de la valeur
    public function getIdMedoc(Request $request)
    {
        $medicament = Medicament::find($request->rechercheMedoc);
        $medicaments = Medicament::all();
        
        return view("medicament", ["medicament" => $medicament, "medicaments" => $medicaments]);
    }
}
