<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <a href="{{ route('bank.index') }}" class="nav-link {{ Request::is('bank') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bars"></i>
        <p>Bank</p>
    </a>
    <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>User</p>
        
    </a>

    <a href="{{ route('persona.index') }}" class="nav-link {{ Request::is('persona') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Persona</p>
    </a>
</li>
