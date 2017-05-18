
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contacts App</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/cover.css')}}" rel="stylesheet">
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Contacts App</h3>
                    @if (Route::has('login'))
                    <nav class="nav nav-masthead">
                        @if (Auth::check())
                        <a class="nav-link active" href="{{ url('/contact') }}">Home</a>
                        @else
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        @endif
                    </nav>
                    @endif
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Contacts App</h1>
                <p class="lead">An application that allows you to manage and store your Contacts.</p>
                @if (Route::has('login'))
                <p class="lead">
                    @if (Auth::check())
                        <a href="{{url('/contact')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>Take Me Home </a>
                    @else
                    <a href="{{url('/register')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    @endif
                </p>
                @endif
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>&copy; {{@date('Y')}} Contacts App, by <a href="https://twitter.com/samsoftk">@samsoftk</a>.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="{{asset('js/jquery.min.js')}}"><\/script>')</script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"  crossorigin="anonymous"></script>
</body>
</html>
