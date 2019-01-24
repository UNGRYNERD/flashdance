{{--
  Template Name: Estática bloques
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @php $bloques = get_field('anadir_bloque');@endphp
      
      @if($bloques)
        @foreach($bloques as $item)
        
          {{-- Bloque texto --}}
          @if($item['acf_fc_layout'] == 'anadir_bloque_texto')
            <section class="box-content box-text">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-md-10">
                    @if($item['titulo'])
                      <h2 class="title__primary">{{ $item['titulo'] }}</h2>
                    @endif
                    @if($item['texto'])
                      <div class="entry-content">
                        @php echo $item['texto']; @endphp
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </section>
          @endif

          {{-- Bloque texto --}}
          @if($item['acf_fc_layout'] == 'anadir_galeria')
            @if($item['galeria'])
              <section class="box-slide box-slide__img">
                <div class="container-fluid">

                        <div id="carouselslide" class="carousel slide carousel-fade" data-ride="carousel">
                          <div class="row justify-content-center">
                            <div class="col-12 col-carousel">
                              <div class="carousel-inner">

                                @foreach( $item['galeria'] as $key => $opinion )
                                  @if($key == 0)
                                    @php $active = ' active';@endphp
                                  @else
                                    @php $active = ' '; @endphp
                                  @endif
                                  <div class="carousel-item {{ $active }}">
                                    <div class="bg-item d-block w-100" style="background-image: url('{{ $opinion['url'] }}')"></div>
                                  </div>
                                @endforeach
                              </div>
                          </div>
                        </div>
                        
                        <a class="carousel-control carousel-control-prev" href="#carouselslide" role="button" data-slide="prev">
                          <img src="@asset('images/icons/arrow-left-white.svg');" alt="arrow slider left">
                        </a>
                        <a class="carousel-control carousel-control-next" href="#carouselslide" role="button" data-slide="next">
                          <img src="@asset('images/icons/arrow-right-white.svg');" alt="arrow slider right">
                        </a>

                      </div>

                </div>
              </section>
            @endif
          @endif

        @endforeach
      @endif
      
  @endwhile  
@endsection
