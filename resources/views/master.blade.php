
<!DOCTYPE html>

<html>

<head>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- EXTERNAL SCRIPTS -->
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <!-- JQUERY FOR BOOTSTRAP -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- CSS FOR BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=0.666667, maximum-scale=0.666667, user-scalable=0">
    <meta name="viewport" content="width=device-width">


    <title>
        @yield('title')
    </title>

</head>


<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- MENU TOGGLE BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <img class="menu pinata" src="images/animal-blue.png">
                <!--<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> -->
                </button>
                <!-- PERSONAL NAME/BRAND -->
                <a class="navbar-brand medium-font-weight" id="navbar-name" href="{{ route('welcome' )}}">Rachel Loziuk</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="font-1 nav navbar-nav navbar-right">
                    <li><a href="{{ route('resume' )}}">Resume</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>
                    <li><a href="{{ route('about' )}}">Contact</a></li>
                    <li><a href='https://twitter.com/RachelLoziuk' target="_blank"><img src='images/twitter-white-small.png'></a></li>
                    <li><a href='https://github.com/rach7110' target="_blank"><img src='/images/github-white-4-small.png'></a></li>

                    <!-- EXMAPLE MENU DROPDOWN -->
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li> -->

                      </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container center-block content">
      <!-- HEADER -->
      <div class="row">
         <div class="col-md-12 font-1">
             <h1>
               @yield('title')
             </h1>
             <h3>
               @yield('title_description')
             </h3>
         </div>
       </div>
       <!-- FLASH MESSAGES -->
       @if(Session::has('message'))
       <div class="alert alert-info alert-dismissable" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{Session::get('message')}}
       </div>
       @endif

        @yield('content')
    </div>

    <div id="footer"></div>

</body>

</html>
