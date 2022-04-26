<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Praticien;
use App\Models\TypePraticien;

class PraticienController extends Controller
{
    // Afficher les praticiens dans un tableau
    public function liste()
    {
        // Afficher le type Praticien entièrement + les infos praticiens
        $praticiens = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->get();

        return view("praticien", ["praticiens" => $praticiens]);
    }

    // Barre de recherche nom et select ville et select typ code
    public function search(Request $request)
    {
        $res = request()->input('reinitialiser');
        $q = request()->input('q');
        $ville = $request->rechercheParVille;
        $type = $request->rechercheParType;


        if ($q != NULL && $ville != NULL && $type != NULL) {
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('PRA_NOM', 'like', "$q%")
            ->Where('PRA_VILLE', 'like', "$ville%")
            ->Where('praticien.TYP_CODE', 'like', "$type%")
            ->get();
        } elseif ($q != NULL && $ville != NULL) {
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('PRA_NOM', 'like', "$q%")
            ->Where('PRA_VILLE', 'like', "$ville%")
            ->get();
        } elseif ($ville != NULL && $type != NULL) {
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('PRA_VILLE', 'like', "$ville%")
            ->Where('praticien.TYP_CODE', 'like', "$type%")
            ->get();
        } elseif ($q != NULL && $type != NULL) {
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('PRA_NOM', 'like', "$q%")
            ->Where('praticien.TYP_CODE', 'like', "$type%")
            ->get();
        } elseif ($q != NULL) {
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('PRA_NOM', 'like', "$q%")
            ->get();
        } elseif ($ville != NULL) {
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('PRA_VILLE', 'like', "$ville%")
            ->get();
        } elseif ($type != NULL) {
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('praticien.TYP_CODE', 'like', "$type%")
            ->get();
        } else {
            $res = "";
            $praticien = Praticien::join('type_praticien', 'praticien.TYP_CODE', '=', 'type_praticien.TYP_CODE')
            ->Where('PRA_NOM', 'like', "$res%")
            ->get();
        }
        
        return view('praticien')->with('praticiens', $praticien);
    }
}
