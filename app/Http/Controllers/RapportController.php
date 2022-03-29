<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Rapport;
use App\Models\Praticien;
use App\Models\Offrir;
use App\Models\Medicament;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{
    // Liaison entre deux table praticien et rapport_visite
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

    // Rapport de visite
    public function rapportVisite()
    {
        $praticiens = Praticien::all();
        $medocs = Medicament::all();
        $medocsQte = Offrir::all();
                
        return view("nouveauRapport", ["praticiens" => $praticiens, "medocs" => $medocs, "medocsQte" => $medocsQte]);
    }

    // Ajout de donnée par modification de l'utilisateur
    public function store(Request $request)
    {
        $rapport = new Rapport();
        $rapport->VIS_MATRICULE = auth()->user()->VIS_MATRICULE;
        // $rapport->VIS_MATRICULE = 'a131';
        $rapport->PRA_NUM = $request->praticien;
        $rapport->RAP_DATE = $request->date;
        $rapport->RAP_BILAN = $request->bilan;
        $rapport->RAP_MOTIF = $request->motif;
        $rapport->save();
        //Permet de récup le dernier rapport de la liste pour ajouter un medoc plus bas
        $lastRapport = Rapport::orderByDesc("RAP_NUM")->first();
        
        //Ajout d'un medoc dans le rapport
        $medoc = new Offrir();  
        $medoc->VIS_MATRICULE = $rapport->VIS_MATRICULE;
        $medoc->RAP_NUM = $lastRapport->RAP_NUM;
        $medoc->MED_DEPOTLEGAL = $request->medoc;
        $medoc->OFF_QTE = $request->qte;
        $medoc->save();

        return redirect('/rapport');
    }
}
