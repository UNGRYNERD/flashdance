<header class="banner">
  <div class="container">    
    <div class="row">
      <div class="col-6">
        <nav class="navbar">
          <button class="navbar-toggler">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
           <button class="navbar-toggler">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <?php if(has_nav_menu('primary_navigation')): ?>
              <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']); ?>

            <?php endif; ?>
            
            <a href="#" class="button button__pink">comprar entradas</a>
            
            <div class="box-social">
              <a href="" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-6 text-right">
        <a href="#" class="button button__pink">comprar entradas</a>
      </div>
    </div>
  </div>
</header>


