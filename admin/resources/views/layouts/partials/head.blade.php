
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<meta name="csrf-token" content="{{ csrf_token() }}"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <!--=============== css  ===============-->	
		
		<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" >
        <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
    
        <link type="text/css" rel="stylesheet" href="{{ asset('css/dashboard-style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
		 <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
		
     
        <!--=============== favicons ===============-->

		
            		
	
        <link rel="shortcut icon" href="{{ asset('images/fav.ico') }}">
	@yield('css')