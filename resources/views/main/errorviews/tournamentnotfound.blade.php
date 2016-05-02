     @extends('index')
@section('pagename', 'Infosivu')

@section('title', 'Visa ei olemassa')
@section('titleshow', 'Ei löytynyt')

@section('content')
               <div class="alert alert-danger">
                  <h3>Tietovisaa ei löytynyt!</h3>
                  <p>Tarkista tietovisan ID</p>
              </div>           
@endsection