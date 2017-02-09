<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CQC | Login</title>

    <meta name="description" content="Please login">
    <meta name="keywords" content="Login">
    <meta name="author" content="Istvan Lovas">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/546d72fa3b.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <section id="login" class="brand-pink-bg flex-horizontal">
        <div class="panel">
            <div class="panel-heading text-center">Log in</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
            
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
            
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
            
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
            
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
            
{{--                             <a href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>