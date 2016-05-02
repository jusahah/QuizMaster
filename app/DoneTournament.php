<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoneTournament extends Model
{
    //

    protected $table = 'donetournaments';

    public function tournament() {
    	return $this->belongsTo('App\Tournament');
    }    

    public function getStandingsArray() {
    	$standingsString = $this->standings;
    	$standings = json_decode($standingsString, true);
        $sliced = false;

    	// If no players and nothing, fake empty array so we don't crash the frontside
    	if (count($standings) == 0) {
    		$standings = [];
    	} else if (count($standings) > 10) {
            $standings = array_slice($standings, 0, 10);
            $sliced = true;
        }
    	return array('standings' => $standings, 'sliced' => $sliced);
    }

    public function getFullStandingsArray() {
        $standingsString = $this->standings;
        $standings = json_decode($standingsString, true);

        return $standings;        
    }

    public function getSinceEndingString() {
    	// How much time has gone since tourney ended
    	$endedAt = $this->created_at->diffInMinutes(\Carbon\Carbon::now());
    	if ($endedAt > 59) {
    		if($endedAt > (24 * 60)) {
    			return floor($endedAt / (24*60)) . " päivää" . (floor($endedAt % (24*60)) == 1 ? "" : "a");
    		} 

    		return floor($endedAt / 60) . " tunti" . (floor($endedAt / 60) == 1 ? "" : "a");
    	}
    	return $endedAt . " minuutti" . ($endedAt == 1 ? "" : "a");
    }

    public function participantsNum() {
        $standingsString = $this->standings;
        $standings = json_decode($standingsString, true);

        return count($standings);    	
    }
}
