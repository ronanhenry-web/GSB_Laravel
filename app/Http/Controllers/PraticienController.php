<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Praticien;

class PraticienController extends Controller
{
    // Affichage des praticiens dans un tableau
    public function liste()
    {
        $praticien = Praticien::all()->first();
        $praticiens = Praticien::all();

        return view("praticien", ["praticien" => $praticien,"praticiens" => $praticiens]);
    }

    // Barre de recherche nom et select ville et fonction
    public function search(Request $request)
    {
        $res = request()->input('reinitialiser');
        $q = request()->input('q');
        $ville = $request->rechercheParVille;
        $type = $request->rechercheParType;

        if ($q != NULL && $ville != NULL && $type != NULL) {
            $praticien = Praticien::where('PRA_NOM', 'like', "$q%")
            ->Where('PRA_VILLE', 'like', "$ville")
            ->Where('TYP_CODE', 'like', "$type")
            ->get();
        } elseif ($q != NULL && $ville != NULL) {
            $praticien = Praticien::where('PRA_NOM', 'like', "$q%")
            ->Where('PRA_VILLE', 'like', "$ville")
            ->get();
        } elseif ($ville != NULL && $type != NULL) {
            $praticien = Praticien::where('PRA_VILLE', 'like', "$ville")
            ->Where('TYP_CODE', 'like', "$type")
            ->get();
        } elseif ($q != NULL && $type != NULL) {
            $praticien = Praticien::where('PRA_NOM', 'like', "$q%")
            ->Where('TYP_CODE', 'like', "$type")
            ->get();
        } elseif ($q != NULL) {
            $praticien = Praticien::where('PRA_NOM', 'like', "$q%")
            ->get();
        } elseif ($ville != NULL) {
            $praticien = Praticien::where('PRA_VILLE', 'like', "$ville")
            ->get();
        } elseif ($type != NULL) {
            $praticien = Praticien::where('TYP_CODE', 'like', "$type")
            ->get();
        } else {
            $res = "";
            $praticien = Praticien::where('PRA_NOM', 'like', "$res%")
            ->get();
        }
        
        return view('praticien')->with('praticiens', $praticien);
    }
}
