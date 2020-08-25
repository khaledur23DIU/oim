<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Overlap & Improvement System" />
    <meta name="author" content="Daffodil International University" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
        type="text/css" />
    <!-- icons -->
    <link href="{{asset('assets/backend/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/backend/plugins/iconic/css/material-design-iconic-font.min.css')}}">
    <!-- bootstrap -->
    <link href="{{asset('assets/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/pages/extra_pages.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body>
    <div class="limiter">
        @yield('content')
    </div>
    <!-- start js include path -->
    <script src="{{asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/pages/extra-pages/pages.js')}}"></script>
    <!-- end js include path -->
</body>

</html>