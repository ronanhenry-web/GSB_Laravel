<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Rapport extends Model
{
    use Hasfactory;

    public $table = 'rapport_visite';
    protected $primaryKey = 'RAP_NUM';
    public $timestamps = false;
    public $incrementing = false;
}