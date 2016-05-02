<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Visamestari tarjoaa mahdollisuuden testata yleistietoasi muita pelaajia vastaan.">
    <meta name="keywords" content="tietovisa, yleistieto, visa">
    <meta name="author" content="Nollaversio IT">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/datetimepicker.css')}}"> -->
    
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="css/style-ie.css" />
    <![endif]-->
            
    <!-- Favicon -->
    <link rel="shortcut icon" href="#">


  </head>
  
  <body style="height: 100%;">

       <?php 
        if (isset($isAdmin)) {
          $adminHere = true;
          $bgColor = '#2567A1';
          $adminText = 'Admin | ';
          $loginText = 'Logout';
        } else {
          $adminHere = false;
          $bgColor = '';
          $adminText = '';
          $loginText = 'Login';
        }
        ?>                        
  
      <!-- Quick setting box ends -->
         
      <div class="out-container" style="height: 100%;">
         <div class="outer" style="height: 100%;">
            <!-- Sidebar starts -->
            

            <div class="sidebar" style="min-height: 860px; height: 100%;">
                  <!-- Logo starts -->
                  <div class="logo">
                     <h1 style="font-size: 32px;"><a href="{{route('tournaments')}}">Visamestari</a></h1>
                  </div>
                  <!-- Logo ends -->
                  
                  <!-- Sidebar buttons starts -->
                  <!--
                  <div class="sidebar-buttons text-center">

                     <div class="btn-group">
                       <a href="login.html" class="btn btn-black btn-xs"><i class="fa fa-power-off"></i></a>
                       <a href="login.html" class="btn btn-danger btn-xs">{{$loginText}}</a>
                     </div>
                  </div>
                  -->
                  <!-- Sidebar buttons ends -->
                  
                  <!-- Sidebar search 
                     <div class="sidebar-search">
                        <form class="form-inline" role="form">
                           <div class="input-group">
                              <input type="text" class="form-control" id="s" placeholder="Type Here to Search...">
                 
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                              </span>
                            </div>
                        </form>
                     </div>
                   Sidebar search -->
                  
                  <!-- Sidebar navigation starts -->
          
          <div class="sidebar-dropdown"><a href="#">Valikko</a></div>
          







          <!-- SIDEBAR -->
          <!-- SIDEBAR -->
          <!-- SIDEBAR -->
                  <div class="sidey">
                     <ul class="nav">
                         <!-- Main navigation. Refer Notes.txt files for reference. -->
                         
                         <!-- Use the class "current" in main menu to hightlight current main menu -->
                         <li><a href="{{route('tournaments')}}"><i class="fa fa-desktop"></i> Etusivu</a></li>
    
             <li><a href="{{route('guide')}}"><i class="fa fa-bar-chart-o"></i> Ohjeet</a></li>
                       <!--              
                         <li class="has_submenu">
                             <a href="#">
                                 <i class="fa fa-file"></i> Pages <span class="label label-darky">10</span>
                    
                                 <span class="caret pull-right"></span>
                             </a>
           
                             <ul>
                         
                                 <li><a href="errorlog.html"><i class="fa fa-angle-double-right"></i> ErrorLog</a></li>
                                 <li><a href="gallery.html"><i class="fa fa-angle-double-right"></i> Gallery</a></li>
                 <li><a href="profile.html"><i class="fa fa-angle-double-right"></i> Profile</a></li>
                                 <li><a href="login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                 <li><a href="ui.html"><i class="fa fa-angle-double-right"></i> UI</a></li>
                 <li><a href="calendar.html"><i class="fa fa-angle-double-right"></i> Calendar</a></li>
                 <li><a href="invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                 <li><a href="media.html"><i class="fa fa-angle-double-right"></i> Media</a></li>
                     <li><a href="posts.html"><i class="fa fa-angle-double-right"></i> Posts</a></li>
                 <li><a href="statement.html"><i class="fa fa-angle-double-right"></i> Statement</a></li>
                             </ul>
                         </li>  --> 

             <li><a href="{{route('contact')}}"><i class="fa fa-cog"></i> Yhteydenotto</a></li>
             <li><a href="{{route('cooperation')}}"><i class="fa fa-list-alt"></i> Yhteistyö</a></li>


                                                  
                     </ul>               
                  </div>
                  <!-- Sidebar navigation ends -->


                  <!-- SIDEBAR ENDS -->
                  <!-- SIDEBAR ENDS -->
                  <!-- SIDEBAR ENDS -->










                  
                  <!-- Sidebar chart starts -->

                  <!-- Sidebar chart ends -->
                  
                  <!-- Sidebar weather starts -->
                  <div class="sidebar-weather hidden-xs">
                     <div class="sidebar-weather-header">
                        <!-- Title -->
                        <h6>Pelaajia online-tilassa</h6>
                     </div>
                     <div class="sweather-left" style="margin-left: 62px;">
                        <!-- Cloud icon -->
                        <span class="sweather-big">{{$userCount}}</span><br />
                     </div>

                     <div class="clearfix"></div>
                     <!-- Footer -->
                     <div class="sidebar-weather-footer">
                        <p>Päivittyy ~ 2 minuutin välein</p>
                     </div>
                  </div>
                  <div class="sidebar-status hidden-xs">
                     <div class="sidebar-weather-header">
                        <!-- Title -->
                        <h6 style="text-align: center;">Pelipalvelinten status</h6>
                        <hr>
                     </div>
                     <!-- Status item -->
 
                     @foreach($foundServers as $serverinfo)
                     <div class="sidebar-status-item">
                        <!-- Title -->
                        @if ($serverinfo['online'])
                        <div class="sidebar-status-title">{{$serverinfo['key']}} <span class="pull-right">Toiminnassa</span></div>
                        <!-- Progress bar -->
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                        @else
                        <div class="sidebar-status-title">{{$serverinfo['key']}} <span class="pull-right">Ei toiminnassa</span></div>
                        <!-- Progress bar -->
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                          </div>
                        </div>
                        @endif
                     </div>
                     @endforeach
                     


                    
                     
                  </div>
                  <!-- Sidebar weather ends -->
                  
                  <!-- Sidebar status starts -->

                  <!-- Sidebar status ends -->
                  
            </div>
            <!-- Sidebar ends -->
            
            <!-- Mainbar starts -->
      <div class="mainbar" style="min-height: 860px; height: 960px;">
               
          <!-- Page heading starts -->
        <div class="page-head">
          <div class="container">
            <div class="row">
              <!-- Page heading -->
              <div class="col-md-3 col-sm-6 col-xs-6">
              <!-- Do we turn icon blue to inform we are logged as admin? -->


                <h2>
                <span class="icon-success"><i class="fa fa-desktop" style="background-color:{{$bgColor}}"></i></span> {{$adminText}} @yield('pagename')</h2>
              
              </div>
              <!--
              <div class="col-md-6 col-sm-0 hidden-sm hidden-xs">
                <span class="ph-status">
                  <a href="#"><strong>Visits</strong> <i class="fa fa-chevron-up ph-red"></i> 25% &nbsp; -</a>
                  <a href="#"><strong>Stock</strong> <i class="fa fa-chevron-down ph-green"></i> 15.0 &nbsp; -</a>
                  <a href="#"><strong>Profit</strong> <i class="fa fa-chevron-up ph-red"></i> $500</a>
                </span>
              </div>
             -->
              <div class="col-md-3 col-sm-6 col-xs-6" style="float: right;">
                <span class="ph-misc pull-right">
                <p>Nollaversio IT</p>
                <!--
                  <a href="#" class="bs-tooltip" title="Share" data-placement="bottom"><i class="fa fa-share"></i> </a>
                  <a href="#" class="bs-tooltip" title="Export" data-placement="bottom"><i class="fa fa-upload"></i> </a>
                  <a href="#" class="bs-tooltip" title="Print" data-placement="bottom"><i class="fa fa-print"></i> </a> 
                  -->
                </span>
                <div class="clearfix"></div>
              </div>  

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- Page heading ends -->
        
        <!-- Hero status starts -->
        

        <div class="clearfix"></div>
        <!-- Hero status ends -->

    
        
        <!-- Content starts -->
        
        <div class="container">

          <!-- MAIN CONTENT AREA -->
@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

          @yield('content')

           <div class="clearfix"></div>
           <hr>
           <p style="font-size: 12px; line-height: 16px;"><i>Visamestari.fi on suomalainen tietovisojen tuottaja. Sivustollamme voit testata yleistietoasi muita ihmispelaajia vastaan reaaliajassa! Tietovisoja järjestävät palvelutuottajan lisäksi yhteistyökumppanimme. Tervetuloa pelaamaan!</i></p>

          
        </div>
        
        <!-- Content ends -->       
         
            </div>
            <!-- Mainbar ends -->
            
            <div class="clearfix"></div>
         </div>
      </div>
    
      <!-- Sliding boxses starts -->
      
              

         <!-- Status slide box ends -->    


     <!-- Notification slide box ends -->
         
         <!-- ////////////////////////////////// -->
      
      <!-- Sliding boxes ends -->
      
      <!-- Scroll to top -->
      <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
    
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
      <!-- Sparkline for Mini charts -->
      <script src="{{asset('js/sparkline.js')}}"></script>
      
      <!-- jQuery flot -->
      <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
      <script src="{{asset('js/jquery.flot.min.js')}}"></script>     
      <script src="{{asset('js/jquery.flot.pie.min.js')}}"></script>
      <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
    
    <!-- jQuery Knob -->
    <script src="{{asset('js/jquery.knob.js')}}"></script>
    <!-- jQuery Data Tables -->
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <!-- jQuery Knob -->
    <script src="{{asset('js/bootstrap-switch.min.js')}}"></script>
    <!-- jQuery Knob -->
    <script src="{{asset('js/jquery.rateit.min.js')}}"></script>
    <!-- jQuery prettyPhoto -->
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <!-- jquery slim scroll -->
    
    <!-- jQuery gritter -->
    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
    <!-- jQuery full calendar -->
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <!-- Respond JS for IE8 -->
    <script src="{{asset('js/respond.min.js')}}"></script>
    <!-- HTML5 Support for IE -->
    <script src="{{asset('js/html5shiv.js')}}"></script>

    <!-- <script src="{{asset('js/datetimepicker.js')}}"></script> -->
    <!-- Custom JS -->
    <!-- Turn on below script to get popping up notifications -->
    <!-- <script src="asset('js/custom.notification.js"></script> -->
    <script src="{{asset('js/custom.js')}}"></script>
      <!-- Sparkline for Mini charts -->
      <?php if (isset($isAdmin) && $isAdmin == true) { ?>
        <script src="{{asset('js/admin.js')}}"></script>
      <?php }
      ;?>


      
  </body> 
</html>