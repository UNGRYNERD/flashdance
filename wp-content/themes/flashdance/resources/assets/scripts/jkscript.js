/* eslint-disable */
$(document).ready(function(){

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
