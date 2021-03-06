<section class="box-last-post">
  <div class="container">
    <div class="row justify-content-between align-items-baseline">
      <div class="col-12 col-md-6">
        <h2 class="title__primary">{{ __('última hora', 'sage') }}</h2>
      </div>
      <div class="col-12 col-md-6 text-md-right">
        <a href="{{get_permalink(get_option('page_for_posts')) }}" class="link-to">
          {{ __('ir a noticias', 'sage') }}<i class="fas fa-chevron-right"></i>
        </a>
      </div>
    </div>
    <div class="row">
     @php $args = array (
       'post_type' => 'post',
       'posts_per_page' => '3',
       );
     
     query_posts($args); @endphp
     
     @if(have_posts())
       @while(have_posts())
         @php the_post() ; $img = get_the_post_thumbnail_url( null, 'large' ); @endphp
         
          @if($img)
            @php 
              $imgurl = $img; 
              $noimg = '';
            @endphp
          @else
            @php
              $imgurl= '';
              $noimg = ' no-img';
            @endphp
          @endif
         
          <article class="col-12 col-md-4 box-article">
            <a href="@php the_permalink(); @endphp">
              <div class="img-post {{$noimg}}" style="background-image: url('@php echo $img @endphp')"></div>
              <h3>@php the_title(); @endphp</h3>
              <p>@php echo wp_trim_words( get_the_content(), 42, '...' ); @endphp</p>
            </a>
          </article>
          @endwhile
        @endif
    </div>
  </div>
</section>