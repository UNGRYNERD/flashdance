@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    {{ __('Lo sentimos, no se encontraron resultados.', 'sage') }}
    {!! get_search_form(false) !!}
  @endif
  <section class="blog-content">
    <div class="container">
      <div class="row grid">
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-search')
        @endwhile
      </div>
    </div>
</section>

  {!! get_the_posts_navigation() !!}
@endsection

