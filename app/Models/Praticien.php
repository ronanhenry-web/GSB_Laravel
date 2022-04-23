<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Praticien extends Model
{
    use Hasfactory;
    // protected $fillable = ['PRA_NUM', 'PRA_NOM', 'PRA_PRENOM', 
    // 'PRA_ADRESSE', 'PRA_CP', 'PRA_VILLE', 'PRA_COEFNOTORIETE', 'TYP_CODE'];

    public $table = 'praticien';
    protected $primaryKey = 'PRA_NUM';
    // Il n'y a pas de created_at et updated_at dans la table
    public $timestamps = false;
    // Il n'y a pas d'auto increment de l'ID dans la table
    public $incrementing = false;
}