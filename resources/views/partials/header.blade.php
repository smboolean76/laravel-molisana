<header>
    <div class="container text-center">
        <img src="{{ Vite::asset('resources/img/marchio-sito-test.png') }}" alt="Logo Molisana">
        <nav>
            <ul class="list-unstyled d-flex justify-content-center">
                <li><a class="menu-item" href="{{ route('home') }}">Home</a></li>
                <li><a class="menu-item menu-item--active" href="#">Prodotti</a></li>
                <li><a class="menu-item" href="{{ route('news') }}">News</a></li>
            </ul>
        </nav>
    </div>
</header>