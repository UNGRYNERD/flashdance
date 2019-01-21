<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <section class="box-content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php if(!have_posts()): ?>
            <?php echo e(__('Lo sentimos, pero la página que intentabas ver no existe.', 'sage')); ?>

            <?php echo get_search_form(false); ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>