<li class="nav-item {{ Request::is('restaurants*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('restaurants.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Restaurants</span>
    </a>
</li>
