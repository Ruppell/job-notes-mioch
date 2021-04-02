document.addEventListener( 'DOMContentLoaded', function () {

  var elms = document.getElementsByClassName( 'posts-slider' );
  for ( var i = 0, len = elms.length; i < len; i++ ) {

    // Create the main slider.
    var postsSlider = new Splide( elms[ i ] , {
    	type       : 'loop',
    	pagination : false,
    	arrows     : true,
      rewind     : true,
      gap    : '2rem',
      perPage: 4,
    	breakpoints: {
    		'789': {
    			perPage: 2,
    			gap    : '2rem',
    		},
    		'480': {
    			perPage: 1,
    			gap    : '1rem',
    		},
      }
    } ).mount();

  }


} );
