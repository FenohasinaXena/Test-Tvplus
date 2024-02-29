<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talenta extends Model
{
    use HasFactory;
    protected $table  = 'talenta';
    protected $primaryKey = 'idtalenta';
    public $timestamps = false;

    protected  $fillable = [
        'idtalenta',
        'idville',
        'nom',
        'prenom',
        'adresse',
        'numero',
        'age',
        'nomfacebook',
        'descriptions'
    ];
}
