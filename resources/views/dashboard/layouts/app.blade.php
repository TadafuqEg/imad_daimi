<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="icon" type="image/x-icon" href="{{ app('logo') }}" style="transform: scale(1.2);">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('dashboard/style.css') }}">
    <!-- My CSS -->
  
</head>

<body>
    @include('dashboard.layouts.side_menu')
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        @include('dashboard.layouts.header')
        <!-- NAVBAR -->
        @yield('content')
        <!-- MAIN -->
        
        <!-- MAIN -->
    </section>

    
    <script src="{{ asset('dashboard/script.js') }}"></script>
    @stack('scripts')
</body>

</html>