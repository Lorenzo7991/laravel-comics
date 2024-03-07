<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico')}}" type="img/ico">
    
    {{-- Import Vite  --}}
    @vite('resources\js\app.js')
</head>
<body>
   <header>
   <div class="container">
    <img src="{{ asset('img/dc-logo.png') }}" alt="dc_logo">
</div>


</header>
</body>
</html>
