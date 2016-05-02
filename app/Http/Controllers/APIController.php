<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tournament;
use App\Question;
use App\DoneTournament;
use App\UserCount;

class APIController extends Controller
{
    private function getRandomCode() {
        return str_random(16);
    }
    public function fetchTournaments(Request $request) {

    	// This is good example how to fetch and combine models from multiple tables based on relationships!

    	$nodeIP = $request->input('me');

    	if (!$nodeIP) {
    		return response('Node IP address missing', 402);
    	}

    	$now = time(); // Change to something more sensible for production
    	$timestamp = $now + env('SECONDS_OFFSET_TO_FETCH');

    	// This Laravel-side of the system is pretty simple so we don't 
    	// need any abstraction / service layers. Just query database from here.

    	// Could, even should, probably do this inside transaction too
        $randStr = $this->getRandomCode();
    	Tournament::where('startsAt', '>', $now)
    		->where('startsAt', '<=', $timestamp)
    		->where('isAllocated', false)
    		->update(['isAllocated' => true, 'allocatedToServer' => $nodeIP, 'allocationCode' => $randStr]);

    	// Next fetch them again

    	$tournaments = Tournament::where('startsAt', '>', $now)
    		->where('startsAt', '<=', $timestamp)
            ->where('allocationCode', $randStr)
    		->where('allocatedToServer', $nodeIP)
    		->with('questions')
    		->get();

    	foreach ($tournaments as $tournament) {
    		// We need to fetch questions as well
    		// this may be bit heavy to DB ... we are querying inside for-loop after all
    		// Optimize later if needed
    		$questions = Question::where('tournament_id', $tournament->id)->get();
    		$questions = $tournament->questions()->get();

    	}

    	//$jsonTournaments = $tournaments->toJson();

    	return response()->json($tournaments);
    		
    }

    public function saveTournamentInfo(Request $request) {
        $info = $request->input('info');
        $id = $info['originalID'];
        $name = $info['name'];
        $description = $info['description'];
        if (array_key_exists('finalStandings', $info)) {
            $standings = $info['finalStandings'];
            $winner = $standings[0]['name'];
        } else {
            $standings = [];
            $winner = null;
        }

        $done = new DoneTournament;
        $done->name = $name;
        $done->description = $description;
        $done->tournament_id = $id;
        $done->standings = json_encode($standings);
        $done->winner = $winner;

        $done->save();

        return response(count($standings), 200);

    }

    public function userCount(Request $request) {
        $uc = $request->input('usercount');
        $serverkey = $request->input('serverkey');
        $u = new UserCount;
        $u->usercount = $uc;
        $u->serverkey = $serverkey;
        $u->save();

        return response('User count saved', 200);
    }
}
