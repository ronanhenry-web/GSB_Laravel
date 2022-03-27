<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Medicament extends Model
{
    use Hasfactory;

    public $table = 'medicament';
    protected $primaryKey = 'MED_DEPOTLEGAL';
    public $timestamps = false;
    public $incrementing = false;
}