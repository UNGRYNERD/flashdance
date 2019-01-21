/* eslint-disable */
jQuery(function($){
	$('.loadmore_button').click(function(){
 
		var button = $(this),
        data = {
			'action': 'loadmore',
			'query': loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : loadmore_params.current_page
		};
 
		$.ajax({ // you can also use $.post here
			url : loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
        button.toggleClass('rotate');
			},
			success : function( data ){
				if( data ) { 
          var container = $('.grid');
          var items = $(data);

          container.append(items).isotope('appended', items);
          container.imagesLoaded().progress(function(){
            container.isotope('layout');
          });
          
          button.toggleClass('rotate');
          
					loadmore_params.current_page++;
 
					if ( loadmore_params.current_page == loadmore_params.max_page ) 
						$('.row-ajax').remove(); // if last page, remove the button
				} else {
					$('.row-ajax').remove(); // if no data, remove the button as well
				}
			}
		});
	});
});