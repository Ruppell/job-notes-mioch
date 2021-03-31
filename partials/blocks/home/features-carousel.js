document.addEventListener( 'DOMContentLoaded', function () {
  // Create and mount the thumbnails slider.
var thumbnailsSlider = new Splide( '#thumbnail-slider', {
	rewind      : true,
	fixedWidth  : 100,
	fixedHeight : 64,
	isNavigation: true,
	gap         : 10,
	focus       : 'center',
	pagination  : false,
	cover       : true,
	perPage: 7,
	breakpoints : {
		'600': {
			fixedWidth  : 66,
			fixedHeight : 40,
			perPage: 3,
		}
	}
} ).mount();

// Create the main slider.
var contentSlider = new Splide( '#content-slider', {
	type       : 'fade',
	heightRatio: 0.5,
	pagination : false,
	arrows     : false,
	cover      : true,
} );

// Set the thumbnails slider as a sync target and then call mount.
contentSlider.sync( thumbnailsSlider ).mount();

} );
