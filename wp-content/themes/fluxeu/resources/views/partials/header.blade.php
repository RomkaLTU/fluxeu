<header class="header">
    <div class="row no-gutters h-100">
        <div class="col header-left">
            <div class="header-left-inner">
                <a class="brand" href="{{ home_url('/') }}">
                    <img src="@asset('images/logo.png')" alt="{{ get_bloginfo('name', 'display') }}">
                </a>
                <div class="header-content-hero">
                    <h1>DARBAS OLANDIJOJE</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Donec mattis nibh placerat, ornare lacus at, venenatis sapien.</p>
                </div>
            </div>
        </div>
        <div class="col header-right">
            <div class="header-right-inner">
                <nav>
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                </nav>
            </div>
        </div>
    </div>
</header>
