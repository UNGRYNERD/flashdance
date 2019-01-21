/* eslint-disable */
$(document).ready(function(){
  
  //PRELOADER
  $('.box-loader').fadeIn(200);
  setTimeout(function(){
      $('.box-loader').fadeOut(400);
  },700);

  // MENU TOOGLE
  $('.navbar-toggler').click(function(){
    console.log('click');
    $(this).toggleClass('open');
    $('#navbarContent').toggleClass('open');
  });

  // ISOTOPE
  if ($('.grid').length > 0) {
    setTimeout(function(){
      $('.grid').isotope({
        itemSelector : '.grid-item',
        isFitWidth: true,
      });
    }, 800)
  }
  
})
