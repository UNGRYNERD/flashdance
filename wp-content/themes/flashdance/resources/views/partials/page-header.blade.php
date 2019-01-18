<section class="section-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <h1 class="title__primary">{!! App::title() !!}</h1>
        @if(get_field('introduccion'))
          <div class="content">
            @php the_field('introduccion') @endphp
          </div>
        @endif
      </div>
    </div>
  </div>
</section>