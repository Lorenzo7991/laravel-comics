<nav>
    <ul>
        @foreach($menuItems as $menuItem)
            <li>{{ $menuItem }}</li>
        @endforeach
    </ul>
</nav>