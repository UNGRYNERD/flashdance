@extends('layouts.app')

@section('content')
  @include('partials.header-blog')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <section class="blog-content">
    <div class="container">
      <div class="row grid">
        @while (have_posts()) @php the_post() @endphp
          @include('partials.blog-article')
        @endwhile
      </div>
    </div>
  </section>

  {!! get_the_posts_navigation() !!}
@endsection
