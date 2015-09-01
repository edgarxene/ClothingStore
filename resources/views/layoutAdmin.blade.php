<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/sb-admin-2.css') !!} 
    {!! Html::style('assets/css/metisMenu.min.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!} 
    <!--{!! Html::style('assets/css/demo.css') !!} 
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/menuAdmin.css') !!}-->

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>



    @include('partials.layout.navbarAdmin')
    @yield('content')



    <!-- Scripts -->

    {!! Html::script('assets/js/jquery.min.js') !!}
    <!--{!! Html::script('assets/js/bootstrap.js') !!}-->
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/metisMenu.min.js') !!}
    {!! Html::script('assets/js/sb-admin-2.js') !!} 
    {!! Html::script('assets/js/utilsjquery.js') !!} 
   





</body>
</html>