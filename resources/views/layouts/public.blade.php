
<!DOCTYPE html>
<html lang="es" >
<head>

<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('now-ui-kit/assets/img/apple-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('now-ui-kit/assets/img/favicon.png') }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>
    {{ config('app.name', 'Laravel') }} - @yield('title')  
</title>

    <link href="{{ asset('now-ui-kit/assets/css/fonts-google-monts.css') }}" rel="stylesheet">
    <link href="{{ asset('now-ui-kit/assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('now-ui-kit/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('now-ui-kit/assets/css/now-ui-kit.minc8c4.css?v=1.3.1') }}" rel="stylesheet">
    @stack('stylesCssPublic')
</head>
<body class="landing-page sidebar-collapse"> 

    <div class="wrapper">
        @yield('content')
    </div>

    <script src="{{ asset('now-ui-kit/assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('now-ui-kit/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('now-ui-kit/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('now-ui-kit/assets/js/now-ui-kit.minc8c4.js?v=1.3.1') }}"></script>

    @stack('scriptsJsPublic')        
    
</body>
</html>
