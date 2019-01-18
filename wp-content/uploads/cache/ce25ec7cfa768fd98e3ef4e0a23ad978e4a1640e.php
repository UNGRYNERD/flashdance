<?php $__env->startSection('content'); ?>
  <?php if(is_singular('post')): ?>
    <?php echo $__env->make('partials.header-blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    
    <section class="post-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-post">
            <?php if( has_post_thumbnail() ): ?>
             <div class="post_thumbnail">
                <?php the_post_thumbnail('full') ?>
              </div>
            <?php endif; ?> 
            
            <div class="row justify-content-center">
              <div class="content">
                <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>