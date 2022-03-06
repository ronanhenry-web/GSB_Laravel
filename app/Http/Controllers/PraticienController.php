<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Praticien;

class PraticienController extends Controller
{
    public function liste()
    {
        $praticiens = Praticien::all();
        $praticien = Praticien::all()->first();
        
        return view("praticien", ["praticien" => $praticien,"praticiens" => $praticiens]);
    }

    public function getIdPraticien(Request $request)
    {
        // dd($request);   
        $praticien = Praticien::find($request->recherchePraticiens);
        $praticiens = Praticien::all();
        return view("praticien", ["praticien" => $praticien, "praticiens" => $praticiens]);
    }
}
