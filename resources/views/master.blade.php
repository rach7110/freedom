<!DOCTYPE html>

<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>

        /*background-color: #c2dde5; light blue*/
        /*background-color: #bcc8db;  light purple*/
        /*background-color: #BDCCDD;  light blue-purple */

        /*background-color: #e76630;  orange*/
        /*background-color: #3b54ac;  blue*/
        /*background-color: #EBEBEB;  light gray*/


   /*     html, body {
            height: 100%;
        }*/

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            font-weight: 100;
            font-family: 'Lato';
        }


        .navbar{
            background-color: #BDCCDD; /* light blue-purple */
        }

        .my-name {
            font-size: 25px;
            font-weight: bold;
            text-align: left;
        }

        .menu.pinata {
            width: 22px;
        }

        .banner.pinata {
            padding-top: 15px;
        }

        .content {
            text-align: center;
        }

        .banner.title {
            font-size: 72px;
        }




    </style>

</head>



<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-default">
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
                <a class="navbar-brand my-name" href="#">Rachel Loziuk</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Resume</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href=''><img src='images/twitter-white-small.png'></a></li>
                    <li><a href='#'><img src='/images/github-white-4-small.png'></a></li>

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
    <div class="container">

        @yield('content')

    </div>

</body>


</html>