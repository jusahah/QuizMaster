<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tournament;
use App\TournamentImport;
use App\Question;


class AdminController extends Controller
{
	 public function __construct(TournamentImport $ti)
    {
        $this->ti = $ti;
    }

    //
    // GET ROUTE
    public function showCreate(Request $request) {
    	return view('main/admin/createtournament');
    } 
    // POST ROUTE
    public function create(Request $request) {


    	if (!$request->hasFile('questionsfile')) {
    		echo "NO INPUT FILE";
    		return 0;
    	}

	    $file = $request->file('questionsfile');
	    $questionsArr = $this->getQuestionsOutOfFile($file);

	    if (count($questionsArr) > 50) {
	    	// Thats too many questions
	    	// Flash to session here
	    	echo "Too many questions";
	    	return;
	    	return back()->withInput();
	    }

    	// Validate first
	    $validator = \Validator::make($request->all(), [
	        'name' => 'required|string|max:128',
	        'description' => 'required|string|max:1024',
	        'startsAt' => 'required|date',
	        'timeToAnswer' => 'required|integer|min:3|max:30',
	        'timeBetweenQuestions' => 'required|integer|min:3|max:30'
	    ]);   

	    if ($validator->fails()) {
	    	echo "FAIL";
	    	return;
	    	return back()->withErrors($validator)->withInput();
	    } 	


    	$fields = $request->all();
    	$fields['maxPlayers'] = env('MAX_PLAYERS');
    	$fields['startsAt'] = strtotime($fields['startsAt']);
    	unset($fields['questionsfile']);

    	// Tournament is okay, next lets try to check the questions more closely


    	$t = Tournament::create($fields);
    	// 
    	$tid = $t->id;
    	$this->saveQuestions($tid, $questionsArr);

    	return redirect()->route('tournamentinfo', ['tid' => $tid]);


    }

    public function getQuestionsOutOfFile($file) {

    	$rows = \Excel::load($file, function($reader) {

    	})->get();

    	return $rows->toArray();


    }

    protected function saveQuestions($tid, $questions) {
    	foreach ($questions as $key => $question) {
    		$question['tournament_id'] = $tid;
    		$question['numofchoices']  = 4;

    		// We'll do this in a loop, yes.
    		// We use SSD so its good
    		try {
    			$qObj = Question::create($question);
    		}catch(Exception $e){
    			1; // No op
    		}
    		

    	}
    }

}
