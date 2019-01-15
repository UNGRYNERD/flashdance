<section class="box-last-post">
  <div class="container">
    <div class="row justify-content-between align-items-baseline">
      <div class="col-6">
        <h2 class="title__primary">última hora</h2>
      </div>
      <div class="col-6 text-right">
        <a href="#" class="link-to">
          ir a noticias<i class="fas fa-chevron-right"></i>
        </a>
      </div>
    </div>
    <div class="row">
     <?php $args = array (
       'post_type' => 'post',
       'post_per_page' => 3,
       );
     
     query_posts($args); ?>
     
     <?php if(have_posts()): ?>
       <?php while(have_posts()): ?>
         <?php the_post() ; $img = get_the_post_thumbnail_url( null, 'large' ); ?>
         
          <?php if($img): ?>
            <?php 
              $imgurl = $img; 
              $noimg = '';
            ?>
          <?php else: ?>
            <?php
              $imgurl= '';
              $noimg = ' no-img';
            ?>
          <?php endif; ?>
         
          <article class="col-12 col-md-4 box-article">
            <a href="<?php the_permalink(); ?>">
              <div class="img-post <?php echo e($noimg); ?>" style="background-image: url('<?php echo $img ?>')"></div>
              <h3><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words( get_the_content(), 42, '...' ); ?></p>
            </a>
          </article>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</section>