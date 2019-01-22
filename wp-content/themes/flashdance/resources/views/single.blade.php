@extends('layouts.app')

@section('content')
  @if(is_singular('post'))
    @include('partials.header-blog')
  @endif
  @while(have_posts()) @php the_post() @endphp
    
    <section class="post-content">
      <div class="container">
        <div class="row">
         <div class="col-lg-1">
           <div class="share-box">
             <p class="title-share">Comparte</p>
             <!-- addthis -->
              <!-- Go to www.addthis.com/dashboard to customize your tools -->
              <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c45926293880d50"></script>
           </div>
         </div>
          <div class="col-12 col-lg-10 ">
            <div class="col-post">
              @if ( has_post_thumbnail() )
               <div class="post_thumbnail">
                  @php the_post_thumbnail('full') @endphp
                </div>
              @endif 

              <div class="row justify-content-center">
                <div class="col-11 col-md-10">
                  <div class="content">
                    @include('partials.content-single-'.get_post_type())
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  @endwhile
@endsection