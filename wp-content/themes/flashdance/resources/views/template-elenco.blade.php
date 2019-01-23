{{--
  Template Name: Elenco
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
  @endwhile
  <section class="box-elenco box-separator box-separator__invert">
    <div class="container">
      <div class="row">
        <?php 
          $args = array(
            'post_type' => 'elenco',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'puesto',
                'value' => 'elenco',
                'compare' => 'LIKE',
              )
            )
          );

          query_posts($args);  
        ?>
        @if(have_posts())
          @while(have_posts())
            @php the_post(); $elencoID = get_the_ID($post);@endphp
              <div class="col-12 col-md-3">
                <a data-target="#team-{{$elencoID}}" href="#team-{{$elencoID}}" class="team-elenco team-ajax" data-id="{{$elencoID}}">
                  @if(has_post_thumbnail())
                    @php the_post_thumbnail('large') @endphp
                  @endif
                  <div class="box-info">
                    <p>{{ the_title() }}
                      @if(get_field('subtitulo'))
                        <span>{{ get_field('subtitulo') }}</span>
                      @endif
                    </p>
                  </div>
                </a>
              </div>
          @endwhile
          @else
            {{ __('Lo sentimos pero no hay resultados.', 'sage') }}
        @endif
        @php wp_reset_query() @endphp
      </div>
    </div>

    <div class="container">
      <div class="row">
       <div class="col-12">
         <h2 class="title__primary">{{ get_field('titulo_bloque_equipo') }}</h2>
       </div>
        <?php 
          $args = array(
            'post_type' => 'elenco',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'puesto',
                'value' => 'elenco',
                'compare' => 'NOT LIKE',
              )
            )
          );

          query_posts($args);  
        ?>
        @if(have_posts())
          @while(have_posts())
            @php the_post(); $elencoID = get_the_ID($post); @endphp
              <div class="col-12 col-md-3">
                <a data-target="#team-{{$elencoID}}" href="#team-{{$elencoID}}" class="team team-ajax" data-id="{{$elencoID}}">
                  <div class="box-info">
                    <p>{{ the_title() }}
                      @if(get_field('subtitulo'))
                        <span>@php the_field('subtitulo') @endphp</span>
                      @endif
                    </p>
                  </div>
                </a>
              </div>
          @endwhile
          @else
            {{ __('Lo sentimos pero no hay resultados.', 'sage') }}
        @endif
        @php wp_reset_query() @endphp
      </div>
    </div>

    <div id="modal-elenco">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="box-info"></div>
          </div>
          <div class="col-12 col-md-9">
            <div class="contenido-elenco"></div>
          </div>
          <a href="#" class="close_modal">
            <span></span>
            <span></span>
          </a>
        </div>
      </div>
    </div>
</section>
 
<script>

// AJAX ELENCO
jQuery(document).ready(function($){
  $('.team-ajax').on('click', function(e){
    e.preventDefault();


    $('.close_modal').click(function(e){
      e.preventDefault();
      $('#modal-elenco').removeClass('open');
      $('body').removeClass('modal-open');
      $('.info-ajax').remove();
    })

      var data = {
        id: $(this).data('id')
      };

      $.post( "<?php echo get_template_directory_uri();?>/get-elenco.php", data ,function (response) {
        var res = JSON.parse(response);

        if(typeof res.text === "undefined") {
          var texto = '...';
        } else {
          var texto = res.text;
        }

        setTimeout(function(){
            $('#modal-elenco').addClass('open');
            $('body').addClass('modal-open');
            $('#modal-elenco .box-info').append('<div class="info-ajax"><p>'+ res.name +'<span>'+res.puesto+'</span><p></div>');
            $('#modal-elenco .contenido-elenco').append('<div class="info-ajax">'+ texto +'</div>');
        }, 300);

      });

  });
  //end ajax
})

</script>
  
@endsection


