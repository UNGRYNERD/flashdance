<section class="box-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <h2 class="title__primary">
          no te pierdas nada
        </h2>
        <p>Suscríbete para estar al día de todas las novedades de nuestro musical.</p>
      </div>
      <div class="col-12 col-md-8">
        <?php echo do_shortcode('[mc4wp_form id="14"]') ?>
      </div>
    </div>
  </div>
</section>
 
<footer class="content-info">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-6">
        <?php if( the_custom_logo() != 0 ): ?>
          <?php echo e(the_custom_logo()); ?>

        <?php endif; ?>
      </div>
      <div class="col-6 text-right">
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
    <div class="row justify-content-between row-logos">
      <div class="col-auto">
        <img src="<?= App\asset_path('images/logo/logo_sellador.png'); ?>;" alt="">
      </div>
      <div class="col-auto">
        <img src="<?= App\asset_path('images/logo/logo_marika.png'); ?>;" alt="">
      </div>
      <div class="col-auto">
        <img src="<?= App\asset_path('images/logo/logo_yamaha.png'); ?>;" alt="">
      </div>
      <div class="col-auto">
        <img src="<?= App\asset_path('images/logo/logo_pays.png'); ?>;" alt="">
      </div>      
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <p class="footer-legales">COPYRIGHT SELLADOOR WORLDWIDE 2018 - ALL RIGHTS RESERVED. C/ LEGANITOS, 47 - 7º, 28013 EDIFICIO COMPOSTELA TFN:  <a href="">917945600</a> FAX: 917945800</p>
      </div>
    </div>
  </div>
</footer>