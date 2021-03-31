document.addEventListener( 'DOMContentLoaded', function () {

    // Create the main slider.
    var postsSlider = new Splide( '#posts-slider', {
    	type       : 'fade',
    	pagination : true,
    	arrows     : true,
    	cover      : true,
      rewind      : true,
      // perPage: 4,
      breakpoints : {
    		'600': {
    			perPage: 1,
    		}
    	}
    } ).mount();


} );
