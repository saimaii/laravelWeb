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

<br><div class="container">
    <h2>Purple bus</h2>

    <div><p>The Purple Bus is a bus that for the students and personnel of Chiang Mai University who wants to transport in the university in free charge. Available at 7.00-22.00 every day in 6 routes that cover around the entire university with numerous buses that are ready to provide service.</p></div>
        <div>1.Route green: start from Chiang Mai university service center next to Rugby field. </div>
        <div>2.Route orange: start from Fai Hin market to central library ITSC.</div>
        <div>3.Route red: start from in front of female dormitory 3 to Student Affairs building.</div>
        <div>4.Route blue: start from in front of female dormitory 3 to corner between male dormitory 3,4.</div>
       <div>5.Route purple: start from in front of female dormitory 3 to bus stop in front of female dormitory 2.</div>
        <div>6.Route navy blue: start from Chiang Mai University service center to salatham.</div>


</div>





<footer class="page-footer">

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

