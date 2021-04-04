<header class="banner">
  <div class="container">
    <div class="brand-cont">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/s&s_logo.png')" alt="">
      </a>
    </div>
    <nav class="nav-primary d-none d-lg-block">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="hamburger d-block d-lg-none">
      @svg('hamburger')
    </div>
  </div>
</header>
