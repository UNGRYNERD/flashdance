@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <section class="box-content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          @if (!have_posts())
              {{ __('Lo sentimos, pero la página que intentabas ver no existe.', 'sage') }}
            {!! get_search_form(false) !!}
          @endif

          @while(have_posts()) @php the_post() @endphp
            @include('partials.content-search')
          @endwhile

          @php global $wp_query; @endphp
          @if( $wp_query->max_num_pages > 1 )
            <div class="row row-ajax">
              <div class="col-12 text-center">
               <img src="@asset('images/icons/line-separator.svg')" alt="line">
                <div class="loadmore_button">
                  <img src="@asset('images/icons/load-icon.svg')" alt="load button icon">
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection
