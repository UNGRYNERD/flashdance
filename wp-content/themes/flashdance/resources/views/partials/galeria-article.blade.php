<div class="col-12 col-md-6 col-lg-4 grid-item">
  <article @php post_class() @endphp>
    <a class="see-more" href="@php the_permalink() @endphp">
      @if ( has_post_thumbnail() )
        @php the_post_thumbnail('large') @endphp
      @endif 
      <div class="content">
        <header>
          <h2 class="entry-title">{{ get_the_title() }}</h2>
          @include('partials/entry-meta')
        </header>
        <div class="entry-summary">
          @if(get_field('galeria'))
            <div class="count-gallery">
              <img src="@asset('images/icons/camera-icon.svg')" alt="camera icon">
              <p>{{ count(get_field('galeria')) . _x(' fotos', 'sage') }}</p>
            </div>
          @endif
          <p class="see-more">{{ __('leer más', 'sage') }}</p>
        </div>
      </div>   
    </a> 
  </article>
</div>