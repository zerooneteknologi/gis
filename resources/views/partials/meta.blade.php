<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $setting->tittleAdmin }} | @yield('tittle', 'Login')</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="{{ $setting->descWeb}}">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->
    <link rel="icon" href="{{ $setting->logo }}" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/fonts/feather.css">
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/fonts/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/css/style.css" id="main-style-link">

    {{-- stack --}}
    @stack('css')

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->