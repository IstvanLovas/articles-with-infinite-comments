<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CQC | @yield('title')</title>
    @yield('og')

    <meta name="description" content="@yield('meta_description')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/546d72fa3b.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body data-spy="scroll" data-target="#secondary-navigation-bar" data-offset="100">

    <div id="app">
        <app-container>
            <template slot="content">
            
                @yield('content')
                
                @if(! Request::is('thank-you'))
                    <app-footer></app-footer>
                @endif
                
            </template>
        </app-container>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
