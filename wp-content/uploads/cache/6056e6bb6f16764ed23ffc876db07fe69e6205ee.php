<section class="box-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <?php if(get_field('titulo_newsletter', 'option')): ?>
        <h2 class="title__primary no__line">
          <?php echo e(get_field('titulo_newsletter', 'option')); ?>

        </h2>
        <?php endif; ?>
         <?php if(get_field('subtitulo_newsletter', 'option')): ?>
          <p><?php the_field('subtitulo_newsletter', 'option') ?></p>
        <?php endif; ?>
      </div>
      <div class="col-12 col-lg-8">
        <?php echo do_shortcode('[mc4wp_form id="14"]') ?>
      </div>
    </div>
  </div>
</section>
 
<footer class="content-info">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-6">
        <?php if( the_custom_logo() != 0 ): ?>
          <?php echo e(the_custom_logo()); ?>

        <?php endif; ?>
      </div>
      <div class="col-12 col-md-6 text-center text-md-right">
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
    </div>
    <?php if(get_field('logos', 'option')): ?>
      <div class="row justify-content-between row-logos">
        <?php $__currentLoopData = get_field('logos', 'option'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <div class="col-6 col-lg-3">
            <img src="<?php echo e($item['imagen']['sizes']['medium']); ?>" alt="<?php echo e($item['imagen']['alt']); ?>" alt="<?php echo e($item['imagen']['title']); ?>">
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-12 text-center">
        <p class="footer-legales">
           <?php if(get_field('texto_pie_footer', 'option')): ?>
            <?php the_field('texto_pie_footer', 'option') ?>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>