{{--
  Template Name: Entradas
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
  @endwhile
  <section class="box-entradas blog-content">
    <div class="container">
      <div class="row grid">
        @php $bloques = get_field('anadir_bloque'); @endphp
      
        @if($bloques)
          @foreach($bloques as $item)
          
            {{-- Bloque ciudades entradas --}}
            @if($item['acf_fc_layout'] == 'anadir_ciudad')
              <div class="col-12 col-md-6 col-lg-4 grid-item">
                <div class="content">
                  <img src="@asset('images/icons/entradas-icon.svg')" alt="entradas icon">

                  @if($item['subtitulo'])
                    <h3>{{ $item['texto_boton'] }}</h3>
                  @endif

                  @if($item['ciudad'])
                    <h2>{{ $item['ciudad'] }}</h2>
                  @endif

                  @if($item['fechas'])
                    <p>{{ $item['fechas'] }}</p>
                  @endif

                  @if($item['texto_boton'] && $item['url_boton'])
                    <a href="{{ $item['url_boton'] }}" class="button button__pink" target="_blank">
                      {{ $item['texto_boton'] }}
                    </a>
                  @endif

                </div>
              </div>
            @endif
          @endforeach
        @endif

      </div>
    </div>
  </section>
  
@endsection


