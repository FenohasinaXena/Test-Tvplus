<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decouverte extends Model
{
    use HasFactory;
    protected $table  = 'decouverte';
    protected $primaryKey = 'iddecouverte';
    public $timestamps = false;
   protected  $fillable = [
      'iddecouverte',
      'idville',
      'nom',
      'prenom',
      'nomdescene',
      'adresse',
      'numero',
      'age',
      'nomfacebook',
      'genremusic',
      'titre',
      'nomauteur'
   ];
}
