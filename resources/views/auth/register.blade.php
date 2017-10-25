@section('content')
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" type="text/css" href="css/custom.css">
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">CMU Transportation Management</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">


        </ul>
        <!--        <ul class="side-nav" id="mobile-demo">-->
        <!--            <li><a href="register">Sign up</a></li>-->
        <!---->
        <!---->
        <!--        </ul>-->
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>Register</h2>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="input-field col s6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>


                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-field col s6">
                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Lastname</label>


                                <input id="lastname" type="text" class="form-control" name="lastname"
                                       value="{{ old('lastname') }}" required autofocus>
                            </div>
                        </div>
                        @if ($errors->has('lastname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                        @endif
                </div>
            </div>


            <div class="input-field col s6">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>


                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                           required>

                    @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-field col s6">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>


                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-field col s6">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>


                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required>
                </div>
            </div>

            <div class="input-field col s6">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-md-4 control-label">username</label>


                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}"
                           required autofocus>
                </div>
            </div>
            <input id="statusId" type="hidden" name="statusId" value=2>
            @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif



            <input id="subscribeRoute1" type="hidden" name="subscribeRoute1" value=0>
            <input id="subscribeRoute2" type="hidden" name="subscribeRoute2" value=0>
            <input id="subscribeRoute3" type="hidden" name="subscribeRoute3" value=0>
            <input id="subscribeRoute4" type="hidden" name="subscribeRoute4" value=0>
            <input id="subscribeRoute5" type="hidden" name="subscribeRoute5" value=0>
            <input id="subscribeRoute6" type="hidden" name="subscribeRoute6" value=0>



            <input id="notification1" type="hidden" name="notification1" value=0>
            <input id="notification2" type="hidden" name="notification2" value=0>
            <input id="notification3" type="hidden" name="notification3" value=0>
            <input id="notification4" type="hidden" name="notification4" value=0>
            <input id="notification5" type="hidden" name="notification5" value=0>
            <input id="notification6" type="hidden" name="notification6" value=0>


        </div>
    </div>


    <div class="regButton">
        <div class=" col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
    </form>

</div>

<footer class="page-footer">

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

</body>















