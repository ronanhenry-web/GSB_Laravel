<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Rapport;
use App\Models\Praticien;
use App\Models\Offrir;
use App\Models\Medicament;
use Illuminate\Support\Facades\Auth;
use PDF;

// Mettre le PDF
// https://www.akilischool.com/cours/laravel-generer-un-pdf-avec-laravel-dompdf

class RapportController extends Controller
{
    // Liaison entre deux tables praticien et rapport_visite 
    //permet de connaitre le user actuel pour lui afficher ses rapports
    public function liste(
        // Post $post
        )
    {
        //requete pour recup rapport du user actif et pas les autres
        // https://stackoverflow.com/questions/41621486/laravel-inner-join
        $id = Auth::user()->VIS_MATRICULE;
        $rapports = Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->where('rapport_visite.VIS_MATRICULE', $id)
            ->get();
    
        // Afficher offrir dans le rapport pour afficher les medocs et la quantité
        $medico = Offrir::join('medicament', 'offrir.MED_DEPOTLEGAL', '=', 'medicament.MED_DEPOTLEGAL')
            ->where('offrir.VIS_MATRICULE', $id)
            ->get();

        return view("rapport", ["rapports" => $rapports, "medico" => $medico]
        // , $pdf->download(\Str::slug($post->title).".pdf")
        )
        // ->setPaper('a4', 'landscape')
        // ->setWarnings(false)
        // ->stream()
        ;
    }

    // Rapport de visite affichage données
    public function rapportVisite()
    {
        $praticiens = Praticien::all();
        $medocs = Medicament::all();
        
        return view("nouveauRapport", ["praticiens" => $praticiens, "medocs" => $medocs]);
    }

    // Ajout de donnée par modification de l'utilisateur dans nouveauRapport
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "praticien"=>["required", "string"],
            "date"=>["required", "date"],
            "motif"=>["nullable", "string"],
            "bilan"=>["required", "string"],
            "ajoutMedoc"=>["required", "string"],
            "quantite"=>["required", "int"]
            
        ]);
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
        $medoc->MED_DEPOTLEGAL = $request->ajoutMedoc;
        $medoc->OFF_QTE = $request->quantite;
        $medoc->save();

        // FLASH 
        session()->flash('success', 'Rapport ajouté avec succès');

        return redirect('/rapport');
    }

    public function pdf($id) {
        $pdf = PDF::loadView('pdf');
        $pdf = PDF::loadHTML("<p>T'es beau Jimmy on te veux </p>");
        return $pdf->stream();
    }
}
