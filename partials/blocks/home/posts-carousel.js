document.addEventListener( 'DOMContentLoaded', function () {

    // Create the main slider.
    var postsSlider = new Splide( '#posts-slider', {
    	type       : 'loop',
    	pagination : true,
    	arrows     : true,
      rewind     : true,
      gap    : '1rem',
      perPage: 4,
    	breakpoints: {
    		'640': {
    			perPage: 2,
    			gap    : '1rem',
    		},
    		'480': {
    			perPage: 1,
    			gap    : '1rem',
    		},
      }
    } ).mount();


} );
