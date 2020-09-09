<header>

    {{-- Navbar --}}
    <div class="navbar">

        {{-- logo --}}
        <div class="logo">
            <span>bool_<br>_tune</span>
        </div>
        {{-- fine logo --}}

        {{-- navigation --}}
        <nav class="navigation">

            <ul class="nav-menu">
                <li class="nav-li">
                    <a class="nav-link" href="{{ route('albums.index') }}">album</a>
                </li>
                <li class="nav-li">
                    <a class="nav-link" href="#">artisti</a>
                </li>
                <li class="nav-li">
                    <a class="nav-link" href="{{ route('songs.index') }}">canzoni</a>
                </li>
            </ul>

        </nav>
        {{-- fine navigation --}}
    </div>
    {{-- Fine Navbar --}}
</header>
