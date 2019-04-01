@extends('layouts.app')

@section('content')
  <section class="blog-header">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto col-md-10">
          <h1 class="title__primary">
            <?php woocommerce_page_title(); ?>
          </h1>
        </div>
        
        @if( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )
        @php $count = WC()->cart->cart_contents_count; @endphp
          <div class="col-2 text-right">
            <a href="{{ esc_url(wc_get_cart_url()) }}" class="cart-icon">
              @if ( $count > 0 )        
                <span class="cart-contents-count">
                  @php echo esc_html( $count ); @endphp
                </span>         
              @endif
              <img src="@asset('images/icons/shopping-bag.svg')" alt="cart icon">
            </a>
          </div>
        @endif
      </div>
    </div>
  </section>
  
  @while(have_posts()) @php the_post() @endphp
    <section class="single__product">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="content">
              @include('partials.content-single-'.get_post_type())
            </div>
          </div>
        </div>
      </div>
    </section>

  @endwhile
@endsection
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c45926293880d50"></script>