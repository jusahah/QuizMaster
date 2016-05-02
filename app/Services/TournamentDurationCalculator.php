<?php

// FOR FUCKING EACH OWN CLASS YOU MUST ADD NAMESPACE!!
namespace App\Services;

class TournamentDurationCalculator {
	
	public function calculateDuration($questionsNum, $timeToAnswer, $timeBetweenQuestions) {
		// Returns as seconds!
		return round($questionsNum * $timeToAnswer + $questionsNum * $timeBetweenQuestions);
	}
}