{{--
  Template Name: Galerías
--}}

@extends('layouts.app')

@section('content')
  @include('partials.header-blog')
  @if (!have_posts())
    {{ __('Lo sentimos, no se encontraron resultados.', 'sage') }}
    {!! get_search_form(false) !!}
  @endif

  <section class="blog-content">
    <div class="container">
      <div class="row grid">

        <?php 
            $args = array(
              'post_type' => 'galerias',
              'posts_per_page' => -1,
            );

            query_posts($args);  
          ?>

          @if(have_posts())
            @while (have_posts()) @php the_post() @endphp
              @include('partials.galeria-article')
                @php global $wp_query; @endphp

            @endwhile
          @endif

      </div>
      @if( $wp_query->max_num_pages > 1 )
        <div class="row row-ajax">
          <div class="col-12 text-center">
           <img src="@asset('images/icons/line-separator.svg')" alt="line">
            <div class="loadmore_button">
              <img src="@asset('images/icons/load-icon.svg')" alt="load button icon">
            </div>
          </div>
        </div>
      @endif
    </div>
  </section>

@endsection
