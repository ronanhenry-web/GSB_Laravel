<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Visiteur;

class ProfilController extends Controller
{
    // Affichage du profil
    public function liste()
    {
        $visiteurs = Visiteur::all();
        
        return view("profil", ["visiteurs" => $visiteurs]);
    }

    // Ajout de donnée par modification de l'utilisateur
    public function storeProfil(Request $request)
    {
        $request->validate([
            "nom"=>["required", "string"],
            "prenom"=>["required", "string"],
            "adresse"=>["required", "string"],
            "ville"=>["required", "string"],
            "cp"=>["required", "int"]
        ]);
        $profil = Visiteur::find(auth()->id());
        $profil->VIS_NOM = $request->nom;
        $profil->Vis_PRENOM = $request->prenom;
        $profil->VIS_ADRESSE = $request->adresse;
        $profil->VIS_VILLE = $request->ville;
        $profil->VIS_CP = $request->cp;
        $profil->save();
        
        return redirect('/profil');
    }
}
