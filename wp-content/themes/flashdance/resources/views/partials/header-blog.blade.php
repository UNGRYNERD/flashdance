<section class="blog-header">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-auto col-md-10">
        <h1 class="title__primary">
          @if(is_home() || is_singular('post'))
            {{ __('BLOG', 'sage') }}
          @elseif(is_singular('galerias'))
            {{ __('galerías', 'sage') }}
          @elseif(is_page())
            {!! App::title() !!}
          @endif
          </h1>
      </div>
      @if( is_singular(array('post', 'galerias')) )
        <div class="col-auto col-md-2 text-right">
          @php                
            $prev_post = get_next_post();
            $next_post = get_previous_post();
          @endphp
          @if($prev_post)
            <a class="post-link prev-link" href="<?php echo get_permalink($prev_post->ID); ?>">
              <img src="@asset('images/icons/arrow-left-pink.svg');" alt="arrow slider left">
            </a>
          @endif
          @if($next_post)
            <a class="post-link next-link" href="<?php echo get_permalink($next_post->ID); ?>">
              <img src="@asset('images/icons/arrow-right-pink.svg');" alt="arrow slider left">
            </a>
          @endif
        </div>
      @endif
      @if( is_woocommerce() )
        @if( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )
        @php $count = WC()->cart->cart_contents_count; @endphp
          <div class="col-2 text-right">
            <a href="@php echo esc_url(wc_get_cart_url()); @endphp" class="cart-icon">
              @if ( $count > 0 )        
                <span class="cart-contents-count">
                  @php echo esc_html( $count ); @endphp
                </span>         
              @endif
              <img src="@asset('images/icons/shopping-bag.svg')" alt="cart icon">
            </a>
          </div>
        @endif
      @endif
    </div>
  </div>
</section>