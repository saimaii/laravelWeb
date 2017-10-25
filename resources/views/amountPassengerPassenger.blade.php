<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" type="text/css" href="css/custom.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">CMU Transportation Management</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><i class="material-icons">perm_identity</i></li>
            <li>
                {{ Auth::user()->username }}

            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>



        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="check_logout.php">Log out</a></li>


        </ul>
    </div>
    <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down">
            <li><a href='/home'>Subscribe</a></li>
            <li><a href='/indexPassenger'>About</a></li>
            <li><a href='/routeBusPassenger'class="active">Route</a></li>
            <li class="tab"><a href="/amountPassengerPassenger">Amount of Passenger</a></li>

        </ul>
    </div>
</nav>

<div class="container">
    <h2>Amount of passenger in realtime </h2>

    <!-- Main Application (Can be VueJS or other JS framework) -->
    <div class="app">
        <center>
            {!! $chart->html() !!}
        </center>
    </div>
    <!-- End Of Main Application -->
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}




</div>




</div>


<footer class="footer">

    <div class="footer-copyright">
        <div class="container">
            © 2017 CMU Transportation Management
            <a class="grey-text text-lighten-4 right" ></a>
        </div>
    </div>
</footer>





<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</div>
</div>
</body>
</html>

