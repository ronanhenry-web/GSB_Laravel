<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Visiteur extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'visiteur';
    protected $primaryKey = 'VIS_MATRICULE';
    public $timestamps = false;
    public $incrementing = false;
}