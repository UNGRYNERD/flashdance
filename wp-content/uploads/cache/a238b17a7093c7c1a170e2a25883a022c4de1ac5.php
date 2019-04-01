<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php if( is_shop() || is_checkout() || is_account_page() ): ?>
      <?php echo $__env->make('partials.header-blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
      <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <section class="<?php if(is_shop() || is_checkout() || is_account_page() ): ?> <?php echo e('box-woocommerce '); ?> <?php endif; ?>">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="<?php if(!is_shop()): ?> <?php echo e('entry-content '); ?> <?php endif; ?>">
              <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>