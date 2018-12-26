<header class="banner">
  <div class="container">
    <a class="brand" href="<?php echo e(home_url('/')); ?>">
      <?php if( the_custom_logo() ): ?>
        <?php echo e(the_custom_logo()); ?>    
      <?php else: ?>
        <?php echo e(get_bloginfo('name', 'display')); ?>

      <?php endif; ?>
    </a>
    
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
