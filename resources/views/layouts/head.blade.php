<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>{{ setting('site_name') }} | @yield('title')</title>
   <!-- Custom fonts for this template-->
   <link href="{{ asset('vendor/larasnap/css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!-- Custom styles for this template-->
   <link href="{{ asset('vendor/larasnap/css/larasnap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/larasnap/css/larasnap-custom.css') }}" rel="stylesheet">
   <style>
   .bg-gradient-primary {
		background: {{ config('larasnap.admin_sidebar.background') }};
	}
   </style>
   @yield('css')
</head>