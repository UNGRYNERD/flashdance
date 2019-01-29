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

  // MAGNIFICPOPUP
  $('.image-link').magnificPopup({
    type: 'image',
    gallery:{
      enabled:true,
      tCounter: '<span class="mfp-counter">%curr% de %total%</span>'
    },

    image: {
      titleSrc: function(item) {
            return item.el.data('title');
         },

      markup: '<div class="mfp-figure">'+
                '<div class="mfp-img"></div>'+
                '<div class="mfp-bottom-bar">'+
                  '<p class="mfp-title"></p>'+
                  '<div class="mfp-counter"></div>'+
                '</div>'+
              '</div>',
    }
  });

    // FUNCTION ALTOS CON ACTUAL
    $('.carousel').each(function(){
      var carousel = $(this);
      var altocontent = 0;
      var contenido = $(this).find('.carousel-item');

      $(contenido).each(function(){
      if( $(this).actual('innerHeight') > altocontent) {
          altocontent = $(this).actual('innerHeight');
      }
      }).promise().done(function () {
        setTimeout(function(){
          $(carousel).find('.carousel-item').css('height', altocontent); 
        },800);
      });
    });

    $(window).resize(function(){
      $('.carousel').each(function(){

        var carousel = $(this);
        var altocontent = 0;
        var contenido = $(this).find('.carousel-item');

        $(contenido).each(function(){
          if( $(this).actual('innerHeight') > altocontent) {
            altocontent = $(this).actual('innerHeight');
          }
        }).promise().done(function () {
          setTimeout(function(){
            $(carousel).find('.carousel-item').css('height', altocontent); 
          },800);
        });
      });
    });
  
})
