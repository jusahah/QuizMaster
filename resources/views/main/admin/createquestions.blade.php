     @extends('index')
@section('pagename', 'Question Creator')

@section('title', 'Question Creator')
@section('titleshow', 'Question Creator')

@section('content')
<h3>Lisää kysymyksiä</h3>


                        <div class="widget">

                           <div class="widget-body">
                           	<form class="form-horizontal" method="POST" role="form" action="{{route('createquestions')}}">
                              
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
                                    <input class="form-control" id="datetimepicker" name="startsAt" type="text" placeholder="25/12/2016 08:06">
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
 
                                  



                      
                                
                                <div class="form-group" id="creation_buttonholder">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Lähetä</button>
                                    <span class="label label-info" style="float: right;">Voit lisätä kysymyksiä tähän tietovisaan luonnin jälkeen!</span>
                                  </div>
                                </div>
                              </form>
                           </div>
						   

						   
                        </div>



@endsection                        