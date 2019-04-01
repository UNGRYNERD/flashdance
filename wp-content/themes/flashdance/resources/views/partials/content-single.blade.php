<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @if( !is_woocommerce() )
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="@if( is_woocommerce() ) {{ ' single__product__content' }} @else {{ ' entry-content' }} @endif">
    @php the_content() @endphp
  </div>
</article>
