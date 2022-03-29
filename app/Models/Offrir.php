<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Offrir extends Model
{
    use Hasfactory;

    public $table = 'offrir';
    protected $primaryKey = ['VIS_MATRICULE', 'RAP_NUM', 'MED_DEPOTLEGAL'];
    public $timestamps = false;
    public $incrementing = false;
}