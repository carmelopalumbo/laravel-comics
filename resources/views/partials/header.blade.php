<div class="start-box">
    <div class="text">
        <p>DC POWER VISA</p>
        <p>ADDITIONAL DC SITES</p>
    </div>
</div>

<header>
    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo" />
    <ul>
        <li>
            <a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}"
                href="{{ route('characters') }}">CHARACTERS</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                href="{{ route('comics') }}">COMICS</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                href="{{ route('movies') }}">MOVIES</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}"
                href="{{ route('games') }}">GAMES</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}"
                href="{{ route('collectibles') }}">COLLECTIBLES</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}"
                href="{{ route('videos') }}">VIDEOS</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">FANS</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">SHOP</a>
        </li>
    </ul>
    <input type="search" name="Search" id="" placeholder="Search">
</header>

<div class="jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="jumbotron" />
</div>
