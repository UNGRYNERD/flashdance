<article <?php post_class() ?>>
  <header>
    <h1 class="entry-title"><?php echo e(get_the_title()); ?></h1>
    <?php if( !is_woocommerce() ): ?>
      <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
  </header>
  <div class="<?php if( is_woocommerce() ): ?> <?php echo e(' single__product__content'); ?> <?php else: ?> <?php echo e(' entry-content'); ?> <?php endif; ?>">
    <?php the_content() ?>
  </div>
</article>
