     @extends('index')
@section('pagename', 'Luo')

@section('title', 'Luo')
@section('titleshow', 'Luo')

@section('content')



                        <div class="widget">

                           <div class="widget-body">
                           	<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form" action="{{route('createtournament')}}">
                                {{ csrf_field() }}
                              
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Nimi</label>
                                  <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" placeholder="Nimi">
                                  </div>
                                </div>
                              
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Kuvaus</label>
                                  <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" name="description" placeholder="Tietovisan kuvaus"></textarea>
                                  </div>
                                </div>    
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Alkamisaika</label>
                                  <div class="col-lg-10">
                                    <input class="form-control" id="datetimepicker" name="startsAt" type="text" placeholder="HUOM! 'YY-MM-DD H:i'">
                                  </div>
                                </div>    

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Vastausaika</label>
                                  <div class="col-lg-10">
                                    <select class="form-control" name="timeToAnswer">
                                      <option>3</option>
                                      <option>5</option>
                                      <option>10</option>
                                      <option>15</option>
                                      <option>30</option>
                                    </select>
                                  </div>
                                </div>     

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Kysymysten aikaväli</label>
                                  <div class="col-lg-10">
                                    <select class="form-control" name="timeBetweenQuestions">
                                      <option>3</option>
                                      <option>5</option>
                                      <option>10</option>
                                      <option>15</option>
                                      <option>30</option>
                                    </select>
                                  </div>
                                </div>   
 
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Kysymykset (CSV-tiedosto!)</label>
                                  <div class="col-lg-10">
                                   <input class="form-control" type="file" id="questionsfileinput" name="questionsfile">
                                  </div>
                                </div>                                    



                      
                                
                                <div class="form-group" id="creation_buttonholder">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Lähetä</button>
                                  </div>
                                </div>
                              </form>
                           </div>
						   

						   
                        </div>



@endsection                        