<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="box-header" style="background-image: url('<?= App\asset_path('images/bg_flashdance_header.jpg'); ?>');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
              <?php if( the_custom_logo() != 0 ): ?>
                <?php echo e(the_custom_logo()); ?>

              <?php endif; ?>
          </div>
          <div class="col-12">
            <div id="timer"></div>
          </div>
        </div>
      </div> 
    </section>
    <section class="box-video">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 text-center">
            <h2 class="title__primary">making of flashdance</h2>
            <img class="video-content" src="<?= App\asset_path('images/video_vimeo.jpg'); ?>" alt="">
            <a href="#" class="button button__pink">Reserva tus entradas</a>
          </div>
        </div>
      </div>
    </section>
    <section class="box-content box-text-img box-separator">
       <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="content">
              <h2 class="title__primary">Flashdance</h2>
              <p><strong>Flashdance</strong> cuenta la inspiradora historia de <strong>Alex Owens</strong>, una chica de 18 años, soldadora de día y bailarina exótica de noche, que sueña con ir a la prestigiosa Shipley Dance Academy y convertirse en una bailarina profesional. Cuando un romance complica sus ambiciones, lo aprovecha para impulsar su sueño, pero no sin antes superar obstáculos y conflictos que pondrán a prueba su determinación y que harán tambalear las paredes de su mundo.</p>

              <p>El musical, basado en la película de Paramount Pictures (Guión de Tom Hedley y Joe Eszterhas, Historia de Tom Hedley) es un alegato a la superación personal, al poder de aferrarse a los sueños por encima de todo, a la fe sin límites, casi capaz de ser eclipsada por una fuerte historia de amor imposible entre dos personas, con vidas muy distintas, de diferente clase social y raíces radicalmente opuestas, que pondrá a prueba sus sentimientos más profundos.</p>

              <p>Selladoor Worldwide es la productora detrás de la superproducción de <strong>Flashdance El Musical</strong>. JC Storm, Director de Producción, ha creado un espectáculo único que combina la esencia de la película de los 80´s Flashdance, con un estilo moderno y múltiples estilos de baile.</p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <img class="img__clip" src="<?= App\asset_path('images/foto_flashdance.jpg'); ?>">
          </div>
        </div>
      </div>
    </section>
    <section class="box-content box-text-img">
       <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="content">
              <h2 class="title__primary">El espectáculo</h2>
              <p><strong>Flashdance El Musical</strong> llega a los escenarios de España. <strong>El clásico de la época de los 80´s</strong> cobrará vida en el teatro en marzo de 2019. Una producción totalmente innovadora que combina grandes temas musicales, con sorprendentes coreografías, sin dejar de lado la gran historia de superación y lucha por un sueño de la joven Alex y su romance con Nick, su jefe.</p>

              <p>Tras su éxito en Londres aterriza en España con una producción renovada para hacer revivir al público los clásicos musicales de la película que marcó una de las épocas más rompedora de la historia.</p>

              <p>Volveremos a ver a Alex Owens luchar por sus sueños, sin importar quien se interponga en su camino, y demostrar que puede conseguir todas sus ambiciones por mérito propio con esfuerzo y pasión por el baile.
            </div>
          </div>
          <div class="col-12 col-md-6">
            <img class="img__clip" src="<?= App\asset_path('images/foto_flashdance_espectaculo.jpg'); ?>">
          </div>
        </div>
      </div>
    </section>
    <section class="box-instagram">
      <div class="container">
        <div class="row justify-content-between align-items-baseline">
          <div class="col-6">
            <i class="fab fa-instagram"></i>
          </div>
          <div class="col-6 text-right">
            <a href="#" class="link-to">
              ver en instagram<i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-insta">
            <?php echo do_shortcode('[insta-gallery id="1"]');?>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
  
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
        <article class="col-12 col-md-4 box-article">
          <a href="#">
            <div class="img-post" style="background-image: url('<?= App\asset_path('images/foto_flashdance_espectaculo.jpg'); ?>')"></div>
            <h3>Elenco Flashdance el musical</h3>
            <p>El pasado 27 de noviembre de 2018 fue un día muy especial ya que pudimos conocer al elenco oficial que hará que Flashdance, una de las películas más taquilleras de los 80´s, cobre vida en los escenarios españoles en forma de musical.</p>
          </a>
        </article>
        <article class="col-12 col-md-4 box-article">
          <a href="#">
            <div class="img-post" style="background-image: url('<?= App\asset_path('images/foto_flashdance_espectaculo.jpg'); ?>')"></div>
            <h3>Elenco Flashdance el musical</h3>
            <p>El pasado 27 de noviembre de 2018 fue un día muy especial ya que pudimos conocer al elenco oficial que hará que Flashdance, una de las películas más taquilleras de los 80´s, cobre vida en los escenarios españoles en forma de musical.</p>
          </a>
        </article>
        <article class="col-12 col-md-4 box-article">
          <a href="#">
            <div class="img-post" style="background-image: url('<?= App\asset_path('images/foto_flashdance_espectaculo.jpg'); ?>')"></div>
            <h3>Elenco Flashdance el musical</h3>
            <p>El pasado 27 de noviembre de 2018 fue un día muy especial ya que pudimos conocer al elenco oficial que hará que Flashdance, una de las películas más taquilleras de los 80´s, cobre vida en los escenarios españoles en forma de musical.</p>
          </a>
        </article>
      </div>
    </div>
  </section>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>