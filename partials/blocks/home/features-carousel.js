document.addEventListener( 'DOMContentLoaded', function () {
  // Create and mount the thumbnails slider.

	var thumbnail = document.getElementsByClassName( 'thumbnail-slider' );
	var content = document.getElementsByClassName( 'content-slider' );

	for ( var i = 0, len = thumbnail.length; i < len; i++ ) {

				var thumbnailsSlider = new Splide( thumbnail[i], {
					rewind      : true,
					// fixedWidth  : 100,
					// fixedHeight : 64,
					isNavigation: true,
					gap         : 10,
					focus       : 'center',
					pagination  : false,
					cover       : true,
					perPage: 7,
					gap    : '2rem',
					breakpoints : {
						'760': {
							gap    : '2rem',
							perPage: 4,
						},
						'600': {
							gap    : '3rem',
							perPage: 3,
						},
						'400': {
							gap    : '2rem',
							perPage: 2,
						}
					}


				} ).mount();

				// Create the main slider.
				var contentSlider = new Splide( content[i], {
					type       : 'fade',
					heightRatio: 0.5,
					pagination : false,
					arrows     : false,
					cover      : true,
				} );

				// Set the thumbnails slider as a sync target and then call mount.
				contentSlider.sync( thumbnailsSlider ).mount();

		}

} );
