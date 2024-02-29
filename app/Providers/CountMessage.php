<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MessageSimba;
use Illuminate\Support\Facades\View;

class CountMessage extends ServiceProvider
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
            $count_message = MessageSimba::where('vu', 0)->count();
            $view->with('count_message', $count_message);
        });

        // $messages = Message::all();

        // // Marquer tous les messages comme lus
        // Message::where('lu', false)->update(['lu' => true]);

        // return view('messages.index', compact('messages'));
    }
}
