<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use App\UserCount;
use App\Server;


class UserCountComposer
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
        //$userCount = UserCount::orderBy('id', 'DESC')->first();
        $servers = Server::all();
        $foundServers = [];

        foreach ($servers as $key => $server) {
            $foundServers[$server->name] = array('key' => $server->name, 'online' => false);
        }

        $date = new \DateTime();
        $tosub = new \DateInterval('PT2M');
        $date->sub($tosub);

        $userCounts = UserCount::where('created_at', '>', $date)->orderBy('id', 'DESC')->take(20)->get();
        $totalCounts = [];
        
        foreach ($userCounts as $key => $uc) {

            $serverkey = $uc->serverkey;
            $foundServers[$serverkey] = array('key' => $serverkey, 'online' => true);
            if (!isset($totalCounts[$serverkey])) {
                $totalCounts[$serverkey] = $uc->usercount;
            }
            
        }
        $totalsum = 0;
        foreach ($totalCounts as $key => $servercount) {
            $totalsum += $servercount;
        }


        $view->with('userCount', $totalsum)->with('foundServers', $foundServers)->with('l', 3);

        // Check at the same time how long ago user count was taken


        // Currently playing count, etc are also injected here!
        // Just contact DB directly
    }
}