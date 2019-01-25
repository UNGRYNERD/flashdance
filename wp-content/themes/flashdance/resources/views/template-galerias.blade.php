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
              'posts_per_page' => -1
            );

            $newargs = new WP_Query($args);
          ?>

          @if($newargs->have_posts())
            @while ($newargs->have_posts()) @php $newargs->the_post() @endphp
              @include('partials.galeria-article')
            @endwhile
          @endif
      </div>

    </div>
  </section>

@endsection