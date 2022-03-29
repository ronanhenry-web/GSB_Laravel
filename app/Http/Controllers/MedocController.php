<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Medicament;

class MedocController extends Controller
{
    // Affichage médoc et afficher le premier médoc
    public function liste()
    {
        $medicament = Medicament::all()->first();
        $medicaments = Medicament::all();
        
        return view("medicament", ["medicament" => $medicament,"medicaments" => $medicaments]);
    }

    // Afficher avec un select en fonction de la valeur ID
    public function getIdMedoc(Request $request)
    {
        $medicament = Medicament::find($request->rechercheMedoc);
        $medicaments = Medicament::all();
        
        return view("medicament", ["medicament" => $medicament, "medicaments" => $medicaments]);
    }
}
