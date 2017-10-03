<header class="banner">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center">
    <a class="home-link" href="{{ home_url('/') }}">
      <svg height="200" width="200" viewBox="0 0 100 100">
        <text class="logo-letter" text-anchor="middle" x="50%" y="80">S</text>
        <circle class="logo-shape logo-expand" cx="49%" cy="54" r="35" fill="transparent" stroke-width="3" />
      </svg>
    </a>
    <div class="menu-wrapper d-flex flex-column">
      <nav class="nav-social order-md-2">
        {!! jetpack_social_menu() !!}
      </nav>
      <nav class="nav-primary order-md-1">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
      </nav>
    </div>
  </div>
</header>
