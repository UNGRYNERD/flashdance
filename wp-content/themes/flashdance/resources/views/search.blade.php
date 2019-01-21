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

          {{-- get_the_posts_navigation() --}}
        </div>
      </div>
    </div>
  </section>
@endsection
