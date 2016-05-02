<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //
	public function showGuide() {
		return view('main/guide')->with('title', 'Ohjeet');

	}
	public function showContact() {
		return view('main/contact')->with('title', 'Yhteydenotto');
	}
	public function showCooperation() {
		return view('main/cooperation')->with('title', 'Yhteistyö');
	}
}
