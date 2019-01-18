<section class="section-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <h1 class="title__primary"><?php echo App::title(); ?></h1>
        <?php if(get_field('introduccion')): ?>
          <div class="content">
            <?php the_field('introduccion') ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>