{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
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
                  <a href="#" class="button button__pink">Reserva tus entradas</a>
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
      
      @endforeach
    @endif

    <section class="box-testimonials">
      <div class="container">
        <div class="row">
          <div class="col-12">
                
              <div id="carouseltestimonials" class="carousel slide carousel-fade" data-ride="carousel">
               
                <div class="row justify-content-center">
                  <div class="col-10 col-carousel">
                    <img class="carousel-icon" src="@asset('images/icons/blockquoute-icon.svg')" alt="blockquote icon">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="content">
                          <p>“La Familia Addams está llena de encanto, humor inteligente y sorpresas que explican por qué es un ÉXITO en su tour internacional.”</p>
                          <div class="author">
                            <p>BARBARA WALTERS <span>The View</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="content">
                          <p>“La Familia Addams está llena de encanto, humor inteligente y sorpresas que explican por qué es un ÉXITO en su tour internacional. La Familia Addams está llena de encanto, humor inteligente y sorpresas que explican por qué es un ÉXITO en su tour internacional.”</p>
                          <div class="author">
                            <p>BARBARA WALTERS <span>The View</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <a class="carousel-control carousel-control-prev" href="#carouseltestimonials" role="button" data-slide="prev">
                  <img src="@asset('images/icons/arrow-left.svg');" alt="arrow slider left">
                </a>
                <a class="carousel-control carousel-control-next" href="#carouseltestimonials" role="button" data-slide="next">
                  <img src="@asset('images/icons/arrow-right.svg');" alt="arrow slider right">
                </a>
              </div>

            
          </div>
        </div>
      </div>
    </section>
    
  @endwhile
@endsection
