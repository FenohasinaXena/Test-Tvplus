<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Kopikole;
use App\Models\Decouverte;
use App\Models\Talenta;




use App\Http\Controllers\Controller;

class Controller_Kopikole extends Controller
{
   
    public function liste_ville(){
        $villes = Ville::get();
        return view('Inscription_Kopikole', compact(['villes']));
    }
    
    public function liste_ville2(){
        $villes = Ville::get();
        return view('Inscription_Decouverte', compact(['villes']));
    }

    public function liste_ville3(){
        $villes = Ville::get();
        return view('Inscription_Talenta', compact(['villes']));
    }
    

    public function inscri_kopikole(){
        $ville = \request('ville');
        $nom = \request('nom');
        $age = \request('age');
        $chanteurimite = \request('chanteurimite');
        $numero = \request('numero');
        $prenom = \request('prenom');
        $adresse = \request('adresse');
        $titre = \request('titre');
        $nomfacebook = \request('nomfacebook');
        $ajout =  Kopikole::create([
            'idville' => $ville,
            'nom' =>  $nom,
            'prenom' =>  $prenom,
            'adresse' => $adresse ,
            'numero' =>  $numero,
            'age' =>  $age,
            'nomfacebook' => $nomfacebook,
            'chanteurimite' => $chanteurimite,
            'titre' => $titre,
        ]);
        return redirect('Inscription_Kopikole/')->with('message','Tu est inscrir sur Kopi kole');  
    }
    
    public function inscri_decouverte(){
        $ville = \request('ville');
        $nom = \request('nom');
        $age = \request('age');
        $nomdescene = \request('nomdescene');
        $genremusic = \request('genremusic');
        $numero = \request('numero');
        $prenom = \request('prenom');
        $adresse = \request('adresse');
        $titre = \request('titre');
        $nomauteur = \request('nomauteur');
        $nomfacebook = \request('nomfacebook');
        $ajout =  Decouverte::create([
            'idville' => $ville,
            'nom' =>  $nom,
            'prenom' =>  $prenom,
            'nomdescene' => $nomdescene,
            'adresse' => $adresse ,
            'numero' =>  $numero,
            'age' =>  $age,
            'nomfacebook' => $nomfacebook,
            'genremusic' => $genremusic,
            'titre' => $titre,
            'nomauteur' => $nomauteur,
        ]);
        return redirect('Inscription_Decouverte')->with('message','Tu est inscrir sur Kopi kole');  
    }

    public function insri_talenta(){
        $ville = \request('ville');
        $nom = \request('nom');
        $age = \request('age');
        $numero = \request('numero');
        $prenom = \request('prenom');
        $adresse = \request('adresse');
        $nomfacebook = \request('nomfacebook');
        $descriptions = \request('descriptions');
        $ajout =  Talenta::create([
            'idville' => $ville,
            'nom' => $nom,
            'prenom' => $prenom,
            'adresse' =>  $adresse,
            'numero' => $numero ,
            'age' => $age,
            'nomfacebook' => $nomfacebook,
            'descriptions' => $descriptions,
        ]);
        return redirect('Inscription_Talenta')->with('message','Tu est inscrir sur Kopi kole');
       
    }

}
