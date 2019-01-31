@php $tipo = get_field('tipo_pagina_entradas', 'option'); print_r($tipo); @endphp
@if( $tipo == 'url' )
  @php $url = get_field('boton_comprar_entradas', 'option'); $target = '_blank'; @endphp
@elseif ( $tipo == 'pag' )
  @php $url = get_permalink(get_field('pagina_entradas', 'option')); $target = '_self';  @endphp
@endif

<header class="header-banner">
  <div class="container">    
    <div class="row justify-content-between">
      @if(!is_front_page())
      <div class="col-4">
        <nav class="navbar">
          <button class="navbar-toggler">
          <span></span>
          <span></span>
          <span></span>
          </button>
        </nav>
      </div>
       <div class="col-8 col-md-4 text-center">
          @if ( the_custom_logo() != 0 )
            {{ the_custom_logo() }}
          @endif
        </div>
        <div class="col-md-4 text-right d-none d-lg-block">
          <a href="{{ $url }}" class="button button__pink" target="{{ $target }}">
            {{get_field('texto_boton_comprar', 'option')}}
          </a>
        </div>
      @else
        <div class="col-2">
          <nav class="navbar">
            <button class="navbar-toggler">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </nav>
        </div>
        <div class="col-10 text-right">
          <div class="d-none d-md-block d-lg-block d-xl-block">
            <a href="{{ $url }}" class="button button__pink" target="{{ $target }}">
              {{get_field('texto_boton_comprar', 'option')}}
            </a>
          </div>
          <div class="logo-home-top d-xl-none d-lg-none d-md-none">
            @if ( the_custom_logo() != 0 )
              {{ the_custom_logo() }}
            @endif
          </div>
        </div>

      @endif
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

            <a href="{{ $url }}" class="button button__pink d-md-none d-lg-none d-xl-none" target="{{ $target }}">
              {{get_field('texto_boton_comprar', 'option')}}
            </a>

          </div>
          <div class="col-12 col-md-10">
            <div class="row justify-content-center row-countdown" countdown data-date="Mar 01 2019 21:30:00">
              <div class="col-md-2 col-auto">
                <span data-days>0</span>
                <p>dias</p>
              </div>
              <div class="col-md-2 col-auto">
                <span data-hours>0</span>
                <p>horas</p>
              </div>
              <div class="col-md-2 col-auto">
                <span data-minutes>0</span>
                <p>minutos</p>
              </div>
              <div class="col-md-2 col-auto">
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

<div class="collapse navbar-collapse" id="navbarContent">
  <button class="navbar-toggler">
    <span></span>
    <span></span>
    <span></span>
  </button>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
  @endif
  
  <a href="{{ $rul }}" class="button button__pink" target="{{ $target }}">
    {{get_field('texto_boton_comprar', 'option')}}
  </a>
  
  <div class="box-social">
    @if(get_field('instagram', 'option'))
      <a href="@php the_field('instagram', 'option') @endphp" class="social-icon" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
    @endif
    @if(get_field('facebook', 'option'))
      <a href="@php the_field('facebook', 'option') @endphp" class="social-icon" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
    @endif
    @if(get_field('twitter', 'option'))
      <a href="@php the_field('twitter', 'option') @endphp" class="social-icon" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
    @endif
  </div>
</div>

<div class="box-loader">
  <img src="@asset('images/logo_flashdance.png');" alt="arrow slider left">
</div>
