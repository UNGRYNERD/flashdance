<div class="col-12 col-md-6 col-lg-4 grid-item">
  <article @php post_class() @endphp>
    <a class="see-more" href="@php the_permalink() @endphp">
      @if ( has_post_thumbnail() )
        @php the_post_thumbnail('large') @endphp
      @endif 
      <div class="content">
        <header>
          <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
          @include('partials/entry-meta')
        </header>
        <div class="entry-summary">
            <p>@php echo wp_trim_words( get_the_content(), 42, '...' ); @endphp</p>
            <p class="see-more">{{ __('leer más', 'sage') }}</p>
        </div>
      </div>   
    </a> 
  </article>
</div>