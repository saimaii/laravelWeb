
@section('content')
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
            <li><a href="register">Sign up</a></li>


        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="register">Sign up</a></li>


        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>Login</h2>

                <div class="input-field col s6">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    @if (!Auth::guest())
                    @if(Auth::user(statusId)->role == 2)
                    echo "<script>location.href='./test'</script>";
                    @endif
                    @endif


                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Username</label>


                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                            @if ($errors->has('username'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
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
                            </div>
                        </div>

                        <!--                        <div class="form-group">-->
                        <!--                            <div class="col-md-6 col-md-offset-4">-->
                        <!--                                <div class="checkbox">-->
                        <!--                                    <label>-->
                        <!--                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me-->
                        <!--                                    </label>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!--                                <a class="btn btn-link" href="{{ route('password.request') }}">-->
                                <!--                                    Forgot Your Password?-->
                                <!--                                </a>-->
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
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


</body>
</html>




