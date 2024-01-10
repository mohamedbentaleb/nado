<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/back/assets/extensions/choices.js/public/assets/back/assets/styles/choices.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/back/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/back/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/back/assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets/back/assets/css/shared/iconly.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
	<style type="text/css" class="init">

    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @yield('link')
    <!-- Scripts -->
    <!-- @ vite(['resources/css/app.css', 'resources/js/app.js'])-->

</head>
