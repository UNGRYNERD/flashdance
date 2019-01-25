<section class="blog-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6">
        <h1 class="title__primary">
          @if(is_home() || is_singular('post'))
            {{ __('BLOG', 'sage') }}
          @elseif(is_page(1210) || is_singular('galerias'))
            {{ __('galerías', 'sage') }}
          @endif
          </h1>
      </div>
      @if( is_singular(array('post', 'galerias')) )
        <div class="col-6 text-right">
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
    </div>
  </div>
</section>