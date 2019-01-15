<header class="header-banner">
  <div class="container">    
    <div class="row justify-content-between">
      <div class="col-4">
        <nav class="navbar">
          <button class="navbar-toggler">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
           <button class="navbar-toggler">
              <span></span>
              <span></span>
              <span></span>
            </button>
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
            @endif
            
            <a href="#" class="button button__pink">comprar entradas</a>
            
            <div class="box-social">
              <a href="" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
      @if(!is_front_page())
       <div class="col-4">
          @if ( the_custom_logo() != 0 )
            {{ the_custom_logo() }}
          @endif
        </div>
      @endif
      <div class="col-4 text-right">
        <a href="#" class="button button__pink">comprar entradas</a>
      </div>
    </div>
  </div>
  
  @if(is_front_page())
    <div class="box-header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center logo-home">
              @if ( the_custom_logo() != 0 )
                {{ the_custom_logo() }}
              @endif
          </div>
          <div class="col-12 col-md-10">
            <div class="row justify-content-center row-countdown" countdown data-date="Mar 01 2019 21:30:00">
              <div class="col-md-2">
                <span data-days>0</span>
                <p>dias</p>
              </div>
              <div class="col-md-2">
                <span data-hours>0</span>
                <p>horas</p>
              </div>
              <div class="col-md-2">
                <span data-minutes>0</span>
                <p>minutos</p>
              </div>
              <div class="col-md-2">
                <span data-seconds>0</span>
                <p>segundos</p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  @endif

</header>


