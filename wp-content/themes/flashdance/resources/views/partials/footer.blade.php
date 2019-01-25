<section class="box-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        @if(get_field('titulo_newsletter', 'option'))
        <h2 class="title__primary no__line">
          {{ get_field('titulo_newsletter', 'option') }}
        </h2>
        @endif
         @if (get_field('subtitulo_newsletter', 'option'))
          <p>@php the_field('subtitulo_newsletter', 'option') @endphp</p>
        @endif
      </div>
      <div class="col-12 col-lg-8">
        @php echo do_shortcode('[mc4wp_form id="14"]') @endphp
      </div>
    </div>
  </div>
</section>
 
<footer class="content-info">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-6">
        @if ( the_custom_logo() != 0 )
          {{ the_custom_logo() }}
        @endif
      </div>
      <div class="col-12 col-md-6 text-center text-md-right">
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
    </div>
    @if (get_field('logos', 'option'))
      <div class="row row-logos align-items-center">
        @if(get_field('titulo_produccion', 'option') || get_field('logos_produccion', 'option'))
          @if (count (get_field('logos_produccion', 'option')) > 1 || count (get_field('logos_colaboran', 'option')) > 3)
            @php $col = ' col-lg-12'; @endphp
          @else 
            @php $col = ' col-lg-6'; @endphp
          @endif
          <div class="col-12 col-logos {{ $col }} ">
            @if(get_field('titulo_produccion', 'option') )
              <p>{{ get_field('titulo_produccion', 'option') }}</p>
              @foreach(get_field('logos_produccion', 'option') as $item)
                <img src="{{$item['sizes']['medium']}}" alt="{{$item['alt']}}" alt="{{$item['title']}}">
              @endforeach
            @endif
          </div>
        @endif

        @if(get_field('titulo_colaboran', 'option') || get_field('logos_colaboran', 'option'))
          <div class="col-12 col-logos col-colaboran {{ $col }}">
            @if(get_field('titulo_colaboran', 'option') )
              <p>{{ get_field('titulo_colaboran', 'option') }}</p>
              @foreach(get_field('logos_colaboran', 'option') as $item)
                <img src="{{$item['sizes']['medium']}}" alt="{{$item['alt']}}" alt="{{$item['title']}}">
              @endforeach
            @endif
          </div>
        @endif

      </div>
    @endif
    <div class="row">
      <div class="col-12 text-center">
        <p class="footer-legales">
           @if (get_field('texto_pie_footer', 'option'))
            @php the_field('texto_pie_footer', 'option') @endphp
          @endif
        </p>
      </div>
    </div>
  </div>
</footer>