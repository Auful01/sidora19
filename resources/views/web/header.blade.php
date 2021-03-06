<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>SIDORA19 | HomePage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        
        <link rel="shortcut icon" sizes="196x196" href="{{url('web/assets/images/logo.png')}}">
        <!-- Bootsrap -->
        <link rel="stylesheet" href="{{url('web/assets/css/bootstrap.min.css')}}">

        <!-- Font awesome -->
        <link rel="stylesheet" href="{{url('web/assets/css/font-awesome.min.css')}}">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="{{url('web/assets/css/owl.carousel.css')}}">

        <!-- Template main Css -->
        <link rel="stylesheet" href="{{url('web/assets/css/style.css')}}">
        
        <!-- Modernizr -->
        <script src="{{url('web/assets/js/modernizr-2.6.2.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">



            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="{{url('/')}}">SIDORA19</a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">
                    <li><a class="is-active" href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('login/auth')}}">Login</a></li>
                    <li> <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Admin</a>
                      <a class="dropdown-item" href="{{route('donor.create')}}">Pendonor</a>
                      <a class="dropdown-item" href="#">Penerima</a>
                    </div></li>
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->