           <!DOCTYPE html>
           <html>
           <head>
           	<title>Full results | Visamestari</title>
           	    <!-- Styles -->
    <!-- jQuery UI -->
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
    
    <!-- jQuery Gritter -->
    <link href="{{asset('css/jquery.gritter.css')}}" rel="stylesheet">
    <!-- Bootstrap Switch -->
    <link href="{{asset('css/bootstrap-switch.css')}}" rel="stylesheet">
    <!-- jQuery Datatables -->
    <link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet">
    <!-- Rateit -->
    <link href="{{asset('css/rateit.css')}}" rel="stylesheet">
    <!-- jQuery prettyPhoto -->
    <!--<link href="css/prettyPhoto.css" rel="stylesheet"> -->
    <!-- Full calendar -->
    <link href="{{asset('css/fullcalendar.css')}}" rel="stylesheet">   
    <!-- Font awesome CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">   
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
           </head>
           <body style="padding: 16px; background-color: white;">                        <div class="widget">

                           <div class="widget-body no-padd">
                           										<div class="table-responsive">
										<!-- Profile details -->
										<table class="table table-bordered">
										
										   <tr>
											  <td class="active"><strong>Nimi</strong></td>
											  <td>{{$tournament->name}}</td>
										   </tr>
										   <tr>
											  <td class="active"><strong>Kategoria</strong></td>
											  <td>
												Yleinen
											  </td>
										   </tr>
										   <tr>
											  <td class="active"><strong>Kuvaus</strong></td>
											  <td>{{$tournament->description}}</td>
										   </tr>
										   <tr>
											  <td class="active"><strong>Ajankohta</strong></td>
											  <td>{{date('d.m.Y, \k\l\o H:i', $tournament->tournament->startsAt)}}</td>
										   </tr>
										   <tr>
											  <td class="active"><strong>Voittaja</strong></td>
											  <td>{{$tournament->winner}}</td>
										   </tr>										   
										</table>
									</div>	
                           </div>
						   

						   
                        </div>
                        <div class="widget">

                           <div class="widget-body no-padd">
								<div class="table-responsive">
								  <table class="table table-hover table-bordered ">
								   <thead>
									 <tr>
									   <th>Sijoitus</th>
									   <th>Pelaaja</th>
									   <th>Pisteet</th>
									 </tr>
								   </thead>
								   <tbody>
								   <?php 
								   $currRank = 1;
								   $standings = $tournament->getFullStandingsArray();
								   ?>

									@foreach ($standings as $standing)
									 <tr>
									   <td>{{$currRank++}}.</td>
									   <td>{{$standing['name']}}</td>
									   <td>{{$standing['points']}}</td>

									 </tr> 
									@endforeach

								   </tbody>
								 </table>







                             </div>	
                           </div>           
           </body>
           </html> 


