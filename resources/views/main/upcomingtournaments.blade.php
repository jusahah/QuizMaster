                        <div class="widget">
                           <div class="widget-head br-green">
                              <h4><span class="btn btn-success" style="width: 100%;"><i class="fa fa-bell-o"></i> Alkavat tietovisat</span></h4>
                           </div>
                           <div class="widget-body no-padd">
								<div class="table-responsive">
								  <table class="table table-hover table-bordered ">
								   <thead>
									 <tr>
									   <th>Nimi</th>
									   <th>Alkamiseen</th>
									   <th>Aihe</th>
									   <th>Info</th>
									   <th>Ilmoittaudu</th>
									 </tr>
								   </thead>
								   <tbody>
								   	@foreach($upcomings as $upcoming)
									 <tr>
									   <td>{{$upcoming->name}}</td>
									   <td>{{$upcoming->howLongTillStarts()}}
									   	@if ($upcoming->registrationOpenYet())
									   		<span class="btn-xs btn-success" data-toggle="tooltip" title="Ilmoittautuminen käynnissä!" style="float: right;" ><i class="fa fa-sign-in"></i> </span>
									   	@endif
									   </td>
									   <td>Yleinen</td>
									   <td><a href="{{route('tournamentinfo', ['tid' => $upcoming->id])}}" class="btn btn-sm btn-info">Info</a></td>
									   @if ($upcoming->registrationOpenYet())
									   <td><a href="{{route('participate', ['tid' => $upcoming->id])}}" class="btn btn-sm btn-success">Osallistu</a></td>
									   @else
									   <td><button class="btn btn-sm btn-success" disabled>Osallistu</button></td>
									   @endif

									 </tr> 								   	
								   	@endforeach
								   	<!--
									 <tr>
									   <td>Maailman pääkaupungit</td>
									   <td>2 min <span class="btn-xs btn-success" data-toggle="tooltip" title="Ilmoittautuminen käynnissä!" style="float: right;" ><i class="fa fa-sign-in"></i> </span></td>
									   <td>Yleinen</td>
									   <td><button class="btn btn-sm btn-info">Info</button></td>
									   <td><button class="btn btn-sm btn-success">Osallistu</button></td>

									 </tr> 
									 <tr>
									   <td>Hollywood + turhat julkimot</td>
									   <td>36 min</td>
									   <td>Yleinen</td>
									   <td><button class="btn btn-sm btn-info">Info</button></td>
									   <td><button class="btn btn-sm btn-success" disabled>Ei avoinna</button></td>

									 </tr>  
									 -->                                            

								   </tbody>
								 </table>
                             </div>
                           </div>
						   
						   <div class="widget-foot">
							
							 <p>Lista luotu: {{$when}}</p>
                               
                               <div class="clearfix"></div>
						   
						   </div>
						   
                        </div>