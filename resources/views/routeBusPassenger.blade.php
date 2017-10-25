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
    <table>
        <thead>
        <tr>
            <th>Route</th>
            <th>Name</th>
            <th>Departure</th>
            <th>Arrival</th>



        </tr>
        </thead>

        <tbody>
        <tr>
            <td>1</td>
            <td>Green</td>
            <td>Chiang Mai university service center</td>
            <td>Rugby field.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Orange</td>
            <td>Fai Hin market</td>
            <td> Learning center</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Red</td>
            <td>Front of girl dormitory 3</td>
            <td>Student Affairs building</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Blue</td>
            <td> front of girl dormitory 3</td>
            <td>corner between dormitory boy 3,4</td>
        </tr>

        <tr>
            <td>5</td>
            <td>Purple</td>
            <td> Front of girl dormitory 3</td>
            <td>Bus stop in front of girl dormitory 2</td>


        </tr>

        <tr>
            <td>6</td>
            <td>Navy blue</td>
            <td>Chiang Mai university service center </td>
            <td> pavilion buddha</td>


        </tbody>
    </table>
</div>
<br>





<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</div>
</div>
</body>
</html>

