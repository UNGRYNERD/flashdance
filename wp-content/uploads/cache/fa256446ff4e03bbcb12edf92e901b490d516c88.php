<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php $bloques = get_field('anadir_bloques'); ?>
    
    <?php if($bloques): ?>
      <?php $__currentLoopData = $bloques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
        
        <?php if($item['acf_fc_layout'] == 'bloque_video'): ?>
          <section class="box-video">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                  <?php if($item['titulo']): ?>
                    <h2 class="title__primary no__line"><?php echo e($item['titulo']); ?></h2>
                  <?php endif; ?>
                  <?php if($item['iframe_video']): ?>
                    <div class="box-iframe">
                      <?php echo $item['iframe_video'] ?>
                    </div>
                  <?php endif; ?>
                  <?php if($item['titulo_boton']): ?>
                    <a href="<?php echo e($item['url_externa']); ?>" class="button button__pink" target="_blank"><?php echo e($item['titulo_boton']); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>

        
        <?php if($item['acf_fc_layout'] == 'bloque_texto_con_imagen'): ?>
          <?php if($item['anadir_separador']): ?>
            <?php $separador = ' box-separator'; ?>
          <?php else: ?>
            <?php $separador = ' '; ?>
          <?php endif; ?>
          <section class="box-content box-text-img <?php echo e($separador); ?>">
             <div class="container">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                  <div class="content">
                    <?php if($item['titulo']): ?>
                      <h2 class="title__primary"><?php echo e($item['titulo']); ?></h2>
                    <?php endif; ?>
                    <?php if($item['texto']): ?>
                      <?php echo $item['texto'] ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php if($item['imagen']): ?>
                  <div class="col-12 col-md-12 col-lg-6">
                    <img class="img__clip" src="<?php echo e($item['imagen']['sizes']['large']); ?>" alt="<?php echo e($item['imagen']['alt']); ?>" title="<?php echo e($item['imagen']['title']); ?>">
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </section>
        <?php endif; ?>

        
        <?php if($item['acf_fc_layout'] == 'bloque_instagram'): ?>
          <section class="box-instagram">
            <div class="container">
              <div class="row justify-content-between align-items-baseline">
                <div class="col-6">
                  <i class="fab fa-instagram"></i>
                </div>
                <?php if($item['titulo_enlace'] && $item['url_instagram']): ?>
                  <div class="col-6 text-right">
                    <a href="<?php echo e($item['url_instagram']); ?>" class="link-to" target="_blank">
                      <?php echo e($item['titulo_enlace']); ?><i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                <?php endif; ?>
              </div>
              <div class="row">
                <div class="col-12 col-insta">
                  <?php echo do_shortcode('[insta-gallery id="1"]');?>
                </div>
              </div>
            </div>
          </section>       
        <?php endif; ?>

        
        <?php if($item['acf_fc_layout'] == 'bloque_opiniones'): ?>
          <section class="box-slide">
            <div class="container">
              <div class="row">
                <div class="col-12">
                    <div id="carouselslide" class="carousel slide" data-ride="carousel">
                      <div class="row justify-content-center">
                        <div class="col-10 col-carousel">
                          <img class="carousel-icon" src="<?= App\asset_path('images/icons/blockquoute-icon.svg'); ?>" alt="blockquote icon">
                          <div class="carousel-inner">

                            <?php $__currentLoopData = $item['anadir_opinion']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $opinion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($key == 0): ?>
                                <?php $active = ' active'; ?>
                              <?php else: ?>
                                <?php $active = ' '; ?>
                              <?php endif; ?>
                              <div class="carousel-item <?php echo e($active); ?>">
                                <div class="content d-block w-100">
                                  <p><?php echo e($opinion['opinion']->post_content); ?></p>
                                  <div class="author">
                                    <?php if( (get_field('tipo', $opinion['opinion']->ID ) == 'critica') || (get_field('tipo', $opinion['opinion']->ID) == 'usuarios')): ?>
                                        <p>
                                          <?php if(get_field('titulo', $opinion['opinion']->ID)): ?>
                                            <?php echo e(get_field('titulo', $opinion['opinion']->ID)); ?>

                                          <?php endif; ?>
                                          <?php if(get_field('subtitulo', $opinion['opinion']->ID)): ?>
                                            <span>, <?php echo e(get_field('subtitulo', $opinion['opinion']->ID)); ?></span>
                                          <?php endif; ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if( get_field('tipo', $opinion['opinion']->ID ) == 'prensa'): ?>
                                      <?php if( get_field('tipo_de_nota_de_prensa', $opinion['opinion']->ID) == 'fichero'): ?>
                                        <?php $prensa = get_field('archivo_nota_de_prensa', $opinion['opinion']->ID)['url']; ?>
                                      <?php elseif( get_field('tipo_de_nota_de_prensa', $opinion['opinion']->ID) == 'url'): ?>
                                        <?php $prensa = get_field('url_nota_de_prensa', $opinion['opinion']->ID); ?>
                                      <?php endif; ?>
                                      <a href="<?php echo e($prensa); ?>" class="button button__blue" target="_blank">
                                        <?php if(get_field('titulo', $opinion['opinion']->ID)): ?>
                                          <?php echo e(get_field('titulo', $opinion['opinion']->ID)); ?>

                                        <?php endif; ?>
                                      </a>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                      </div>
                    </div>
                    
                    <a class="carousel-control carousel-control-prev" href="#carouselslide" role="button" data-slide="prev">
                      <img src="<?= App\asset_path('images/icons/arrow-left.svg'); ?>;" alt="arrow slider left">
                    </a>
                    <a class="carousel-control carousel-control-next" href="#carouselslide" role="button" data-slide="next">
                      <img src="<?= App\asset_path('images/icons/arrow-right.svg'); ?>;" alt="arrow slider right">
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>