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

    <div class="row row-logos align-items-center">
      <?php if(get_field('titulo_produccion', 'option') || get_field('logos_produccion', 'option')): ?>
        <?php if(count (get_field('logos_produccion', 'option')) > 1 || count (get_field('logos_colaboran', 'option')) > 3): ?>
          <?php $col = ' col-lg-12'; ?>
        <?php else: ?> 
          <?php $col = ' col-lg-6'; ?>
        <?php endif; ?>
        <div class="col-12 col-logos <?php echo e($col); ?> ">
          <?php if(get_field('titulo_produccion', 'option') ): ?>
            <p><?php echo e(get_field('titulo_produccion', 'option')); ?></p>
            <?php $__currentLoopData = get_field('logos_produccion', 'option'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <img src="<?php echo e($item['sizes']['medium']); ?>" alt="<?php echo e($item['alt']); ?>" alt="<?php echo e($item['title']); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if(get_field('titulo_colaboran', 'option') || get_field('logos_colaboran', 'option')): ?>
        <div class="col-12 col-logos col-colaboran <?php echo e($col); ?>">
          <?php if(get_field('titulo_colaboran', 'option') ): ?>
            <p><?php echo e(get_field('titulo_colaboran', 'option')); ?></p>
            <?php $__currentLoopData = get_field('logos_colaboran', 'option'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <img src="<?php echo e($item['sizes']['medium']); ?>" alt="<?php echo e($item['alt']); ?>" alt="<?php echo e($item['title']); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

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