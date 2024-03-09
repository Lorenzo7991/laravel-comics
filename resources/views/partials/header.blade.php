<header>
    
    <section id="header-logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc_logo">
    </section>
    <section id="header-menu">
        <nav>
            <ul>
                @foreach($menuItems as $menuItem => $routeName)
                    <li>
                        <a href="{{ route($routeName) }}" class="{{ Request::route()->getName() == $routeName ? 'active' : '' }}">
                        {{ strtoupper($menuItem) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </section>
</header>
