<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | CQC</title>

    <meta name="description" content="Admin Dashboard">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="author" content="Istvan Lovas">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="admin">
        <div id="wrapper">

            @include('admin.layout.admin-header')

            <div id="page-wrapper">
                <div class="container-fluid">

                    @yield('content')
                    
                </div>
            </div>

        </div>
    </div>

    <script src="/js/admin.js"></script>
    @yield('customJS')
</body>
</html>
