
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('meta')

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::to('/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('/css/idea.css') }}" rel="stylesheet">
    <link href="{{ URL::to('/css/question.css') }}" rel="stylesheet">
    <link href="{{ URL::to('/css/challenge.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::to('/template/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::to('/template/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::to('/template/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css') }}">
    
    @yield('link')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page Content -->
        <div id="page-wrapper">
           @yield('content')
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::to('/template/vendor/jquery/jquery.min.js')  }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::to('/template/vendor/bootstrap/js/bootstrap.min.js')  }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::to('/template/vendor/metisMenu/metisMenu.min.js')  }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::to('/template/dist/js/sb-admin-2.js')  }}"></script>
    <script src="{{ URL::to('/template/js/dashboard_dropdown.js')  }}"></script>
    
    <script type="text/javascript" src="//use.typekit.net/wtt0gtr.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    @yield('script')

</body>

</html>
