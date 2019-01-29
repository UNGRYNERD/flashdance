{{--
  Template Name: Opiniones
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="blog-header">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <h1 class="title__primary">{!! App::title() !!}</h1>
          </div>
          <div class="col-auto">
            <div class="filter-icon">
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="box-opiniones">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-12">
            <div id="filters">
                <p data-filter="*">
                  {{ __('Todos', 'sage') }}
                </p>
                <p data-filter=".prensa">
                {{ __('Notas de prens', 'sage') }}a
                </p>
                <p data-filter=".critica">
                  {{ __('Criticas de prensa', 'sage') }}
                </p>
                <p data-filter=".usuarios">
                  {{ __('Opiniones usuarios', 'sage') }}
                </p>
            </div>
          </div>
        </div>
        <div class="row grid">

          <?php 
            $args = array(
              'post_type' => 'opiniones',
              'posts_per_page' => -1,
            );

            query_posts($args);  
          ?>
          @if(have_posts())
            @while(have_posts())
              @php the_post(); $elencoID = get_the_ID($post);@endphp
                @if( get_field('tipo') == 'prensa')
                  @php $tipo = ' prensa' @endphp
                @elseif( get_field('tipo') == 'critica')
                  @php $tipo = ' critica' @endphp
                @elseif( get_field('tipo') == 'usuarios')
                  @php $tipo = ' usuarios' @endphp
                @else 
                  @php $tipo = ' ' @endphp
                @endif
                <div class="col-12 col-md-6 col-lg-4 grid-item {{ $tipo }}">
                  <div class="opinion-content">
                    @if(get_field('tipo') == 'critica' )
                      <img src="@asset('images/icons/critica-icon.svg')" alt="critica icon">
                    @elseif(get_field('tipo') == 'usuarios' )
                      <img src="@asset('images/icons/usuario-icon.svg')" alt="usuario icon">
                    @elseif(get_field('tipo') == 'prensa' )
                      <img src="@asset('images/icons/prensa-icon.svg')" alt="prensa icon">
                    @endif
                    @php the_content() @endphp
                    @if( get_field('tipo') == 'prensa')
                      @if( get_field('tipo_de_nota_de_prensa') == 'fichero')
                        @php $prensa = get_field('archivo_nota_de_prensa')['url']; @endphp
                      @elseif( get_field('tipo_de_nota_de_prensa') == 'url')
                        @php $prensa = get_field('url_nota_de_prensa'); @endphp
                      @endif
                      <a href="{{$prensa}}" class="button button__pink" target="_blank">
                        @if(get_field('titulo'))
                          {{ get_field('titulo') }}
                        @endif
                      </a>
                    @endif
                  </div>
                  @if( (get_field('tipo') == 'critica') || (get_field('tipo') == 'usuarios'))
                    <div class="opinion-footer">
                        <p>
                          @if(get_field('titulo'))
                            {{ get_field('titulo') }}
                          @endif
                          @if(get_field('subtitulo'))
                            <span>, {{ get_field('subtitulo') }}</span>
                          @endif
                        </p>
                      </div>
                    @endif
                </div>
            @endwhile
            @else
              {{ __('Lo sentimos pero no hay resultados.', 'sage') }}
          @endif
          @php wp_reset_query() @endphp
        </div>
      </div>
    </section>
  @endwhile
@endsection
