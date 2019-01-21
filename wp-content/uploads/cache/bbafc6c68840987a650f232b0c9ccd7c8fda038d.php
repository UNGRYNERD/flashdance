<header class="header-banner">
  <div class="container">    
    <div class="row justify-content-between">
      <?php if(!is_front_page()): ?>
      <div class="col-4">
        <nav class="navbar">
          <button class="navbar-toggler">
          <span></span>
          <span></span>
          <span></span>
          </button>
        </nav>
      </div>
       <div class="col-8 col-md-4 text-center">
          <?php if( the_custom_logo() != 0 ): ?>
            <?php echo e(the_custom_logo()); ?>

          <?php endif; ?>
        </div>
        <div class="col-md-4 text-right d-none d-lg-block">
          <?php if(get_field('boton_comprar_entradas', 'option')): ?>
            <a href="<?php echo e(get_field('boton_comprar_entradas', 'option')); ?>" class="button button__pink">
              <?php echo e(get_field('texto_boton_comprar', 'option')); ?>

            </a>
          <?php endif; ?>
        </div>
      <?php else: ?>
        <div class="col-2">
          <nav class="navbar">
            <button class="navbar-toggler">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </nav>
        </div>
        <div class="col-10 text-right">
          <div class="d-none d-md-block d-lg-block d-xl-block">
            <?php if(get_field('boton_comprar_entradas', 'option')): ?>
              <a href="<?php echo e(get_field('boton_comprar_entradas', 'option')); ?>" class="button button__pink">
                <?php echo e(get_field('texto_boton_comprar', 'option')); ?>

              </a>
            <?php endif; ?>
          </div>
          <div class="logo-home-top d-xl-none d-lg-none d-md-none">
            <?php if( the_custom_logo() != 0 ): ?>
              <?php echo e(the_custom_logo()); ?>

            <?php endif; ?>
          </div>
        </div>

      <?php endif; ?>
    </div>
  </div>
  
  <?php if(is_front_page()): ?>
    <div class="box-header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center logo-home">
            <?php if( the_custom_logo() != 0 ): ?>
              <?php echo e(the_custom_logo()); ?>

            <?php endif; ?>
            <?php if(get_field('boton_comprar_entradas', 'option')): ?>
              <a href="<?php echo e(get_field('boton_comprar_entradas', 'option')); ?>" class="button button__pink d-md-none d-lg-none d-xl-none">
                <?php echo e(get_field('texto_boton_comprar', 'option')); ?>

              </a>
            <?php endif; ?>
          </div>
          <div class="col-12 col-md-10">
            <div class="row justify-content-center row-countdown" countdown data-date="Mar 01 2019 21:30:00">
              <div class="col-md-2 col-auto">
                <span data-days>0</span>
                <p>dias</p>
              </div>
              <div class="col-md-2 col-auto">
                <span data-hours>0</span>
                <p>horas</p>
              </div>
              <div class="col-md-2 col-auto">
                <span data-minutes>0</span>
                <p>minutos</p>
              </div>
              <div class="col-md-2 col-auto">
                <span data-seconds>0</span>
                <p>segundos</p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  <?php endif; ?>

</header>

<div class="collapse navbar-collapse" id="navbarContent">
  <button class="navbar-toggler">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <?php if(has_nav_menu('primary_navigation')): ?>
    <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']); ?>

  <?php endif; ?>
  
  <?php if(get_field('boton_comprar_entradas', 'option')): ?>
    <a href="<?php echo e(get_field('boton_comprar_entradas', 'option')); ?>" class="button button__pink">
      <?php echo e(get_field('texto_boton_comprar', 'option')); ?>

    </a>
  <?php endif; ?>
  
  <div class="box-social">
    <?php if(get_field('instagram', 'option')): ?>
      <a href="<?php the_field('instagram', 'option') ?>" class="social-icon" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
    <?php endif; ?>
    <?php if(get_field('facebook', 'option')): ?>
      <a href="<?php the_field('facebook', 'option') ?>" class="social-icon" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
    <?php endif; ?>
    <?php if(get_field('twitter', 'option')): ?>
      <a href="<?php the_field('twitter', 'option') ?>" class="social-icon" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
    <?php endif; ?>
  </div>
</div>

<div class="box-loader">
  <img src="<?= App\asset_path('images/logo_flashdance.png'); ?>;" alt="arrow slider left">
</div>
