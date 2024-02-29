<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kopikole extends Model
{
    use HasFactory;
    protected $table  = 'kopikole';
    protected $primaryKey = 'idkopikole';
    public $timestamps = false;
    protected  $fillable = [
        'idkopikole',
        'idville',
        'nom',
        'prenom',
        'adresse',
        'numero',
        'age',
        'nomfacebook',
        'chanteurimite',
        'titre'
    ];
    
}
