@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="entry-content">
            @include('partials.content-page')
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection