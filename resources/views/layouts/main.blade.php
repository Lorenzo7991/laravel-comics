<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico')}}" type="img/ico">
    <!-- Import Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

    
    {{-- Import Vite  --}}
    @vite('resources\js\app.js')
</head>
<body>
    @include('partials.header', ['menuItems' => $menuItems])
       
    
</body>
</html>
