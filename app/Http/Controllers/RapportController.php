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
    // permet de connaitre le user actuel pour lui afficher ses rapports
    // liaison entre la tables medic et offrir pour lier les medocs choisi au rapport
    public function liste()
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

        return view("rapport", ["rapports" => $rapports, "medico" => $medico]);
    }

    // Afficher les données pour faire un nouveauRapport du visiteur actif
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

        // Flash alert
        session()->flash('success', 'Rapport ajouté avec succès');

        return redirect('/rapport');
    }

    // Création du PDF
    public function pdf($id)
    {
        // Afficher Rapport
        $rapports = Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->where('rapport_visite.RAP_NUM', $id)
            ->first();
    
        // Afficher Offrir
        $medico = Offrir::join('medicament', 'offrir.MED_DEPOTLEGAL', '=', 'medicament.MED_DEPOTLEGAL')
            ->where('offrir.RAP_NUM', $id)
            ->first();

        // Afficher Praticiens
        $praticiens = Praticien::join('rapport_visite', 'praticien.PRA_NUM', '=', 'rapport_visite.PRA_NUM')
            ->where('rapport_visite.RAP_NUM', $id)
            ->first();
        
        $pdf = PDF::loadView('pdf', ["rapports" => $rapports, "medico" => $medico, "praticiens"=> $praticiens]);
        return $pdf->stream();
    }

    // Afficher les données pour faire supprimer un rapport
    public function rapportDeleteInfo()
    {
        $rapports = Rapport::all();
        
        return view("deleteRapport", ["rapports" => $rapports]);
    }

    // Supprimer un rapport de visite
    public function destroy($id)
    {
        $medoc = Offrir::Where('RAP_NUM', $id)
        ->delete();
        $rapport = Rapport::Where('RAP_NUM', $id)
        ->delete();
            
        Session::flash('success', 'Le rapport numéro '.$id.' a été supprimé avec succès');

        return redirect('/rapport');
    }

    // Afficher les rapports dans un tableau
    public function rapportUpdateInfo()
    {
        $rapports = Offrir::join('rapport_visite', 'rapport_visite.RAP_NUM', '=', 'offrir.RAP_NUM')
            ->get();

        $medico = Offrir::join('medicament', 'offrir.MED_DEPOTLEGAL', '=', 'medicament.MED_DEPOTLEGAL')
            ->get();
        
        return view("updateRapportTable", ["rapports" => $rapports, "medico" => $medico]);
    }

    // Afficher le rapport pour l'update
    public function updateView($id)
    {
        $praticiens = Praticien::all();
        $rapports = Rapport::join('offrir', 'offrir.RAP_NUM', '=', 'rapport_visite.RAP_NUM')
            ->where('rapport_visite.RAP_NUM', $id)->first(); //FIRST car je récupère la ligne et non un tableau avec GET
        $rapportsMedico = Medicament::join('offrir', 'offrir.MED_DEPOTLEGAL', '=', 'medicament.MED_DEPOTLEGAL')
            ->where('offrir.RAP_NUM', $id)->first(); //FIRST car je récupère la ligne et non un tableau avec GET
        $medocs = Medicament::all();

        return view("updateRapport", ["praticiens" => $praticiens, "rapports" => $rapports, "medocs" => $medocs, "rapportsMedico" => $rapportsMedico]);
    }

    // Modifier un rapport
    public function edit(Request $request, $id) {
        $request->validate([
            "praticien"=>["required", "string"],
            "date"=>["required", "date"],
            "motif"=>["nullable", "string"],
            "bilan"=>["required", "string"],
            "ajoutMedoc"=>["required", "string"],
            "quantite"=>["required", "int"]
        ]);

        // Update rapport
        Rapport::where('RAP_NUM', $id)->update([
            'VIS_MATRICULE'=>auth()->user()->VIS_MATRICULE,
            'RAP_NUM'=>$id,
            'PRA_NUM'=>$request->praticien,
            'RAP_DATE'=>$request->date,
            'RAP_BILAN'=>$request->bilan,
            'RAP_MOTIF'=>$request->motif,
        ]);

        // Update offrir
        Offrir::where('RAP_NUM', $id)->update([
            'VIS_MATRICULE'=>auth()->user()->VIS_MATRICULE,
            'RAP_NUM'=>$id,
            'MED_DEPOTLEGAL'=>$request->ajoutMedoc,
            'OFF_QTE'=>$request->quantite,
        ]);

        return redirect('/rapport');
    }
}
