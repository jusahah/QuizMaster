<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Tournament;
use App\DoneTournament;
use App\UserCount;
use App\TournamentImport;

class HomeController extends Controller
{
    //

    public function index(TournamentImport $ti) {
        /*
        $results = $ti->get();

        foreach ($results as $key => $row) {
            $arrRow = $row->toArray();
            $t = Tournament::create($arrRow);
            echo $t->id;
            # code...
        }
        */


    	// We need list of upcoming tournaments - only next 10 though
    	$upcomings = Tournament::where('startsAt', '>', time())->take(10)->get();
    	$ended     = DoneTournament::orderBy('id', 'DESC')->take(9)->get();
    	//$userCount = UserCount::orderBy('id', 'DESC')->first(); // Moved to view composer

    	// This should be done in view composer so that the variable is accessible everywhere
   
    	return view('main/frontpage')
    		->with('upcomings', $upcomings)
    		->with('ended', $ended);
    }

    public function test() {
    	return view('main/test');
    }

    public function notFinishedYetTournamentInfo(Request $request, $tid) {

    	try {
	    	$tournament = Tournament::where('id', $tid)->with('questions')->firstOrFail();
    	} catch(ModelNotFoundException $e) {
    		return view('main/errorviews/tournamentnotfound');
    	}



    	// Get questions length
    	$l = count($tournament->questions()->get());
    	$lengthInSecs = \App::make('TournamentDurationCalculator')->calculateDuration(
    		$l,
    		$tournament->timeToAnswer,
    		$tournament->timeBetweenQuestions 
    	);

        $hasStartedYet = time() > $tournament->startsAt-5; // Participation links are removed five secs before registration closes


    	return view('main/participationinfo')->with('tournament', $tournament)->with('lengthInSecs', $lengthInSecs)->with('hasStartedYet', $hasStartedYet);
    }

    public function fullResults(Request $request, $tid) {
        try {
            $donetournament = DoneTournament::where('tournament_id', $tid)->firstOrFail();
        } catch(ModelNotFoundException $e) {
            // Not yet pushed back from live server so its still running
            return "Ei löytynyt tietokannasta";
        }

        return view('main/tournamentinfo_full')->with('tournament', $donetournament);
    }

    public function tournamentInfo(Request $request, $tid) {



    	try {
	    	$donetournament = DoneTournament::where('tournament_id', $tid)->firstOrFail();
    	} catch(ModelNotFoundException $e) {
    		// Not yet pushed back from live server so its still running
    		return $this->notFinishedYetTournamentInfo($request, $tid);
    	}

    	return view('main/tournamentinfo')->with('tournament', $donetournament);

    }

    public function participationInfo(Request $request) {
    	return view('main/participationinfo');
    }

    public function participateTournament(Request $request, $tid) {

    	// Load client side app while user is watching user name screen
    	$tournament = Tournament::findOrFail($tid);
    	return view('play/username')
    		->with('allocationCode', $tournament->allocationCode)
    		->with('allocatedToServer', $tournament->allocatedToServer)
    		->with('tid', $tournament->id)
    		->with('name', $tournament->name);

    }

    
}
