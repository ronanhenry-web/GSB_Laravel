<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Rapport;
use App\Models\Praticien;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{
    // Rapport
    public function liste()
    {
        //requete pour recup rapport du user actif et pas les autres
        // https://stackoverflow.com/questions/41621486/laravel-inner-join
        $id = Auth::user()->VIS_MATRICULE;
        $rapports = Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->where('rapport_visite.VIS_MATRICULE', $id)
            ->get();
        
        return view("rapport", ["rapports" => $rapports]);
    }

    // PraticienRapport
    public function rapportPraticien()
    {
        $praticiens = Praticien::all();
        
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
