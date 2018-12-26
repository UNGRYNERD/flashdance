<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
      @if ( the_custom_logo() )
        {{ the_custom_logo() }}    
      @else
        {{ get_bloginfo('name', 'display') }}
      @endif
    </a>
    
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
