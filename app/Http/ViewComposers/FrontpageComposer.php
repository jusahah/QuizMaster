<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;


class FrontpageComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('title', 'Visamestari | Etusivu');

        // Currently playing count, etc are also injected here!
        // Just contact DB directly
    }
}