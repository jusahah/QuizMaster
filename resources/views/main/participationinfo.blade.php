     @extends('index')
@section('pagename', 'Infosivu')

@section('title', 'Infosivu')
@section('titleshow', 'Infosivu')

@section('content')
<h3>Tietovisan infosivu</h3>


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
											  <td class="active"><strong>Julkinen?</strong></td>
											  <td>
												<?php 
													if ($tournament->password !== '') {
														echo "Ei";
													} else {
														echo "Kyllä";
													}
												?>
											  </td>
										   </tr>										   
										   <tr>
											  <td class="active"><strong>Kategoria</strong></td>
											  <td>
												Yleinen
											  </td>
										   </tr>
										   <tr>
											  <td class="active"><strong>Alkaa</strong></td>
											  <td>{{$tournament->startsAtBeautified()}}</td>
										   </tr>
										   <tr>
											  <td class="active"><strong>Kysymyksiä</strong></td>
											  <td>{{$tournament->questionsNum()}} kpl</td>
										   </tr>										   
										   <tr>
											  <td class="active"><strong>Arvioitu kesto</strong></td>
											  <td>{{$tournament->estimatedLengthString()}}</td>
										   </tr>
										   <tr>
											  <td class="active"><strong>Palkinnot</strong></td>
											  <td>Mainetta ja kunniaa
											                             										
											  	
											  </td>
										   </tr>										   
										</table>
									</div>	
                           </div>
						   

						   
                        </div>

                        <div class="widget">
                           <div class="widget-head br-red">
                              <h4>Tietovisan kuvaus</h4>
                           </div>
                           <div class="widget-body">
                           <p>{{$tournament->description}}</p>

                           </div>
						   

						   
                        </div>
                        @if ($hasStartedYet)
                        <div class="widget">
                           <div class="widget-head br-red">
                              <h4>Ilmoittautuminen on päättynyt!</h4>
                           </div>
                           <div class="widget-body">
                           	<p>Turnaus parhaillaan käynnissä. Tulokset ilmestyvät tälle sivulle turnauksen päätyttyä</p>
                           </div> 
                        </div> 
                        @elseif (!$tournament->registrationOpenYet()) 
                        <div class="widget">
                           <div class="widget-head br-red">
                              <h4>Ilmoittautuminen ei vielä avautunut!</h4>
                           </div>
                           <div class="widget-body">
                           	<p>Ilmoittautuminen avautuu noin <strong>15 minuuttia</strong> ennen turnauksen alkua.</p>
                           </div> 
                        </div>                         
                        @else
                        <div class="widget">
                           <div class="widget-head br-red">
                              <h4>Ilmoittautuminen käynnissä!</h4>
                           </div>
                           <div class="widget-body">
                           	<a href="{{route('participate', ['tid' => $tournament->id])}}" class="btn btn-primary">Osallistu</a> 
                           </div> 
                        </div>  
                        @endif                      

@endsection                        