@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @if( is_shop() || is_checkout() || is_account_page() )
      @include('partials.header-blog')
    @else
      @include('partials.page-header')
    @endif
    <section class="@if(is_shop() || is_checkout() || is_account_page() ) {{ 'box-woocommerce '}} @endif">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="@if(!is_shop()) {{ 'entry-content '}} @endif">
              @include('partials.content-page')
            </div>
          </div>
        </div>
      </div>
    </section>
  @endwhile
@endsection
