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
        <section id="header-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc_logo">
        </section>
        <section id="header-menu">
            <ul>
                <li>Characters</li>
                <li>Comics</li>
                <li>Movies</li>
                <li>TV</li>
                <li>Games</li>
                <li>Collectibles</li>
                <li>Videos</li>
                <li>Fans</li>
                <li>News</li>
                <li>Shop</li>
            </ul>
        </section>
</header>
</body>
</html>
