<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        view()->composer(
            'main/test', 'App\Http\ViewComposers\TestComposer'
        );

        view()->composer(
            'main/frontpage', 'App\Http\ViewComposers\FrontpageComposer'
        );

        view()->composer(
            'main/tournamentinfo', 'App\Http\ViewComposers\TournamentInfoComposer'
        );

        view()->composer('index', 'App\Http\ViewComposers\UserCountComposer');

        view()->share('when', date('H:i, d.m.Y'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}