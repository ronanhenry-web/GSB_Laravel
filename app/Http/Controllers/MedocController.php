<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Medicament;

class MedocController extends Controller
{
    // Afficher les médocs et afficher le premier médoc dans le select
    public function liste()
    {
        $medicament = Medicament::all()->first();
        $medicaments = Medicament::all();
        
        return view("medicament", ["medicament" => $medicament,"medicaments" => $medicaments]);
    }

    // Afficher en fonction de la valeur du select les données
    public function getIdMedoc(Request $request)
    {
        $medicament = Medicament::find($request->rechercheMedoc);
        $medicaments = Medicament::all();
        
        return view("medicament", ["medicament" => $medicament, "medicaments" => $medicaments]);
    }
}
