<li class="nav-item">
    <a href="{{ route($routeName) }}" class="p-2 nav-link {{ request()->routeIs($routeName) ? 'active' : '' }}">
        {{ $text }}
    </a>
</li>
