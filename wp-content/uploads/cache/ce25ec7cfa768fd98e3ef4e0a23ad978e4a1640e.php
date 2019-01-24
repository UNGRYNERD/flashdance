<?php $__env->startSection('content'); ?>
  <?php if(is_singular('post')): ?>
    <?php echo $__env->make('partials.header-blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    
    <section class="post-content">
      <div class="container">
        <div class="row">
         <div class="col-12 col-lg-1">
           <div class="share-box">
             <p class="title-share"><?php echo e(__('Comparte', 'sage')); ?></p>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_hq60"></div>
           </div>
         </div>
          <div class="col-12 col-lg-10 ">
            <div class="col-post">
              <?php if( has_post_thumbnail() ): ?>
               <div class="post_thumbnail">
                  <?php the_post_thumbnail('full') ?>
                </div>
              <?php endif; ?> 

              <div class="row justify-content-center">
                <div class="col-11 col-md-10">
                  <div class="content">
                    <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c45926293880d50"></script>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>