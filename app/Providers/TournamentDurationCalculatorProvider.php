<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Services\TournamentDurationCalculator;

class TournamentDurationCalculatorProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind singleton as its stateless service anyway
   
        $this->app->singleton('TournamentDurationCalculator', function($app) {
            return new \App\Services\TournamentDurationCalculator();
        });
    }
}
