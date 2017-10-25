<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">CMU Transportation Management</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <?php
            $data1 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',1)->first()->amount;
            $data2 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',2)->first()->amount;
            $data3 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',3)->first()->amount;
            $data4 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',4)->first()->amount;
            $data5 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',5)->first()->amount;
            $data6 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',6)->first()->amount;

            //$data1 = DB::select('SELECT amount FROM passengerroute WHERE  passengerRoute_id =1');
            //$data2 = DB::select('SELECT amount FROM passengerroute WHERE  passengerRoute_id =2');
            //$data3= DB::select('SELECT amount FROM passengerroute WHERE  passengerRoute_id =3');
            //$data4['data4'] = DB::select('SELECT amount FROM passengerroute WHERE  passengerRoute_id =4');
            //$data5['data5'] = DB::select('SELECT amount FROM passengerroute WHERE  passengerRoute_id =5');
            //$data6['data6'] = DB::select('SELECT amount FROM passengerroute WHERE  passengerRoute_id =6');


            //$data1 =  intval($data1);
            //echo var_dump($data1)

            ?>
            @if(Auth::user()->subscribeRoute1==true && $data1>9 || Auth::user()->subscribeRoute2==true && $data2>9||Auth::user()->subscribeRoute3==true && $data3>9 || Auth::user()->subscribeRoute4==true && $data4>9 || Auth::user()->subscribeRoute5==true && $data5>9 ||Auth::user()->subscribeRoute6==true && $data6>9)
                <div class="fixed-action-btn verticle click-to-toggle">
                <a class="btn-floating btn-large red">
                    <i class="material-icons" onclick="Materialize.toast( '{{Auth::user()->subscribeRoute1==true && $data1>9 ? "Route 1 is nearly full" : ""}}'+'{{Auth::user()->subscribeRoute2==true && $data2>9 ? "Route 2 is nearly full" : ""}}'+'{{Auth::user()->subscribeRoute3==true && $data3 >9 ? "Route 3 is nearly full" : ""}}'+'{{Auth::user()->subscribeRoute4==true && $data4>9 ? "Route 4 is nearly full" : ""}}'+'{{Auth::user()->subscribeRoute5==true && $data5>9 ? "Route 1 is nearly full" : ""}}'+'{{Auth::user()->subscribeRoute6==true && $data6>9 ? "Route 6 is nearly full" : ""}}', 4000) ">notifications</i>
                </a>
            </div>
            @endif


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
            <li><a href='/routeBusPassenger' class="active">Route</a></li>
            <li class="tab"><a href="/amountPassengerPassenger">Amount of Passenger</a></li>

        </ul>
    </div>
</nav>

<div class="container">
    <h2 class="header">Subscribe Route</h2>
</div>
<div class="container">

    <div class="row">
        <div>
            <div class="col s20 m7">
                <div class="card cyan darken-3 ">
                    <div class="card-content white-text">


                        <p>2 rd female dorm activity area.</p>
                        <h4>Route1</h4>
                        @if(Auth::user()->subscribeRoute1==true)
                            <p>Subscribe</p>
                        @endif


                    </div>
                    <div class="card-action">
                        <!-- Switch -->

                        @if(Auth::user()->subscribeRoute1==false)
                            <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                                   id="subscribe" onClick="location.href = 'home/{{ Auth::user()->id }}'">

                        @else
                            <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                                   id="subscribe" onClick="location.href = 'home7/{{ Auth::user()->id }}'">

                        @endif

                    </div>
                </div>
            </div>
        </div>


        <div class="col s12 m7">
            <div class="card  lime darken-2 ">
                <div class="card-content white-text">


                    <p>2 rd female dorm activity area</p>
                    <h4>Route2</h4>
                    <div>
                        @if(Auth::user()->subscribeRoute2==true)
                            <p>Subscribe</p>
                        @endif</div>


                </div>
                <div class="card-action">


                    @if(Auth::user()->subscribeRoute2==false)

                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home2/{{ Auth::user()->id }}'">
                    @else
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home8/{{ Auth::user()->id }}'">
                    @endif
                </div>
            </div>
        </div>


        <div class="col s12 m7">
            <div class="card pink darken-4">
                <div class="card-content white-text">

                    <p>2 rd female dorm activity area</p>
                    <h4>Route3</h4>

                    @if(Auth::user()->subscribeRoute3==true)
                        <p>Subscribe</p>
                    @endif


                </div>
                <div class="card-action">
                    <!-- Switch -->


                    @if(Auth::user()->subscribeRoute3==false)

                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home3/{{ Auth::user()->id }}'">
                    @else
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home9/{{ Auth::user()->id }}'">
                    @endif


                </div>
            </div>
        </div>


        <div class="col s12 m7">
            <div class="card deep-orange darken-4 ">
                <div class="card-content white-text">

                    <p>2 rd female dorm activity area</p>
                    <h4>Route4</h4>

                    <div>@if(Auth::user()->subscribeRoute4==true)
                            <p>Subscribe</p>
                        @endif</div>


                </div>
                <div class="card-action">
                    <!-- Switch -->


                    @if(Auth::user()->subscribeRoute4==false)
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home4/{{ Auth::user()->id }}'">
                    @else
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home10/{{ Auth::user()->id }}'">
                    @endif


                </div>
            </div>
        </div>

        <div class="col s12 m7">
            <div class="card blue-grey darken-2 ">
                <div class="card-content white-text">

                    <p>2 rd female dorm activity area</p>
                    <h4>Route5</h4>

                    <div>@if(Auth::user()->subscribeRoute5==true)
                            <p>Subscribe</p>
                        @endif</div>


                </div>
                <div class="card-action">
                    <!-- Switch -->


                    @if(Auth::user()->subscribeRoute5==false)
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home5/{{ Auth::user()->id }}'">
                    @else
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home11/{{ Auth::user()->id }}'">
                    @endif


                </div>
            </div>
        </div>


        <div class="col s12 m7">
            <div class="card  indigo darken-4">
                <div class="card-content white-text">

                    <p>2 rd female dorm activity area</p>
                    <h4>Route6</h4>

                    @if(Auth::user()->subscribeRoute6==true)
                        <p>Subscribe</p>
                    @endif


                </div>
                <div class="card-action">
                    <!-- Switch -->


                    @if(Auth::user()->subscribeRoute6==false)
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home6/{{ Auth::user()->id }}'">
                    @else
                        <input type="button" class="btn btn-primary light-blue" name="subscribe" value="Subscribe"
                               id="subscribe" onClick="location.href = 'home12/{{ Auth::user()->id }}'">
                    @endif


                </div>
            </div>
        </div>


    </div>
</div>


<footer class="footer">

    <div class="footer-copyright">
        <div class="container">
            © 2017 CMU Transportation Management
            <a class="grey-text text-lighten-4 right"></a>
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

