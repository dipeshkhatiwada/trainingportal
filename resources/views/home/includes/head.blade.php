<head>
    <meta charset="utf-8">
    @yield('seo')

    <!-- Favicon -->
    <link href="{{asset('home/img/favicon.ico')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('home/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('home/lib/slick/slick-theme.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
    @yield('css')
</head>
