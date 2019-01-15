@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section class="post-header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title__primary">BLOG</h1>
        </div>
      </div>
    </div>
  </section>
    
    <section class="post-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-post">
            @if ( has_post_thumbnail() )
             <div class="post_thumbnail">
                @php the_post_thumbnail('full') @endphp
              </div>
            @endif 
            
            <div class="row justify-content-center">
              <div class="content">
                @include('partials.content-single-'.get_post_type())
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  @endwhile
@endsection