{{--
  Template Name: Home
--}}

@extends('layouts.app')

@php $tipo = get_field('tipo_pagina_entradas', 'option'); @endphp
@if( $tipo == 'url' )
  @php $url = get_field('boton_comprar_entradas', 'option'); $target = '_blank'; @endphp
@elseif ( $tipo == 'pag' )
  @php $url = get_permalink(get_field('pagina_entradas', 'option')); $target = '_self';  @endphp
@endif

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @if ( has_post_thumbnail() && get_field('activar_cuenta_atras') != 1 )
      <div class="post_thumbnail_home">
        @php the_post_thumbnail('full') @endphp
      </div>
    @endif 

    @php $bloques = get_field('anadir_bloques'); @endphp
    
    @if($bloques)
      @foreach($bloques as $item)
      
        {{-- Bloque video --}}
        @if($item['acf_fc_layout'] == 'bloque_video')
          <section class="box-video">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                  @if($item['titulo'])
                    <h2 class="title__primary no__line">{{ $item['titulo'] }}</h2>
                  @endif
                  @if($item['iframe_video'])
                    <div class="box-iframe">
                      @php echo $item['iframe_video'] @endphp
                    </div>
                  @endif
                  @if($item['titulo_boton'])
                    <a href="{{ $url }}" class="button button__pink" target="{{ $target }}">
                      {{ $item['titulo_boton'] }}
                    </a>
                  @endif
                </div>
              </div>
            </div>
          </section>
        @endif

        {{-- Bloque texto con imagen --}}
        @if($item['acf_fc_layout'] == 'bloque_texto_con_imagen')
          @if($item['anadir_separador'])
            @php $separador = ' box-separator'; @endphp
          @else
            @php $separador = ' '; @endphp
          @endif
          <section class="box-content box-text-img {{ $separador }}">
             <div class="container">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                  <div class="content">
                    @if($item['titulo'])
                      <h2 class="title__primary">{{ $item['titulo'] }}</h2>
                    @endif
                    @if($item['texto'])
                      @php echo $item['texto'] @endphp
                    @endif
                  </div>
                </div>
                @if($item['imagen'])
                  <div class="col-12 col-md-12 col-lg-6">
                    <img class="img__clip" src="{{ $item['imagen']['sizes']['large'] }}" alt="{{ $item['imagen']['alt'] }}" title="{{ $item['imagen']['title'] }}">
                  </div>
                @endif
              </div>
            </div>
          </section>
        @endif

        {{-- Bloque instagram --}}
        @if($item['acf_fc_layout'] == 'bloque_instagram')
          <section class="box-instagram">
            <div class="container">
              <div class="row justify-content-between align-items-baseline">
                <div class="col-6">
                  <i class="fab fa-instagram"></i>
                </div>
                @if($item['titulo_enlace'] && $item['url_instagram'])
                  <div class="col-6 text-right">
                    <a href="{{ $item['url_instagram'] }}" class="link-to" target="_blank">
                      {{ $item['titulo_enlace'] }}<i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                @endif
              </div>
              <div class="row">
                <div class="col-12 col-insta">
                  <?php echo do_shortcode('[insta-gallery id="1"]');?>
                </div>
              </div>
            </div>
          </section>       
        @endif

        {{-- Bloque opiniones --}}
        @if($item['acf_fc_layout'] == 'bloque_opiniones')
          <section class="box-slide">
            <div class="container">
              <div class="row">
                <div class="col-12">
                    <div id="carouselslide" class="carousel slide" data-ride="carousel">
                      <div class="row justify-content-center">
                        <div class="col-10 col-carousel">
                          <img class="carousel-icon" src="@asset('images/icons/blockquoute-icon.svg')" alt="blockquote icon">
                          <div class="carousel-inner">

                            @foreach( $item['anadir_opinion'] as $key => $opinion )
                              @if($key == 0)
                                @php $active = ' active'; @endphp
                              @else
                                @php $active = ' '; @endphp
                              @endif
                              <div class="carousel-item {{ $active }}">
                                <div class="content d-block w-100">
                                  <p>{{ $opinion['opinion']->post_content }}</p>
                                  <div class="author">
                                    @if( (get_field('tipo', $opinion['opinion']->ID ) == 'critica') || (get_field('tipo', $opinion['opinion']->ID) == 'usuarios'))
                                        <p>
                                          @if(get_field('titulo', $opinion['opinion']->ID))
                                            {{ get_field('titulo', $opinion['opinion']->ID) }}
                                          @endif
                                          @if(get_field('subtitulo', $opinion['opinion']->ID))
                                            <span>, {{ get_field('subtitulo', $opinion['opinion']->ID) }}</span>
                                          @endif
                                        </p>
                                    @endif

                                    @if( get_field('tipo', $opinion['opinion']->ID ) == 'prensa')
                                      @if( get_field('tipo_de_nota_de_prensa', $opinion['opinion']->ID) == 'fichero')
                                        @php $prensa = get_field('archivo_nota_de_prensa', $opinion['opinion']->ID)['url']; @endphp
                                      @elseif( get_field('tipo_de_nota_de_prensa', $opinion['opinion']->ID) == 'url')
                                        @php $prensa = get_field('url_nota_de_prensa', $opinion['opinion']->ID); @endphp
                                      @endif
                                      <a href="{{ $prensa }}" class="button button__blue" target="_blank">
                                        @if(get_field('titulo', $opinion['opinion']->ID))
                                          {{ get_field('titulo', $opinion['opinion']->ID) }}
                                        @endif
                                      </a>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          </div>
                      </div>
                    </div>
                    
                    <a class="carousel-control carousel-control-prev" href="#carouselslide" role="button" data-slide="prev">
                      <img src="@asset('images/icons/arrow-left.svg');" alt="arrow slider left">
                    </a>
                    <a class="carousel-control carousel-control-next" href="#carouselslide" role="button" data-slide="next">
                      <img src="@asset('images/icons/arrow-right.svg');" alt="arrow slider right">
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif
      
      @endforeach
    @endif

    
  @endwhile
@endsection
