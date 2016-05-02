<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pelaa Tietovisa!</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		
		
		<!-- Font awesome CSS -->
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="css/style-ie.css" />
		<![endif]-->
            
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
		<style> 
		.connectionlost {
			width: 290px;
			font-size: 18px;
			margin: auto;
			margin-top: 16px;
			text-align: center;
		}
		.widget-hidden {
			display: none;
		}
		@media (max-width: 600px) {
			.answerB {
				width: 90%;
				height: 40px;
				margin-left: 6px;
				margin-right: 6px;
				margin-top: 6px;
				font-size: 16px;
				font-weight: bold;
			}			
		}
		@media (min-width: 600px) {
			.answerB {
				width: 45%;
				height: 40px;
				margin-left: 6px;
				margin-right: 6px;
				margin-top: 6px;
				font-size: 16px;
				font-weight: bold;
			}
		}


		</style>
	</head>
	
	<body>

                        
                              
	
         
      <div class="out-container">
         
		 <div class="login-page" style="display: block;">
			<div class="container">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-justified" id="loginText">
				  <li class="active"><a href="#login" data-toggle="tab"> Syötä haluamasi pelaajanimi</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				<div class="tab-pane fade active in"  id="jsDisabled">

				 <div class="alert alert-warning" style="text-align: center;"> <h4>Javascript-tuki puuttuu!</h4></div>
				  </div>
				  <div class="tab-pane fade active in" id="login" style="display: none;">
				  
	
				  
					<!-- Login form -->
					
					<form role="form" id="usernameform">
					  <div class="form-group">
						<label for="email">Nimi </label>
						<input type="text" class="form-control" id="visamestari_username" placeholder="Pelaajanimesi (max. 24 merkkiä)">
					  </div>
					  <button type="submit" class="btn btn-danger btn-sm">Osallistu</button>
					</form>
					
				  </div>
				  
				  

				</div>
				
			</div>
		 </div>

	<!--<div id="playArea" data-tournament="2" data-allocationcode="222" data-allocatedtoserver="localhost:8079" style="display: block; height: 640px;">	-->
		  <div id="playArea" data-tournament="{{$tid}}" data-allocationcode="{{$allocationCode}}" data-allocatedtoserver="{{$allocatedToServer}}" style="display: block;">	
		 
		 	<!-- All playing action happens here!! -->
		 <!-- Lock block -->
		 		 <!-- Error page -->
		 		 <h3 id="tournamentname" style="text-align: center; margin: 0px; color: white; background-color: #2466A0; padding: 4px; display: block; width: 100%; position: absolute; left: 0px; top: 0px;">{{$name}}</h3>
		

		<!-- PREPARE NEXT QUESTION AREA --> 		 
		<div class="error-page text-center" data-stateview='preparingNextQuestion' id="preparingNextQuestion" style="display: none; height: 630px; width: 90%; min-width: 280px; position: relative; margin: auto; margin-top: 10px;">
		 		<div class="sidebar-chart" style="position: absolute; top: -60px; right: 24px;">
                     <!-- Buttons -->
      
                     <div class="row">
   
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <!-- Content -->
                           <h5 id="questionsleft">Kysymys --/--</h5>
                           <p id="yourlast10"></p>
                        </div>
                     </div>
                  </div>                  
		 	<div style="height: 60px; width: 100%; position: absolute; top: 0px; left: 0px;">
				
			</div>
		<hr style="visibility: hidden;">
		 	<div class="lock-block" data-stateview='preparingNextQuestion2' id="preparingNextQuestion2" style="width: 100%; margin-top: 20px; margin: 0px; max-width: 100%; background-color: #C22234;">
				<div class="inner-lock-block2" style="width: 100%; padding: 6px; padding-bottom: 12px;">
					<div class="container">

						
						<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="widget" style="background-color: red;">
                           <div class="widget-head" style="background-color: #303030; border-color: #303030; color: white;">
                              <h5 style="color: white;">Sijoitukset tällä hetkellä</h5>
                           </div>
                           <div class="widget-body no-padd">
								<div class="table-responsive">
								  <table class="table table-hover table-bordered page-head">
								   <thead>
									 <tr>
									   <th>#</th>
									   <th>Nimi</th>
									   <th>Pisteet</th>
									 <!-- <th>Muutos</th> -->

									 </tr>
								   </thead>
								   <tbody id="standingsbody">
								   <!--
									 <tr>
									   <td>1</td>
									   <td>Ashok</td>
									   <td>India</td>
									   <td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>
									 
									 </tr>
									 <tr>
									   <td>2</td>
									   <td>Kumarasamy</td>
									   <td>USA</td>
									   <td>2 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>
						
									 </tr>
									 <tr>
									   <td>3</td>
									   <td>Babura</td>
									   <td>UK</td>
									   <td>7 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>
							
									 </tr>
									 <tr>
									   <td>4</td>
									   <td>Ravi Kumar</td>
									   <td>China</td>
						
									   <td>1 <span class="ph-status"><i class="fa fa-chevron-down ph-red"></i></span></td>
									 </tr>
									 <tr class='success'>
									   <td>5</td>
									   <td>Santhosh</td>
									   <td>Japan</td>
									   <td>4 <span class="ph-status"><span class="ph-status"><i class="fa fa-chevron-down ph-red"></i></span></td>
									 
									 </tr> 
									 <tr>
									   <td>6</td>
									   <td>Santhosh</td>
									   <td>Japan</td>
									   <td>4 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>
									 
									 </tr>  
									 									 <tr>
									   <td>7</td>
									   <td>Santhosh</td>
									   <td>Japan</td>
									   <td>3 <span class="ph-status"><i class="fa fa-chevron-down ph-red"></i></span></td>
									 
									 </tr>  
									 									 <tr>
									   <td>8</td>
									   <td>Santhosh</td>
									   <td>Japan</td>
									   <td>2 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>
									 
									 </tr>  
									 									 <tr>
									   <td>9</td>
									   <td>Santhosh</td>
									   <td>Japan</td>
									   <td>6 <span class="ph-status"><i class="fa fa-chevron-down ph-red"></i</i>></td>
									 
									 </tr>  
									 -->									                                                                        
								   </tbody>
								 </table>
                             
                             </div>
                           </div>
						   <div class="widget-foot">
							
                              <p><span id="nextQuestionText" style="font-weight: bold;">Valmistaudu ensimmäiseen kysymykseen </span><span id="nextQuestionTimer"></span></p>
                               <div class="clearfix"></div>
						   </div>
						   
                        </div>
						</div>
						</div>
						<div class="row">
						</div>
						
					</div>
				</div>
			 </div>

		 </div>




		 <!-- TOURNAMENT ENDED -->
		 <div class="error-page text-center" data-stateview='tournamentEnded' id="tournamentEnded" style="height: 630px; width: 90%; min-width: 280px; position: relative; margin: auto; margin-top: 10px; display: none;">

                  
		 	<div style="height: 60px; width: 100%; position: absolute; top: 0px; left: 0px;">
				
			</div>
			<h1 style="color: white; margin: 12px; margin-top: 60px; font-size: 24px;">Turnaus on päättynyt!</h1>
			<p style="color: white; margin: 12px;">Voit nyt sulkea tämän selainikkunan tai navigoida turnaustuloksiin</p>
			<p id="resultsLink">...luodaan linkkiä...</p>


		 </div>



		 <!-- WAITING FOR ANSWERS -->
		 <div class="error-page text-center" data-stateview='waitingForAnswers' id="waitingForAnswers" style="height: 630px; width: 90%; min-width: 280px; position: relative; margin: auto; margin-top: 10px; display: none;">
		 		<div class="sidebar-chart" style="position: absolute; top: -60px; right: 24px;">
                     <!-- Buttons -->
      
                     <div class="row">
   
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <!-- Content -->
                           <h5 id="questionsLeft2">Kysymys --/--</h5>
                           <p id="answerResult2">------</p>
                        </div>
                     </div>
                  </div> 
                  
		 	<div style="height: 60px; width: 100%; position: absolute; top: 0px; left: 0px;">
				
			</div>
			<h1 id="questiontext" style="color: white; margin: 12px; margin-top: 60px; font-size: 24px;">Kuka tunnettu jalkapalloilija valittiin Vuoden Urheilijaksi v. 2012?</h1>
	
		 	<div class="lock-block" style="width: 100%; margin-top: 20px; margin: 0px; max-width: 100%; background-color: #C22234;">
				<div class="inner-lock-block2" style="background-color: #303030; width: 100%; padding: 6px; padding-bottom: 12px;">
					<div class="container">

						
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<button id="choice1" data-choice="a" class="btn btn-primary answerB" style="backgrodund-color: #C22234;">Jari Litmanen</button>
								<button id="choice2" data-choice="b" class="btn btn-warning answerB" style="backgrodund-color: #C22234;">Sami Hyypiä</button>
								<button id="choice3" data-choice="c" class="btn btn-danger answerB" style="backgrodund-color: #C22234; font-size: 16px;">Jussi-Jaakko Jääskeläinen</button>
								<button id="choice4" data-choice="d" class="btn btn-info answerB" style="backgrodund-color: #C22234;">Teemu Selänne</button>
							</div>
						</div>


						
					</div>
				</div>
				<div class="row" style="margin-top: 16px;">
							<h1 style="width: 120px margin: auto; text-align: center;"><span id="timeLeftToAnswer" class="label label-success" style="width: 120px;">--- sek
							</span></h1>
						</div>
						<div id="answerevalrow" class="row" style="position: absolute; left: 15px; bottom: 0px; width: 100%;">
							<div class="alert alert-default"><span id="answereval" class="label label-success" style="width: 100%; height: 30px; font-size: 20px; display: block;">---</span></div>

						</div>
			 </div>

		 </div>

		 <!-- WAITING FOR START -->
		 <div class="error-page text-center" data-stateview='waitingForStart' id="waitingForStart" style="height: 630px; width: 90%; min-width: 280px; position: relative; margin: auto; margin-top: 10px; display: none;">

                  
		 	<div style="height: 60px; width: 100%; position: absolute; top: 0px; left: 0px;">
				
			</div>
	
		 	<div class="lock-block" style="width: 100%; margin-top: 20px; margin: 0px; max-width: 100%; background-color: #C22234;">
				<div class="inner-lock-block2" style="background-color: #303030; width: 100%; padding: 6px; padding-bottom: 12px;">
					<div class="container">

						
						<div class="row">
							<h3 style="color: white; font-size: 18px;">Turnaus alkaa pian</h3>
							<h3 id="startcountdown" style="color: white; font-size: 14px;">---</h3>
						</div>
						<hr>
						<div class="row">
						<h3 style="color: white; font-size: 14px;">Osallistujien lukumäärä</h3>
						<h1><span class='btn btn-primary' id="participatingCount">---</span></h1>


						
					</div>
				</div>

			 </div>

		 </div>



		 </div>
		 
      </div>
		
      
	  <!-- Javascript files -->
	  <!-- jQuery -->
	  <script src="{{asset('js/jquery.js')}}"></script>
	  <!-- Bootstrap JS -->
	  <script src="{{asset('js/bootstrap.min.js')}}"></script>
	  <!-- Respond JS for IE8 -->
	  <script src="{{asset('js/respond.min.js')}}"></script>
	  	  <!-- jQuery Knob -->
	  <script src="{{asset('js/jquery.rateit.min.js')}}"></script>
	  <!-- HTML5 Support for IE -->
	  <script src="{{asset('js/html5shiv.js')}}"></script>
	  <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>

	  <script>
	  var LARAVEL_ADDR = "{{url('/')}}";
	  // Javascript works so show correct panels
	  jQuery('#jsDisabled').hide();
	  jQuery('#login').show();

	  var visamestari_socket;
	  var socketConnected = false;

	  var serverAddress;
	  var allocationCode;
	  var tournamentID;
	  var pendingUserNameRequest = false;
	  var initDone = false;

	  var answerResults = [];

	  // When dom ready
	  jQuery(function() {
	  	// Gather relevant info
	  	var playArea = jQuery('#playArea');
	  	serverAddress = playArea.attr('data-allocatedtoserver');
	  	allocationCode = playArea.attr('data-allocationcode');
	  	tournamentID   = playArea.attr('data-tournament');

	  	if (!validateServerParams(serverAddress, allocationCode, tournamentID)) {
	  		alert("Application error: Invalid information! Contact administrator.");
	  		console.error('Application failed to start - missing or invalid server parameters');
	  		// Bail out before starting any sockets
	  		return;

	  	}

	  	console.log("DOM READY");
	  	waitForUserNameFirst();
	  	visamestari_socket = io('http://' + serverAddress, {
		    reconnection: false
		});
	  	visamestari_socket.on('provideInfo', function() {
	  		console.log("PROVIDE INFO FROM SERVER");
	  		socketConnected = true;
	  	});
	  	visamestari_socket.on('youfail', function(msg) {
	  		if (initDone) return; // Should never happen
	  		pendingUserNameRequest = false;
	  		var reason = msg.reason
	  		alert("Osallistuminen epäonnistui! Syy: " + reason);
	  	});
	  	visamestari_socket.on('joinedtotournament', function(msg) {
	  		console.warn("JOIN SUCCESS MSG")
	  		console.log(msg);
	  		if (initDone) return; // Should never happen
	  		initDone = true;
	  		launchApp(msg.username, msg.info);
	  	});

	  	visamestari_socket.on('disconnect', function() {
	  		console.warn("SOCKET DISCONNECT");
	  		connectionLostEndApp();
	  	});

	  	visamestari_socket.on('connect_error', function() {
	  		console.warn("NO INITIAL SOCKET CONN");
	  		noInitialConnectionEven();
	  	});


	  	//launchApp();


	  });

	function disconnectedFromServer() {
		jQuery('body').empty().append("<div class='alert alert-danger connectionlost'>Yhteys menetetty. Tietovisa on osaltasi päättynyt.</div>");
	}

	function noInitialConnectionEven() {
		jQuery('body').empty().append("<div class='alert alert-danger connectionlost'><strong>Ei yhteyttä palvelimeen.</strong><hr> Tarkista internet-yhteytesi. Päivitä sivu kokeillaksesi yhteydenottoa uudelleen.</div>");
	}

	  function validateServerParams(serverAddress, allocationCode, tournamentID) {
	  	// For now just check each is set
	  	var addrOk = serverAddress && serverAddress.trim() !== '';
	  	var allOk  = allocationCode && allocationCode.trim() !== '';
	  	var tourOk = tournamentID && tournamentID.trim() !== '';

	  	return addrOk && allOk && tourOk;
	  }

	  function submitUserNameToServer(username) {
	  	console.log("Submitting username to server...: " + username);
	  	if (socketConnected) {
	  		console.log(initDone + " ja " + pendingUserNameRequest);
	  		if (initDone || pendingUserNameRequest) return false; // No two reqs at the same time
	  		// we can send
	  		console.log("EMITTING MSG: " );
	  		console.log({tid: tournamentID, name: username});
	  		visamestari_socket.emit('TidAndName', {tid: tournamentID, name: username});
	  		pendingUserNameRequest = true;
	  	}

	  }

	  function waitForUserNameFirst() {

	  	jQuery('#usernameform').on('submit', function(e) {
	  		e.preventDefault();
	  		console.log("User name submit");
	  		var username = jQuery("#visamestari_username").val();
	  		if (quickValidate(username)) {
	  			// Great - lets try validate it on the server too
	  			submitUserNameToServer(username);
	  			
	  		}
	  	})
	  }

	  function quickValidate(name) {
	  	return name.length > 0 && name.length < 25;
	  }

	  function connectionLostEndApp() {
	  	//alert('Yhteys palvelimeen kadotettu! Tietovisa on osaltasi ohi.');
	  	if (visamestari_socket) visamestari_socket.disconnect();
	  	jQuery('body').empty().append("<div class='alert alert-danger connectionlost'><strong>Yhteys menetetty.</strong> <hr>Jotain meni vikaan. Pahoittelemme tapahtunutta. Tietovisa on osaltasi päättynyt.</div>");
	  }

	  function handleAnswerEvaluation(isCorrect) {
	  	answerResults.push(isCorrect);
	  }


	  // Application portion of code!



	  var viewHandler;
	  var commandHandler;
	  function launchApp(username, tournamentInfo) {

	  	console.log("------Launching app----------");

	  	jQuery('#login').hide();
	  	jQuery('#loginText').hide();
	  	jQuery('#playArea').show();

	  	commandHandler = new CommandReceiver();
	  	viewHandler = new ViewHandler(commandHandler);
	  	
	  	viewHandler.setStaticInfoStuff(tournamentInfo);
	  	viewHandler.startCountdown(tournamentInfo.startsAt);

	  	viewHandler.changeToState('waitingForStart');

	  	// Bind rest of the listeners to socket
	  	visamestari_socket.on('fromServer', function(msg) {
	  		console.log("------------");
	  		console.log(msg);
	  		console.log("------------");
	  		if (msg.tag === 'stateChange') {
		  		var statename = msg.state;
		  		var data = msg.data; // At least prepareNextQuestion contains data (= time to next question)
		  		if (statename === 'preparingNextQuestion') {
		  			setTimeout(function() {
		  				viewHandler.changeToState(statename, data); // Handles rest of the stuff	
		  			}, 500);
		  		} else {
		  			 viewHandler.changeToState(statename); // Handles rest of the stuff	
		  		}
		  		 			
	  		} else if (msg.tag === 'newQuestion') {
	  			console.error("NEW QUESTION IN: " + msg.data);
	  			viewHandler.newQuestion(msg.data);
	  		} else if (msg.tag === 'newStandings') {
	  			console.log("NEW STANDINGS IN");
	  			console.log(msg.data);
	  			viewHandler.renderStandings(msg.data);
	  		} else if (msg.tag === 'answerEvaluated') {
	  			console.log("ANSWER EVAL BACK FROM SERVER");
	  			handleAnswerEvaluation(msg.data);
	  			viewHandler.showAnswerEvaluation(msg.data);
	  		} else if (msg.tag === 'tournamentStarts') {
	  			viewHandler.showInitialUserlist(msg.data);
	  		} else if (msg.tag === 'tournamentEnded') {
	  			viewHandler.showResultsLink(msg.originalID);
	  		} else if (msg.tag === 'registeredNum') {
	  			viewHandler.changeRegisteredNum(msg.data);
	  		}

	  	});

	  	visamestari_socket.on('disconnect', function() {
	  		//connectionLostEndApp();
	  	})



	  }


	  function ViewHandler(commandHandler) {

	  	this.uis = {
	  		'waitingForStart' : new WaitingForStartUI(commandHandler),
	  		'preparingNextQuestion' : new PreparingNextQuestionUI(commandHandler),
	  		'waitingForAnswers': new WaitingForAnswersUI(commandHandler),
	  		'tournamentEnded': new TournamentEndedUI(commandHandler)
	  	};

	  	this.topBar = jQuery('#tournamentTopBar');

	  	this.totalQuestionsNum;
	  	this.questionsGone = 0;

	  	this.stateViews = [
	  		'waitingForStart',
	  		'preparingNextQuestion',
	  		'waitingForAnswers',
	  		'tournamentEnded'
	  	];

	  	this.currentState;

	  	this.init = function() {
	  		// Check all jQuery views were found
	  		// Or dont check - its choice time
	  	}

	  	this.changeRegisteredNum = function(newNum) {
	  		this.uis.waitingForStart.registeredNumChange(newNum);
	  	}

	  	this.showResultsLink = function(originalID) {
	  		this.uis.tournamentEnded.showLink(originalID);
	  	}

	  	this.showAnswerEvaluation = function(isCorrect) {
	  		this.uis.waitingForAnswers.showAnswerEvaluation(isCorrect);
	  	}

	  	this.showInitialUserlist = function(userlist) {
	  		this.uis.preparingNextQuestion.renderInitialView(userlist);
	  	}

	  	this.renderStandings = function(standings) {
	  		if (standings.hasOwnProperty('top5')) {
	  			// Divided to two
	  			this.uis.preparingNextQuestion.renderMultiView(standings.top5, standings.neighbours, standings.yourRank)
	  		} else {
	  			// Get ranks straight from object
	  			this.uis.preparingNextQuestion.renderSingleView(standings);
	  		}
	  	}

	  	this.newQuestion = function(questionData) {
	  		var question = questionData.question;
	  		var choices  = questionData.choices;
	  		var timeToA  = questionData.timeToAnswer;

	  		this.uis.waitingForAnswers.showQuestion(question, choices, timeToA, this.questionsGone);
	  	}


	  	this.startCountdown = function(timeStampOfStart) {
	  		console.warn("SETTING TIMESTAMP COUNTER: " + timeStampOfStart);
	  		this.uis.waitingForStart.startCountdown(timeStampOfStart);
	  	}

	  	this.setStaticInfoStuff = function(info) {
	  		console.log(info);
	  		jQuery('#tournamentname').empty().append(info.name);
	  		this.totalQuestionsNum = info.questionsNum;
	  		this.setLeftQuestions(info.questionsNum);
	  		//this.questionsGone++;
	  	}

	  	this.setLeftQuestions = function(amountLeft) {
	  		jQuery('#questionsleft').empty().append(
	  			amountLeft + "/" + this.totalQuestionsNum + " kysymystä jäljellä"
	  		);
	  		jQuery('#questionsleft2').empty().append(
	  			amountLeft + "/" + this.totalQuestionsNum + " kysymystä jäljellä"
	  		);	  		
	  	}

	  	this.changeToState = function(name, data) {

	  		if (this.stateViews.indexOf(name) !== -1) {


	  			// Valid state
	  			for (var i = this.stateViews.length-1; i >= 0; i--) {
	  				var viewname = this.stateViews[i];
	  				jQuery('#' + viewname).hide();
	  				this.uis[viewname].deactivate();
	  			};

	  			jQuery('#' + name).show();
	  			this.uis[name].activate(data);
	  			this.currentState = name;

	  			if (name === 'waitingForAnswers') {
	  				// New question in
	  				// This is bit hacky but what the hell
	  				this.questionsGone++;
	  				this.setLeftQuestions(this.totalQuestionsNum - this.questionsGone);

	  			}

	  		} else {
	  			console.error('State name not recognized: ' + name);
	  		}
	  	}

	  	this.isState = function(name) {
	  		return this.currentState === name;
	  	}

	  }





	  // UI module implementations
	  function PreparingNextQuestionUI(commandHandler) {
	  	this.element = jQuery('#preparingNextQuestion');
	  	this.deactivated = true;

	  	this.tournamentStarts;
	  	this.intervalHandle;
	  	this.nextQuestionHandle;

	  	this.getInitialView = function(users) {

	  	}

		this.getSingleView = function(standings, ownRank) {
			var html = "";
			var rank = 1;
			if (standings.hasOwnProperty('1')) {
				if (ownRank == rank) html += "<tr class='info'>";
				else html += "<tr>";
				html += "<td>" + (rank++) + "</td>";
				html += "<td>" + standings['1'].name + "</td>";
				html += "<td>" + standings['1'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('2')) {
				if (ownRank == rank) html += "<tr class='info'>";
				else html += "<tr>";
				html += "<td>" + (rank++) + "</td>";
				html += "<td>" + standings['2'].name + "</td>";
				html += "<td>" + standings['2'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('3')) {
				if (ownRank == rank) html += "<tr class='info'>";
				else html += "<tr>";
				html += "<td>" + (rank++) + "</td>";
				html += "<td>" + standings['3'].name + "</td>";
				html += "<td>" + standings['3'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('4')) {
				if (ownRank == rank) html += "<tr class='info'>";
				else html += "<tr>";
				html += "<td>" + (rank++) + "</td>";
				html += "<td>" + standings['4'].name + "</td>";
				html += "<td>" + standings['4'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('5')) {
				if (ownRank == rank) html += "<tr class='info'>";
				else html += "<tr>";
				html += "<td>" + (rank++) + "</td>";
				html += "<td>" + standings['5'].name + "</td>";
				html += "<td>" + standings['5'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}	
			return html;	

		}

		this.getNeighboursView = function(standings, ownRank) {
			var html = "";
			if (standings.hasOwnProperty('0')) {
				html += "<tr>";
				html += "<td>" + (ownRank-2) +"</td>";
				html += "<td>" + standings['0'].name + "</td>";				
				html += "<td>" + standings['0'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('1')) {
				html += "<tr>";
				html += "<td>" + (ownRank-1)+ "</td>";
				html += "<td>" + standings['1'].name + "</td>";				
				html += "<td>" + standings['1'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('2')) {
				html += "<tr class='info'>";
				html += "<td>" + ownRank + "</td>";
				html += "<td>" + standings['2'].name + "</td>";				
				html += "<td>" + standings['2'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('3')) {
				html += "<tr>";
				html += "<td>" + (ownRank+1) + "</td>";
				html += "<td>" + standings['3'].name + "</td>";	
				html += "<td>" + standings['3'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';				
				html += "</tr>"				

			}
			if (standings.hasOwnProperty('4')) {
				html += "<tr>";
				html += "<td>" + (ownRank+2) + "</td>";
				html += "<td>" + standings['4'].name + "</td>";	
				html += "<td>" + standings['4'].points + "</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';
				html += "</tr>"				
			}	
			return html;				

		}

		this.renderInitialView = function(users) {
			var html = "";
			console.log("RENDER INITIAL USERS VIEW");
			console.log(users);
			var limit = 8;
			for (var i = 0, j = users.length; i < j; i++) {
				html += "<tr>";
				html += "<td>" + (i+1) + "</td>";
				html += "<td>" + users[i] + "</td>";	
				html += "<td>0</td>";
				//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';
				html += "</tr>"	
				if (i > limit) {
					html += "<tr>";
					html += "<td></td>";
					html += "<td>...</td>";	
					html += "<td></td>";
					//html += '<td>12 <span class="ph-status"><i class="fa fa-chevron-up ph-green"></i></span></td>';
					html += "</tr>"	
					break;					

				}
			};
			this.element.find('#standingsbody').empty().append(html);

		}

	  	this.renderSingleView = function(standings) {
	  		// Object has five properties from 1 to 5
							
	  		var html = this.getSingleView(standings);
			this.element.find('#standingsbody').empty().append(html);
	  	}

	  	this.renderMultiView = function(top5, neighbours, ownRank) {

	  		var htmlTop5 = this.getSingleView(top5, ownRank);
	  		var htmlNeighbours = this.getNeighboursView(neighbours, ownRank);
			var separator = "<tr><td>...</td><td></td><td></td></tr>";

			this.element.find('#standingsbody').empty().append(htmlTop5 + separator + htmlNeighbours);
	  	}

	  	this.startNextQuestionTimer = function(timeToNextQuestion) {
	  		console.warn("START NEXT QUESTION TIMER: " + timeToNextQuestion);
	  		var nqt = this.element.find('#nextQuestionTimer');
	  		if (!timeToNextQuestion) {
	  			nqt.empty().append("--- sekuntia");
	  			return;
	  		}
	  		
	  		nqt.empty().append(Math.floor(timeToNextQuestion/1000) + " sekuntia");
	  		this.nextQuestionHandle = setInterval(function() {
	  			timeToNextQuestion -= 1000;
	  			console.log("TIME UNTIL NEXT QUESTION: " + timeToNextQuestion);
	  			if (timeToNextQuestion < 0) timeToNextQuestion = 0;
	  			nqt.empty().append(Math.floor(timeToNextQuestion/1000) + " sekuntia");
	  		}.bind(this), 1000);

	  	}

	  	this.activate = function(timeToNextQuestion) {
	  		console.log("ACTIVATE PREPARE NEXT QUESTION VIEW");
	  		console.log(timeToNextQuestion);
	  		this.startNextQuestionTimer(timeToNextQuestion);
	  		this.deactivated = false;
	  	}

	  	this.deactivate = function() {
	  		this.element.find('#nextQuestionText').empty().append('Seuraava kierros alkaa: ');
	  		if (this.nextQuestionHandle) {
	  			clearInterval(this.nextQuestionHandle);
	  			this.nextQuestionHandle = null;
	  		}
	  		this.deactivated = true;
	  	}	  	
	  }
	  function WaitingForStartUI(commandHandler) {
	  	this.element = jQuery('#waitingForStart');
	  	this.deactivated = true;

	  	this.activate = function() {
	  		this.deactivated = false;
	  	}

	  	this.deactivate = function() {
	  		this.deactivated = true;
	  	}

	  	this.startCountdown = function(tournamentStarts) {
	  		this.tournamentStarts = tournamentStarts;

	  		this.intervalHandle = setInterval(function() {
	  			var timeString = this.beautifyTimeString(this.tournamentStarts - Date.now());
	  			jQuery('#startcountdown').empty().append(timeString);
	  		}.bind(this), 1000);

	  	}

	  	this.registeredNumChange = function(newNum) {
	  		this.element.find('#participatingCount').empty().append(newNum);
	  	}

	  	this.beautifyTimeString = function(millisecs) {

	  		var secs = Math.round(millisecs / 1000);
	  		var mins = Math.floor(secs / 60);
	  		var leftOverSecs = secs % 60;

	  		return mins + " minuuttia, " + leftOverSecs + " sekuntia alkuun";


	  	}
	  }
	  function WaitingForAnswersUI(commandHandler) {
	  	this.element = jQuery('#waitingForAnswers');

	  	this.deactivated = true;
	  	this.answeringEnabled = false;

	  	this.countdownInterval;

	  	this.initListeners = function() {

	  		this.element.find('.answerB').on('click', function(e) {
	  			console.log("ANSWER B CLICK");
	  			console.log(e.target);
	  			if (this.deactivated || !this.answeringEnabled) return false;
	  			var button = jQuery(e.target);
	  			var choice = button.attr('data-choice');
	  			if (commandHandler.userAction('answer', choice)) {
	  				// Answer was accepts by command handler
	  				this.disableAnswering();
	  			}
	  		}.bind(this));

	  	}

	  	this.showAnswerEvaluation = function(isCorrect) {
	  		console.warn("TOGGLING ANSWER EVAL LIGHTS");
	  		this.stopClock();
	  		var el = this.element.find('#answereval');
	  		var el2 = this.element.find('#answerResult2');
	  		if (isCorrect) {
	  			el.removeClass('label-danger').addClass('label-success'); // Reset to hide for next round	
	  			el.empty().append('Oikein!');
	  			el2.empty().append('<span class="btn btn-success btn-xs">Oikein</span>');	  			
	  		} else {
	  			el.removeClass('label-success').addClass('label-danger'); // Reset to hide for next round		 
	  			el.empty().append('Väärin!'); 			
	  			el2.empty().append('<span class="btn btn-danger btn-xs">Väärin</span>');	  			

	  		}
	  		
	  		this.element.find('#answerevalrow').show(); // Reset to hide for next round
  		
	  	}

		this.stopClock = function() {
		  	if (this.countdownInterval) {
	  			clearInterval(this.countdownInterval);
	  			this.countdownInterval = null;
	  		}
		}

	  	this.activate = function() {
	  		// Wait a sec so user does not accidentally click on live answer button
	  		this.deactivated = false;
	  		setTimeout(this.enableAnswering.bind(this), 350);
	  	}

	  	this.deactivate = function() {
	  		this.deactivated = true;
	  		this.element.find('#answerevalrow').hide(); // Reset to hide for next round
	  		this.element.find('#answerResult2').empty();
	  		this.stopClock();
	  	}

	  	this.enableAnswering = function() {
	  		this.answeringEnabled = true;
	  	}

	  	this.disableAnswering = function() {
	  		this.answeringEnabled = false;

	  	}

	  	this.showQuestion = function(questionText, choices, timeToAnswer, nthQuestion) {
	  		// Find DOM elements and inject data for user to see it
	  		this.element.find("#questiontext").empty().append(questionText);
	  		this.element.find('#choice1').empty().append(choices.a);
	  		this.element.find('#choice2').empty().append(choices.b);
	  		this.element.find('#choice3').empty().append(choices.c);
	  		this.element.find('#choice4').empty().append(choices.d);
	  		console.warn("MODIFYING SHOW QUESTION");
	  		this.element.find('#questionsLeft2').empty().append(nthQuestion + ". kysymys");



	  		this.initCountDown(timeToAnswer);

	  	} 

	  	this.initCountDown = function(timeToAnswer) {
	  		var then = Date.now() + timeToAnswer;
	  		this.countdownInterval = setInterval(function() {
	  			var left = Math.round((then - Date.now())/100)/10;
	  			var el = this.element.find('#timeLeftToAnswer');
	  			if (left < 0) left = 0;
	  			if (left < 3) el.removeClass('label-success').addClass('label-warning');
	  			else el.removeClass('label-warning').addClass('label-success');
	  			left = left.toString().length === 1 ? left + ".0" : left;
	  			el.empty().append(left + " sekuntia");
	  		}.bind(this), 100);
	  	}

	  	this.initListeners();
	  }
	  function TournamentEndedUI(commandHandler) {
	  	this.element = jQuery('#tournamentEnded');
	  	this.deactivated = true;
	  	this.activate = function() {
	  		this.deactivated = false;
	  	}

	  	this.deactivate = function() {
	  		this.deactivated = true;
	  	}	

	  	this.showLink = function(originalID) {
	  		console.log("SHOWING LINK");
	  		setTimeout(function() {
	  			var a = "<a class='btn btn-primary' href='" + LARAVEL_ADDR + "/tournaments/" + originalID + "'>Linkki turnauksen tuloksiin</a>";
	  			this.element.find('#resultsLink').empty().append(a);
	  		}.bind(this), 500);

	  	}  	
	  }


	  // Command receiver
	  function CommandReceiver() {

	  	this.userAction = function(action, data) {
	  		if (action === 'answer') {
	  			if (viewHandler.isState('waitingForAnswers')) {
	  				// lets send to server
	  				var answerChoice = data.trim().substring(0, 1);
	  				console.log("ANSWER IN: " + answerChoice);
	  				visamestari_socket.emit('fromClient', {tag: 'answerIn', data: answerChoice});
	  				return true;
	  			}

	  			return false;
	  		}

	  	}

	  }






	  </script>
            
	</body>	
</html>