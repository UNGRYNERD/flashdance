@extends('layouts.app')

@section('content')
  @include('partials.header-blog')
  @while(have_posts()) @php the_post() @endphp
    
    <section class="gallery-content">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <div class="entry-content">
              <h1>{{ get_the_title() }}</h1>

              @if(get_field('galeria'))
                <div class="count-gallery">
                  <img src="@asset('images/icons/camera-icon.svg')" alt="camera icon">
                  <p>{{ count(get_field('galeria')) . _x(' fotos', 'sage') }}</p>
                </div>
              @endif

              @php the_content() @endphp

            </div>

            @if(get_field('galeria'))
              <div class="row grid">
                @foreach(get_field('galeria') as $item)
                  <div class="col-12 col-md-4 grid-item">
                    <a class="image-link" href="{{ $item['url'] }}" data-title="{{$item['title']}}">
                      <img src="{{$item['sizes']['large']}}" alt="{{$item['alt']}}" title="{{$item['title']}}" >
                    </a>
                  </div>
                @endforeach
              </div>
            @endif

          </div>
        </div>
      </div>
    </section>
  @endwhile
@endsection