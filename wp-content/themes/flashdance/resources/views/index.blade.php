@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
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
@endsection
