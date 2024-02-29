<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Administrateur;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class UserAdministrateur extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('ADMINISTRATEUR/Header_Administrateur', function ($view) {
            $idadministrateur = Session::get('idadministrateur');
            $user = Administrateur::where('idadministrateur', $idadministrateur)->get();
            $view->with('user', $user);
        });
    }
}
