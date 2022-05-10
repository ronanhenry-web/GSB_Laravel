<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Posseder extends Model
{
    use Hasfactory;

    public $table = 'posseder';
    protected $primaryKey = ['PRA_NUM', 'SPE_CODE'];
    // Il n'y a pas de created_at et updated_at dans la table
    public $timestamps = false;
    // Il n'y a pas d'auto increment de l'ID dans la table
    public $incrementing = false;
}