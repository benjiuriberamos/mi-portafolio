<header class="header">
    <div class="header__wancho">
        <div class="h__logo">
            <img src="{{ asset('assets/img/mylogo.png') }}" alt="Logo" height="90">
        </div>
        <div class="header_items">
            <ul class="header_list">
                <li class="header_item">
                    <a href="{{ route('symfony') }}" class="header_link">Symfony</a>
                </li>
                <li class="header_item">
                    <a href="{{ route('laravel') }}" class="header_link">Laravel</a>
                </li>
                <li class="header_item">
                    <a href="{{ route('node') }}" class="header_link">Javascript</a>
                </li>
            </ul>
        </div>
    </div>
</header>