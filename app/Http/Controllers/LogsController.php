<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Logs;

class LogsController extends Controller
{
    // Afficher les logs
    public function liste()
    {
        $logs = Logs::all();
        
        return view("logs", ["logs" => $logs]);
    }
}
