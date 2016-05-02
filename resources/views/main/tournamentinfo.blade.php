     @extends('index')
@section('pagename', 'Tulossivu')

@section('title', $title)
@section('titleshow', $title)

@section('content')




                        <div class="widget">

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
                           <div class="widget-head br-red">
                              <h4>Top 10 tulokset</h4>
                           </div>
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
								   $standingsInfo = $tournament->getStandingsArray();
								   $standings = $standingsInfo['standings'];
								   $sliced    = $standingsInfo['sliced'];
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
						   								 @if ($sliced)
								 	<a style="margin: 16px;" class='btn btn-primary' href="{{route('fullresults', ['tid' => $tournament->tournament_id])}}" target='_blank'>Kokonaistulokset</a>

								 @endif                             

                           </div>

						   <div class="widget-foot">
							
							  <p>Lista luotu: {{$when}}</p>
                               
                               <div class="clearfix"></div>
						   
						   </div>
						   
                        </div>
@endsection                        