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

      $('.filter-icon a').click(function(e){
        e.preventDefault();
        $('#filters').toggleClass('open');
      })

      $('.grid').isotope({ filter: '*' });
      $('#filters').on( 'click', 'p', function() {
        console.log('click filter');
          
        var filterValue = $(this).attr('data-filter');
        $('.grid').isotope({ filter: filterValue });            
      });
    }, 800)

    $('#filters').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'p', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });
  }
  
})
