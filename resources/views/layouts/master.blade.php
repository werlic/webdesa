<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	{{-- <link rel="icon" type="image/png" href="{{asset('assets')}}/paper_img/favicon.ico"> --}}
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title') | {{ config('app.name') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ asset('bootstrap3') }}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/ct-paper.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    @yield('style')
</head>
<body>
    @yield('body')

    <script src="{{asset('assets')}}/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="{{asset('assets')}}/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="{{ asset('bootstrap3') }}/js/bootstrap.js" type="text/javascript"></script>

	<!--  Plugins -->
	<script src="{{asset('assets')}}/js/ct-paper-checkbox.js"></script>
	<script src="{{asset('assets')}}/js/ct-paper-radio.js"></script>
	<script src="{{asset('assets')}}/js/bootstrap-select.js"></script>
	<script src="{{asset('assets')}}/js/bootstrap-datepicker.js"></script>

    <script src="{{asset('assets')}}/js/ct-paper.js"></script>
    @yield('script')
</body>
</html>
