<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Rapport;
use App\Models\Praticien;
use App\Models\Offrir;

class RapportController extends Controller
{
    // Rapport
    public function liste()
    {
        $rapports = Rapport::all();
        
        return view("rapport", ["rapports" => $rapports]);
    }

    // PraticienRapport
    public function rapportPraticien()
    {
        //requete pour recup rapport du user actif et pas les autres
        // $praticiens = Praticien::find(auth()->id());
        $praticiens = Praticien::Auth(user()->id());
        // $praticiens = Praticien::all();
        
        return view("nouveauRapport", ["praticiens" => $praticiens]);
    }

    // NouveauRapport
    public function store(Request $request)
    {
        $request->validate([
            "num"=>["required", ""]
        ]);

        $rapport = new Rapport();
        $rapport->VIS_MATRICULE = auth()->user()->VIS_MATRICULE;
        // $rapport->VIS_MATRICULE = 'a131';
        $rapport->RAP_NUM = $request->num;
        $rapport->PRA_NUM = $request->praticien;
        $rapport->RAP_DATE = $request->date;
        $rapport->RAP_BILAN = $request->bilan;
        $rapport->RAP_MOTIF = $request->motif;
        $rapport->save();
        return redirect('/rapport');
    }
}
