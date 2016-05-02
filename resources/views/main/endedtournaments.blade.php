                        <div class="widget">
                           <div class="widget-head br-red">
                              <h4><span class="btn btn-danger" style="width: 100%;"><i class="fa fa-bell-slash"></i> Päättyneet tietovisat</span> </h4>
                           </div>
                           <div class="widget-body no-padd">
								<div class="table-responsive">
								  <table class="table table-hover table-bordered ">
								   <thead>
									 <tr>
									   <th>Nimi</th>
									   <th>Päättyi</th>
									   <th>Voittaja</th>
									   <th>Osallistujia</th>
									   <th>Tulokset</th>
									 </tr>
								   </thead>
								   <tbody>
								   @foreach($ended as $donetournament)
									 <tr>
									   <td>{{$donetournament->name}}</td>
									   <td>{{$donetournament->getSinceEndingString()}}</td>
									   <td>{{$donetournament->winner}}</td>
									   <td>{{$donetournament->participantsNum()}}</td>
									   <td><a href="{{route('tournamentinfo', ['tid' => $donetournament->tournament_id])}}"  class="btn btn-sm btn-primary"><i class="fa fa-database"></i></a></td>

									 </tr> 
								   @endforeach

<!--
									 <tr>
									   <td>Soneran viikkovisa #16</td>
									   <td>16 min</td>
									   <td>minäsevain</td>
									   <td>82</td>
									   <td><button class="btn btn-sm btn-primary"><i class="fa fa-database"></i></button></td>

									 </tr> 
									 <tr>
									   <td>Koululaisvisa #3</td>
									   <td>43 min</td>
									   <td>Ville P</td>
									   <td>9</td>
									   <td><button class="btn btn-sm btn-primary"><i class="fa fa-database"></i></button></td>

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