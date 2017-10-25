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
    {!! Charts::styles() !!}
</head>

<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">CMU Transportation Management</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><i class="material-icons">perm_identity</i></li>
            <li>Administrator</li>
            <li>
                <?php
                error_reporting(0);
                echo $_SESSION["Username"];
                ?>

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
            <li><a class="active" href='/passengerAccount'>Passenger Account</a></li>
            <li><a href='/scheduling'>Scheduling</a></li>
            <li><a href='/viewSchedule'>View Schedule</a></li>
            <li><a href='/report'>Report</a></li>
            <li><a href='/graph'>Statistical Graph</a></li>
            <li><a href='/statisticalData'>Statistical Data</a></li>



        </ul>
    </div>
</nav>




<div id = "about" class = "col s12">
    <form class="form-horizontal" method="post" action="insert">
        <div class="container">
            {{ csrf_field() }}
            <table>
                <thead>
                <tr>
                    @foreach($schedules as $schedule)
                        <div>
                            <th>Bus number</th>
                            <td>{{$schedule->bus_id}}</td>
                            <th>Route</th>
                            <td>{{$schedule->route_id}}</td>
                            <th>Departed On</th>
                            <td>{{$schedule->departure_time}}</td>
                            <th>Arrival On</th>
                            <td>{{$schedule->arrival_time}}</td>
                        </div>
                    @endforeach
                </tr>
                </thead>
            </table>
        </div>
    </form>
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
</body>
</html>