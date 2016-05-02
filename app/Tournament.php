<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    //
    protected $table = 'tournaments';
    protected $guarded = [];

    public function questions() {
    	return $this->hasMany('App\Question');
    }

    public function donetournament() {
    	return $this->hasOne('App\DoneTournament');
    }

    public function registrationOpenYet() {
        $allocatedToServer = $this->allocatedToServer;
        return $allocatedToServer && trim($allocatedToServer) !== '';
    }

    public function startsAtBeautified() {
    	$starts = $this->startsAt;
    	return date('d.m.Y', $starts) . ", klo " . date('H:i', $starts);
    }

    public function questionsNum() {
    	return count($this->questions);
    }
    public function estimatedLengthSecs() {
    	$tdc = \App::make('TournamentDurationCalculator');
    	// Return as seconds!
    	return $tdc->calculateDuration($this->questionsNum(), $this->timeToAnswer, $this->timeBetweenQuestions);
    }
    public function estimatedLengthString() {
    	$secs = $this->estimatedLengthSecs();
    	if ($secs>59) {
    		$mins = floor($secs / 60);
    	} else {
    		return "Alle 1 minuutti";
    	}

    	return $mins . " minuuttia";
    }
    public function howLongTillStarts() {
    	$now = time();
    	$secs = $this->startsAt - $now;
    	if ($secs>59) {
    		$mins = floor($secs / 60);
    	} else {
    		return "Alle 1 minuutti!";
    	}

        if ($mins > 59) {
            $hours = floor($mins / 60);
            $mins = $mins % 60;
            if ($hours > 47) {
                $days = floor($hours / 24);
                return $days . " päivää";
            }
            if ($hours == 1) return '1 tunti';
            return $hours . " tuntia, " . $mins . " min";
        } else if ($mins == 1) {
            return $mins . " minuutti";
        }

    	return $mins . " minuuttia";    	
    }


}
