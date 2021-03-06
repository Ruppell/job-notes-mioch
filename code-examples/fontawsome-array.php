<?php

/**
 * Usage: Use a select field type, the retuned value will be the Font Awesome
 * CSS class.
 */
// array(
	// 'key'           => 'button-icon',
	// 'name'          => 'button-icon',
	// 'label'         => 'Button Icon',
	// 'type'          => 'select',
	// 'choices'       => FONT_AWESOME_ICONS,
	// 'default_value' => 'icon-Arrow-Next',
// ),

// Icons constant.
define(
	'FONT_AWESOME_ICONS',
	array(
		'fab fa-500px' =>'b 500px',
		'fab fa-accessible-icon' =>'b Accessible-icon',
		'fab fa-accusoft' =>'b Accusoft',
		'fas fa-address-book' =>'s Address-book',
		'far fa-address-book' =>'r Address-book',
		'fas fa-address-card' =>'s Address-card',
		'far fa-address-card' =>'r Address-card',
		'fas fa-adjust' =>'s Adjust',
		'fab fa-adn' =>'b Adn',
		'fab fa-adversal' =>'b Adversal',
		'fab fa-affiliatetheme' =>'b Affiliatetheme',
		'fab fa-algolia' =>'b Algolia',
		'fas fa-align-center' =>'s Align-center',
		'fas fa-align-justify' =>'s Align-justify',
		'fas fa-align-left' =>'s Align-left',
		'fas fa-align-right' =>'s Align-right',
		'fab fa-amazon' =>'b Amazon',
		'fas fa-ambulance' =>'s Ambulance',
		'fas fa-american-sign-language-interpreting' =>'s American-sign-language-interpreting',
		'fab fa-amilia' =>'b Amilia',
		'fas fa-anchor' =>'s Anchor',
		'fab fa-android' =>'b Android',
		'fab fa-angellist' =>'b Angellist',
		'fas fa-angle-double-down' =>'s Angle-double-down',
		'fas fa-angle-double-left' =>'s Angle-double-left',
		'fas fa-angle-double-right' =>'s Angle-double-right',
		'fas fa-angle-double-up' =>'s Angle-double-up',
		'fas fa-angle-down' =>'s Angle-down',
		'fas fa-angle-left' =>'s Angle-left',
		'fas fa-angle-right' =>'s Angle-right',
		'fas fa-angle-up' =>'s Angle-up',
		'fab fa-angrycreative' =>'b Angrycreative',
		'fab fa-angular' =>'b Angular',
		'fab fa-app-store' =>'b App-store',
		'fab fa-app-store-ios' =>'b App-store-ios',
		'fab fa-apper' =>'b Apper',
		'fab fa-apple' =>'b Apple',
		'fab fa-apple-pay' =>'b Apple-pay',
		'fas fa-archive' =>'s Archive',
		'fas fa-arrow-alt-circle-down' =>'s Arrow-alt-circle-down',
		'far fa-arrow-alt-circle-down' =>'r Arrow-alt-circle-down',
		'fas fa-arrow-alt-circle-left' =>'s Arrow-alt-circle-left',
		'far fa-arrow-alt-circle-left' =>'r Arrow-alt-circle-left',
		'fas fa-arrow-alt-circle-right' =>'s Arrow-alt-circle-right',
		'far fa-arrow-alt-circle-right' =>'r Arrow-alt-circle-right',
		'fas fa-arrow-alt-circle-up' =>'s Arrow-alt-circle-up',
		'far fa-arrow-alt-circle-up' =>'r Arrow-alt-circle-up',
		'fas fa-arrow-circle-down' =>'s Arrow-circle-down',
		'fas fa-arrow-circle-left' =>'s Arrow-circle-left',
		'fas fa-arrow-circle-right' =>'s Arrow-circle-right',
		'fas fa-arrow-circle-up' =>'s Arrow-circle-up',
		'fas fa-arrow-down' =>'s Arrow-down',
		'fas fa-arrow-left' =>'s Arrow-left',
		'fas fa-arrow-right' =>'s Arrow-right',
		'fas fa-arrow-up' =>'s Arrow-up',
		'fas fa-arrows-alt' =>'s Arrows-alt',
		'fas fa-arrows-alt-h' =>'s Arrows-alt-h',
		'fas fa-arrows-alt-v' =>'s Arrows-alt-v',
		'fas fa-assistive-listening-systems' =>'s Assistive-listening-systems',
		'fas fa-asterisk' =>'s Asterisk',
		'fab fa-asymmetrik' =>'b Asymmetrik',
		'fas fa-at' =>'s At',
		'fab fa-audible' =>'b Audible',
		'fas fa-audio-description' =>'s Audio-description',
		'fab fa-autoprefixer' =>'b Autoprefixer',
		'fab fa-avianex' =>'b Avianex',
		'fab fa-aviato' =>'b Aviato',
		'fab fa-aws' =>'b Aws',
		'fas fa-backward' =>'s Backward',
		'fas fa-balance-scale' =>'s Balance-scale',
		'fas fa-ban' =>'s Ban',
		'fab fa-bandcamp' =>'b Bandcamp',
		'fas fa-barcode' =>'s Barcode',
		'fas fa-bars' =>'s Bars',
		'fas fa-bath' =>'s Bath',
		'fas fa-battery-empty' =>'s Battery-empty',
		'fas fa-battery-full' =>'s Battery-full',
		'fas fa-battery-half' =>'s Battery-half',
		'fas fa-battery-quarter' =>'s Battery-quarter',
		'fas fa-battery-three-quarters' =>'s Battery-three-quarters',
		'fas fa-bed' =>'s Bed',
		'fas fa-beer' =>'s Beer',
		'fab fa-behance' =>'b Behance',
		'fab fa-behance-square' =>'b Behance-square',
		'fas fa-bell' =>'s Bell',
		'far fa-bell' =>'r Bell',
		'fas fa-bell-slash' =>'s Bell-slash',
		'far fa-bell-slash' =>'r Bell-slash',
		'fas fa-bicycle' =>'s Bicycle',
		'fab fa-bimobject' =>'b Bimobject',
		'fas fa-binoculars' =>'s Binoculars',
		'fas fa-birthday-cake' =>'s Birthday-cake',
		'fab fa-bitbucket' =>'b Bitbucket',
		'fab fa-bitcoin' =>'b Bitcoin',
		'fab fa-bity' =>'b Bity',
		'fab fa-black-tie' =>'b Black-tie',
		'fab fa-blackberry' =>'b Blackberry',
		'fas fa-blind' =>'s Blind',
		'fab fa-blogger' =>'b Blogger',
		'fab fa-blogger-b' =>'b Blogger-b',
		'fab fa-bluetooth' =>'b Bluetooth',
		'fab fa-bluetooth-b' =>'b Bluetooth-b',
		'fas fa-bold' =>'s Bold',
		'fas fa-bolt' =>'s Bolt',
		'fas fa-bomb' =>'s Bomb',
		'fas fa-book' =>'s Book',
		'fas fa-bookmark' =>'s Bookmark',
		'far fa-bookmark' =>'r Bookmark',
		'fas fa-braille' =>'s Braille',
		'fas fa-briefcase' =>'s Briefcase',
		'fab fa-btc' =>'b Btc',
		'fas fa-bug' =>'s Bug',
		'fas fa-building' =>'s Building',
		'far fa-building' =>'r Building',
		'fas fa-bullhorn' =>'s Bullhorn',
		'fas fa-bullseye' =>'s Bullseye',
		'fab fa-buromobelexperte' =>'b Buromobelexperte',
		'fas fa-bus' =>'s Bus',
		'fab fa-buysellads' =>'b Buysellads',
		'fas fa-calculator' =>'s Calculator',
		'fas fa-calendar' =>'s Calendar',
		'far fa-calendar' =>'r Calendar',
		'fas fa-calendar-alt' =>'s Calendar-alt',
		'far fa-calendar-alt' =>'r Calendar-alt',
		'fas fa-calendar-check' =>'s Calendar-check',
		'far fa-calendar-check' =>'r Calendar-check',
		'fas fa-calendar-minus' =>'s Calendar-minus',
		'far fa-calendar-minus' =>'r Calendar-minus',
		'fas fa-calendar-plus' =>'s Calendar-plus',
		'far fa-calendar-plus' =>'r Calendar-plus',
		'fas fa-calendar-times' =>'s Calendar-times',
		'far fa-calendar-times' =>'r Calendar-times',
		'fas fa-camera' =>'s Camera',
		'fas fa-camera-retro' =>'s Camera-retro',
		'fas fa-car' =>'s Car',
		'fas fa-caret-down' =>'s Caret-down',
		'fas fa-caret-left' =>'s Caret-left',
		'fas fa-caret-right' =>'s Caret-right',
		'fas fa-caret-square-down' =>'s Caret-square-down',
		'far fa-caret-square-down' =>'r Caret-square-down',
		'fas fa-caret-square-left' =>'s Caret-square-left',
		'far fa-caret-square-left' =>'r Caret-square-left',
		'fas fa-caret-square-right' =>'s Caret-square-right',
		'far fa-caret-square-right' =>'r Caret-square-right',
		'fas fa-caret-square-up' =>'s Caret-square-up',
		'far fa-caret-square-up' =>'r Caret-square-up',
		'fas fa-caret-up' =>'s Caret-up',
		'fas fa-cart-arrow-down' =>'s Cart-arrow-down',
		'fas fa-cart-plus' =>'s Cart-plus',
		'fab fa-cc-amex' =>'b Cc-amex',
		'fab fa-cc-apple-pay' =>'b Cc-apple-pay',
		'fab fa-cc-diners-club' =>'b Cc-diners-club',
		'fab fa-cc-discover' =>'b Cc-discover',
		'fab fa-cc-jcb' =>'b Cc-jcb',
		'fab fa-cc-mastercard' =>'b Cc-mastercard',
		'fab fa-cc-paypal' =>'b Cc-paypal',
		'fab fa-cc-stripe' =>'b Cc-stripe',
		'fab fa-cc-visa' =>'b Cc-visa',
		'fab fa-centercode' =>'b Centercode',
		'fas fa-certificate' =>'s Certificate',
		'fas fa-chart-area' =>'s Chart-area',
		'fas fa-chart-bar' =>'s Chart-bar',
		'far fa-chart-bar' =>'r Chart-bar',
		'fas fa-chart-line' =>'s Chart-line',
		'fas fa-chart-pie' =>'s Chart-pie',
		'fas fa-check' =>'s Check',
		'fas fa-check-circle' =>'s Check-circle',
		'far fa-check-circle' =>'r Check-circle',
		'fas fa-check-square' =>'s Check-square',
		'far fa-check-square' =>'r Check-square',
		'fas fa-chevron-circle-down' =>'s Chevron-circle-down',
		'fas fa-chevron-circle-left' =>'s Chevron-circle-left',
		'fas fa-chevron-circle-right' =>'s Chevron-circle-right',
		'fas fa-chevron-circle-up' =>'s Chevron-circle-up',
		'fas fa-chevron-down' =>'s Chevron-down',
		'fas fa-chevron-left' =>'s Chevron-left',
		'fas fa-chevron-right' =>'s Chevron-right',
		'fas fa-chevron-up' =>'s Chevron-up',
		'fas fa-child' =>'s Child',
		'fab fa-chrome' =>'b Chrome',
		'fas fa-circle' =>'s Circle',
		'far fa-circle' =>'r Circle',
		'fas fa-circle-notch' =>'s Circle-notch',
		'fas fa-clipboard' =>'s Clipboard',
		'far fa-clipboard' =>'r Clipboard',
		'fas fa-clock' =>'s Clock',
		'far fa-clock' =>'r Clock',
		'fas fa-clone' =>'s Clone',
		'far fa-clone' =>'r Clone',
		'fas fa-closed-captioning' =>'s Closed-captioning',
		'far fa-closed-captioning' =>'r Closed-captioning',
		'fas fa-cloud' =>'s Cloud',
		'fas fa-cloud-download-alt' =>'s Cloud-download-alt',
		'fas fa-cloud-upload-alt' =>'s Cloud-upload-alt',
		'fab fa-cloudscale' =>'b Cloudscale',
		'fab fa-cloudsmith' =>'b Cloudsmith',
		'fab fa-cloudversify' =>'b Cloudversify',
		'fas fa-code' =>'s Code',
		'fas fa-code-branch' =>'s Code-branch',
		'fab fa-codepen' =>'b Codepen',
		'fab fa-codiepie' =>'b Codiepie',
		'fas fa-coffee' =>'s Coffee',
		'fas fa-cog' =>'s Cog',
		'fas fa-cogs' =>'s Cogs',
		'fas fa-columns' =>'s Columns',
		'fas fa-comment' =>'s Comment',
		'far fa-comment' =>'r Comment',
		'fas fa-comment-alt' =>'s Comment-alt',
		'far fa-comment-alt' =>'r Comment-alt',
		'fas fa-comments' =>'s Comments',
		'far fa-comments' =>'r Comments',
		'fas fa-compass' =>'s Compass',
		'far fa-compass' =>'r Compass',
		'fas fa-compress' =>'s Compress',
		'fab fa-connectdevelop' =>'b Connectdevelop',
		'fab fa-contao' =>'b Contao',
		'fas fa-copy' =>'s Copy',
		'far fa-copy' =>'r Copy',
		'fas fa-copyright' =>'s Copyright',
		'far fa-copyright' =>'r Copyright',
		'fab fa-cpanel' =>'b Cpanel',
		'fab fa-creative-commons' =>'b Creative-commons',
		'fas fa-credit-card' =>'s Credit-card',
		'far fa-credit-card' =>'r Credit-card',
		'fas fa-crop' =>'s Crop',
		'fas fa-crosshairs' =>'s Crosshairs',
		'fab fa-css3' =>'b Css3',
		'fab fa-css3-alt' =>'b Css3-alt',
		'fas fa-cube' =>'s Cube',
		'fas fa-cubes' =>'s Cubes',
		'fas fa-cut' =>'s Cut',
		'fab fa-cuttlefish' =>'b Cuttlefish',
		'fab fa-d-and-d' =>'b D-and-d',
		'fab fa-dashcube' =>'b Dashcube',
		'fas fa-database' =>'s Database',
		'fas fa-deaf' =>'s Deaf',
		'fab fa-delicious' =>'b Delicious',
		'fab fa-deploydog' =>'b Deploydog',
		'fab fa-deskpro' =>'b Deskpro',
		'fas fa-desktop' =>'s Desktop',
		'fab fa-deviantart' =>'b Deviantart',
		'fab fa-digg' =>'b Digg',
		'fab fa-digital-ocean' =>'b Digital-ocean',
		'fab fa-discord' =>'b Discord',
		'fab fa-discourse' =>'b Discourse',
		'fab fa-dochub' =>'b Dochub',
		'fab fa-docker' =>'b Docker',
		'fas fa-dollar-sign' =>'s Dollar-sign',
		'fas fa-dot-circle' =>'s Dot-circle',
		'far fa-dot-circle' =>'r Dot-circle',
		'fas fa-download' =>'s Download',
		'fab fa-draft2digital' =>'b Draft2digital',
		'fab fa-dribbble' =>'b Dribbble',
		'fab fa-dribbble-square' =>'b Dribbble-square',
		'fab fa-dropbox' =>'b Dropbox',
		'fab fa-drupal' =>'b Drupal',
		'fab fa-dyalog' =>'b Dyalog',
		'fab fa-earlybirds' =>'b Earlybirds',
		'fab fa-edge' =>'b Edge',
		'fas fa-edit' =>'s Edit',
		'far fa-edit' =>'r Edit',
		'fas fa-eject' =>'s Eject',
		'fas fa-ellipsis-h' =>'s Ellipsis-h',
		'fas fa-ellipsis-v' =>'s Ellipsis-v',
		'fab fa-ember' =>'b Ember',
		'fab fa-empire' =>'b Empire',
		'fas fa-envelope' =>'s Envelope',
		'far fa-envelope' =>'r Envelope',
		'fas fa-envelope-open' =>'s Envelope-open',
		'far fa-envelope-open' =>'r Envelope-open',
		'fas fa-envelope-square' =>'s Envelope-square',
		'fab fa-envira' =>'b Envira',
		'fas fa-eraser' =>'s Eraser',
		'fab fa-erlang' =>'b Erlang',
		'fab fa-etsy' =>'b Etsy',
		'fas fa-euro-sign' =>'s Euro-sign',
		'fas fa-exchange-alt' =>'s Exchange-alt',
		'fas fa-exclamation' =>'s Exclamation',
		'fas fa-exclamation-circle' =>'s Exclamation-circle',
		'fas fa-exclamation-triangle' =>'s Exclamation-triangle',
		'fas fa-expand' =>'s Expand',
		'fas fa-expand-arrows-alt' =>'s Expand-arrows-alt',
		'fab fa-expeditedssl' =>'b Expeditedssl',
		'fas fa-external-link-alt' =>'s External-link-alt',
		'fas fa-external-link-square-alt' =>'s External-link-square-alt',
		'fas fa-eye' =>'s Eye',
		'fas fa-eye-dropper' =>'s Eye-dropper',
		'fas fa-eye-slash' =>'s Eye-slash',
		'far fa-eye-slash' =>'r Eye-slash',
		'fab fa-facebook' =>'b Facebook',
		'fab fa-facebook-f' =>'b Facebook-f',
		'fab fa-facebook-messenger' =>'b Facebook-messenger',
		'fab fa-facebook-square' =>'b Facebook-square',
		'fas fa-fast-backward' =>'s Fast-backward',
		'fas fa-fast-forward' =>'s Fast-forward',
		'fas fa-fax' =>'s Fax',
		'fas fa-female' =>'s Female',
		'fas fa-fighter-jet' =>'s Fighter-jet',
		'fas fa-file' =>'s File',
		'far fa-file' =>'r File',
		'fas fa-file-alt' =>'s File-alt',
		'far fa-file-alt' =>'r File-alt',
		'fas fa-file-archive' =>'s File-archive',
		'far fa-file-archive' =>'r File-archive',
		'fas fa-file-audio' =>'s File-audio',
		'far fa-file-audio' =>'r File-audio',
		'fas fa-file-code' =>'s File-code',
		'far fa-file-code' =>'r File-code',
		'fas fa-file-excel' =>'s File-excel',
		'far fa-file-excel' =>'r File-excel',
		'fas fa-file-image' =>'s File-image',
		'far fa-file-image' =>'r File-image',
		'fas fa-file-pdf' =>'s File-pdf',
		'far fa-file-pdf' =>'r File-pdf',
		'fas fa-file-powerpoint' =>'s File-powerpoint',
		'far fa-file-powerpoint' =>'r File-powerpoint',
		'fas fa-file-video' =>'s File-video',
		'far fa-file-video' =>'r File-video',
		'fas fa-file-word' =>'s File-word',
		'far fa-file-word' =>'r File-word',
		'fas fa-film' =>'s Film',
		'fas fa-filter' =>'s Filter',
		'fas fa-fire' =>'s Fire',
		'fas fa-fire-extinguisher' =>'s Fire-extinguisher',
		'fab fa-firefox' =>'b Firefox',
		'fab fa-first-order' =>'b First-order',
		'fab fa-firstdraft' =>'b Firstdraft',
		'fas fa-flag' =>'s Flag',
		'far fa-flag' =>'r Flag',
		'fas fa-flag-checkered' =>'s Flag-checkered',
		'fas fa-flask' =>'s Flask',
		'fab fa-flickr' =>'b Flickr',
		'fab fa-fly' =>'b Fly',
		'fas fa-folder' =>'s Folder',
		'far fa-folder' =>'r Folder',
		'fas fa-folder-open' =>'s Folder-open',
		'far fa-folder-open' =>'r Folder-open',
		'fas fa-font' =>'s Font',
		'fab fa-font-awesome' =>'b Font-awesome',
		'fab fa-font-awesome-alt' =>'b Font-awesome-alt',
		'fab fa-font-awesome-flag' =>'b Font-awesome-flag',
		'fab fa-fonticons' =>'b Fonticons',
		'fab fa-fonticons-fi' =>'b Fonticons-fi',
		'fab fa-fort-awesome' =>'b Fort-awesome',
		'fab fa-fort-awesome-alt' =>'b Fort-awesome-alt',
		'fab fa-forumbee' =>'b Forumbee',
		'fas fa-forward' =>'s Forward',
		'fab fa-foursquare' =>'b Foursquare',
		'fab fa-free-code-camp' =>'b Free-code-camp',
		'fab fa-freebsd' =>'b Freebsd',
		'fas fa-frown' =>'s Frown',
		'far fa-frown' =>'r Frown',
		'fas fa-futbol' =>'s Futbol',
		'far fa-futbol' =>'r Futbol',
		'fas fa-gamepad' =>'s Gamepad',
		'fas fa-gavel' =>'s Gavel',
		'fas fa-gem' =>'s Gem',
		'far fa-gem' =>'r Gem',
		'fas fa-genderless' =>'s Genderless',
		'fab fa-get-pocket' =>'b Get-pocket',
		'fab fa-gg' =>'b Gg',
		'fab fa-gg-circle' =>'b Gg-circle',
		'fas fa-gift' =>'s Gift',
		'fab fa-git' =>'b Git',
		'fab fa-git-square' =>'b Git-square',
		'fab fa-github' =>'b Github',
		'fab fa-github-alt' =>'b Github-alt',
		'fab fa-github-square' =>'b Github-square',
		'fab fa-gitkraken' =>'b Gitkraken',
		'fab fa-gitlab' =>'b Gitlab',
		'fab fa-gitter' =>'b Gitter',
		'fas fa-glass-martini' =>'s Glass-martini',
		'fab fa-glide' =>'b Glide',
		'fab fa-glide-g' =>'b Glide-g',
		'fas fa-globe' =>'s Globe',
		'fab fa-gofore' =>'b Gofore',
		'fab fa-goodreads' =>'b Goodreads',
		'fab fa-goodreads-g' =>'b Goodreads-g',
		'fab fa-google' =>'b Google',
		'fab fa-google-drive' =>'b Google-drive',
		'fab fa-google-play' =>'b Google-play',
		'fab fa-google-plus' =>'b Google-plus',
		'fab fa-google-plus-g' =>'b Google-plus-g',
		'fab fa-google-plus-square' =>'b Google-plus-square',
		'fab fa-google-wallet' =>'b Google-wallet',
		'fas fa-graduation-cap' =>'s Graduation-cap',
		'fab fa-gratipay' =>'b Gratipay',
		'fab fa-grav' =>'b Grav',
		'fab fa-gripfire' =>'b Gripfire',
		'fab fa-grunt' =>'b Grunt',
		'fab fa-gulp' =>'b Gulp',
		'fas fa-h-square' =>'s H-square',
		'fab fa-hacker-news' =>'b Hacker-news',
		'fab fa-hacker-news-square' =>'b Hacker-news-square',
		'fas fa-hand-lizard' =>'s Hand-lizard',
		'far fa-hand-lizard' =>'r Hand-lizard',
		'fas fa-hand-paper' =>'s Hand-paper',
		'far fa-hand-paper' =>'r Hand-paper',
		'fas fa-hand-peace' =>'s Hand-peace',
		'far fa-hand-peace' =>'r Hand-peace',
		'fas fa-hand-point-down' =>'s Hand-point-down',
		'far fa-hand-point-down' =>'r Hand-point-down',
		'fas fa-hand-point-left' =>'s Hand-point-left',
		'far fa-hand-point-left' =>'r Hand-point-left',
		'fas fa-hand-point-right' =>'s Hand-point-right',
		'far fa-hand-point-right' =>'r Hand-point-right',
		'fas fa-hand-point-up' =>'s Hand-point-up',
		'far fa-hand-point-up' =>'r Hand-point-up',
		'fas fa-hand-pointer' =>'s Hand-pointer',
		'far fa-hand-pointer' =>'r Hand-pointer',
		'fas fa-hand-rock' =>'s Hand-rock',
		'far fa-hand-rock' =>'r Hand-rock',
		'fas fa-hand-scissors' =>'s Hand-scissors',
		'far fa-hand-scissors' =>'r Hand-scissors',
		'fas fa-hand-spock' =>'s Hand-spock',
		'far fa-hand-spock' =>'r Hand-spock',
		'fas fa-handshake' =>'s Handshake',
		'far fa-handshake' =>'r Handshake',
		'fas fa-hashtag' =>'s Hashtag',
		'fas fa-hdd' =>'s Hdd',
		'far fa-hdd' =>'r Hdd',
		'fas fa-heading' =>'s Heading',
		'fas fa-headphones' =>'s Headphones',
		'fas fa-heart' =>'s Heart',
		'far fa-heart' =>'r Heart',
		'fas fa-heartbeat' =>'s Heartbeat',
		'fab fa-hire-a-helper' =>'b Hire-a-helper',
		'fas fa-history' =>'s History',
		'fas fa-home' =>'s Home',
		'fab fa-hooli' =>'b Hooli',
		'fas fa-hospital' =>'s Hospital',
		'far fa-hospital' =>'r Hospital',
		'fab fa-hotjar' =>'b Hotjar',
		'fas fa-hourglass' =>'s Hourglass',
		'far fa-hourglass' =>'r Hourglass',
		'fas fa-hourglass-end' =>'s Hourglass-end',
		'fas fa-hourglass-half' =>'s Hourglass-half',
		'fas fa-hourglass-start' =>'s Hourglass-start',
		'fab fa-houzz' =>'b Houzz',
		'fab fa-html5' =>'b Html5',
		'fab fa-hubspot' =>'b Hubspot',
		'fas fa-i-cursor' =>'s I-cursor',
		'fas fa-id-badge' =>'s Id-badge',
		'far fa-id-badge' =>'r Id-badge',
		'fas fa-id-card' =>'s Id-card',
		'far fa-id-card' =>'r Id-card',
		'fas fa-image' =>'s Image',
		'far fa-image' =>'r Image',
		'fas fa-images' =>'s Images',
		'far fa-images' =>'r Images',
		'fab fa-imdb' =>'b Imdb',
		'fas fa-inbox' =>'s Inbox',
		'fas fa-indent' =>'s Indent',
		'fas fa-industry' =>'s Industry',
		'fas fa-info' =>'s Info',
		'fas fa-info-circle' =>'s Info-circle',
		'fab fa-instagram' =>'b Instagram',
		'fab fa-internet-explorer' =>'b Internet-explorer',
		'fab fa-ioxhost' =>'b Ioxhost',
		'fas fa-italic' =>'s Italic',
		'fab fa-itunes' =>'b Itunes',
		'fab fa-itunes-note' =>'b Itunes-note',
		'fab fa-jenkins' =>'b Jenkins',
		'fab fa-joget' =>'b Joget',
		'fab fa-joomla' =>'b Joomla',
		'fab fa-js' =>'b Js',
		'fab fa-js-square' =>'b Js-square',
		'fab fa-jsfiddle' =>'b Jsfiddle',
		'fas fa-key' =>'s Key',
		'fas fa-keyboard' =>'s Keyboard',
		'far fa-keyboard' =>'r Keyboard',
		'fab fa-keycdn' =>'b Keycdn',
		'fab fa-kickstarter' =>'b Kickstarter',
		'fab fa-kickstarter-k' =>'b Kickstarter-k',
		'fas fa-language' =>'s Language',
		'fas fa-laptop' =>'s Laptop',
		'fab fa-laravel' =>'b Laravel',
		'fab fa-lastfm' =>'b Lastfm',
		'fab fa-lastfm-square' =>'b Lastfm-square',
		'fas fa-leaf' =>'s Leaf',
		'fab fa-leanpub' =>'b Leanpub',
		'fas fa-lemon' =>'s Lemon',
		'far fa-lemon' =>'r Lemon',
		'fab fa-less' =>'b Less',
		'fas fa-level-down-alt' =>'s Level-down-alt',
		'fas fa-level-up-alt' =>'s Level-up-alt',
		'fas fa-life-ring' =>'s Life-ring',
		'far fa-life-ring' =>'r Life-ring',
		'fas fa-lightbulb' =>'s Lightbulb',
		'far fa-lightbulb' =>'r Lightbulb',
		'fab fa-line' =>'b Line',
		'fas fa-link' =>'s Link',
		'fab fa-linkedin' =>'b Linkedin',
		'fab fa-linkedin-in' =>'b Linkedin-in',
		'fab fa-linode' =>'b Linode',
		'fab fa-linux' =>'b Linux',
		'fas fa-lira-sign' =>'s Lira-sign',
		'fas fa-list' =>'s List',
		'fas fa-list-alt' =>'s List-alt',
		'far fa-list-alt' =>'r List-alt',
		'fas fa-list-ol' =>'s List-ol',
		'fas fa-list-ul' =>'s List-ul',
		'fas fa-location-arrow' =>'s Location-arrow',
		'fas fa-lock' =>'s Lock',
		'fas fa-lock-open' =>'s Lock-open',
		'fas fa-long-arrow-alt-down' =>'s Long-arrow-alt-down',
		'fas fa-long-arrow-alt-left' =>'s Long-arrow-alt-left',
		'fas fa-long-arrow-alt-right' =>'s Long-arrow-alt-right',
		'fas fa-long-arrow-alt-up' =>'s Long-arrow-alt-up',
		'fas fa-low-vision' =>'s Low-vision',
		'fab fa-lyft' =>'b Lyft',
		'fab fa-magento' =>'b Magento',
		'fas fa-magic' =>'s Magic',
		'fas fa-magnet' =>'s Magnet',
		'fas fa-male' =>'s Male',
		'fas fa-map' =>'s Map',
		'far fa-map' =>'r Map',
		'fas fa-map-marker' =>'s Map-marker',
		'fas fa-map-marker-alt' =>'s Map-marker-alt',
		'fas fa-map-pin' =>'s Map-pin',
		'fas fa-map-signs' =>'s Map-signs',
		'fas fa-mars' =>'s Mars',
		'fas fa-mars-double' =>'s Mars-double',
		'fas fa-mars-stroke' =>'s Mars-stroke',
		'fas fa-mars-stroke-h' =>'s Mars-stroke-h',
		'fas fa-mars-stroke-v' =>'s Mars-stroke-v',
		'fab fa-maxcdn' =>'b Maxcdn',
		'fab fa-medapps' =>'b Medapps',
		'fab fa-medium' =>'b Medium',
		'fab fa-medium-m' =>'b Medium-m',
		'fas fa-medkit' =>'s Medkit',
		'fab fa-medrt' =>'b Medrt',
		'fab fa-meetup' =>'b Meetup',
		'fas fa-meh' =>'s Meh',
		'far fa-meh' =>'r Meh',
		'fas fa-mercury' =>'s Mercury',
		'fas fa-microchip' =>'s Microchip',
		'fas fa-microphone' =>'s Microphone',
		'fas fa-microphone-slash' =>'s Microphone-slash',
		'fab fa-microsoft' =>'b Microsoft',
		'fas fa-minus' =>'s Minus',
		'fas fa-minus-circle' =>'s Minus-circle',
		'fas fa-minus-square' =>'s Minus-square',
		'far fa-minus-square' =>'r Minus-square',
		'fab fa-mix' =>'b Mix',
		'fab fa-mixcloud' =>'b Mixcloud',
		'fab fa-mizuni' =>'b Mizuni',
		'fas fa-mobile' =>'s Mobile',
		'fas fa-mobile-alt' =>'s Mobile-alt',
		'fab fa-modx' =>'b Modx',
		'fab fa-monero' =>'b Monero',
		'fas fa-money-bill-alt' =>'s Money-bill-alt',
		'far fa-money-bill-alt' =>'r Money-bill-alt',
		'fas fa-moon' =>'s Moon',
		'far fa-moon' =>'r Moon',
		'fas fa-motorcycle' =>'s Motorcycle',
		'fas fa-mouse-pointer' =>'s Mouse-pointer',
		'fas fa-music' =>'s Music',
		'fab fa-napster' =>'b Napster',
		'fas fa-neuter' =>'s Neuter',
		'fas fa-newspaper' =>'s Newspaper',
		'far fa-newspaper' =>'r Newspaper',
		'fab fa-nintendo-switch' =>'b Nintendo-switch',
		'fab fa-node' =>'b Node',
		'fab fa-node-js' =>'b Node-js',
		'fab fa-npm' =>'b Npm',
		'fab fa-ns8' =>'b Ns8',
		'fab fa-nutritionix' =>'b Nutritionix',
		'fas fa-object-group' =>'s Object-group',
		'far fa-object-group' =>'r Object-group',
		'fas fa-object-ungroup' =>'s Object-ungroup',
		'far fa-object-ungroup' =>'r Object-ungroup',
		'fab fa-odnoklassniki' =>'b Odnoklassniki',
		'fab fa-odnoklassniki-square' =>'b Odnoklassniki-square',
		'fab fa-opencart' =>'b Opencart',
		'fab fa-openid' =>'b Openid',
		'fab fa-opera' =>'b Opera',
		'fab fa-optin-monster' =>'b Optin-monster',
		'fab fa-osi' =>'b Osi',
		'fas fa-outdent' =>'s Outdent',
		'fab fa-page4' =>'b Page4',
		'fab fa-pagelines' =>'b Pagelines',
		'fas fa-paint-brush' =>'s Paint-brush',
		'fab fa-palfed' =>'b Palfed',
		'fas fa-paper-plane' =>'s Paper-plane',
		'far fa-paper-plane' =>'r Paper-plane',
		'fas fa-paperclip' =>'s Paperclip',
		'fas fa-paragraph' =>'s Paragraph',
		'fas fa-paste' =>'s Paste',
		'fab fa-patreon' =>'b Patreon',
		'fas fa-pause' =>'s Pause',
		'fas fa-pause-circle' =>'s Pause-circle',
		'far fa-pause-circle' =>'r Pause-circle',
		'fas fa-paw' =>'s Paw',
		'fab fa-paypal' =>'b Paypal',
		'fas fa-pen-square' =>'s Pen-square',
		'fas fa-pencil-alt' =>'s Pencil-alt',
		'fas fa-percent' =>'s Percent',
		'fab fa-periscope' =>'b Periscope',
		'fab fa-phabricator' =>'b Phabricator',
		'fab fa-phoenix-framework' =>'b Phoenix-framework',
		'fas fa-phone' =>'s Phone',
		'fas fa-phone-square' =>'s Phone-square',
		'fas fa-phone-volume' =>'s Phone-volume',
		'fab fa-pied-piper' =>'b Pied-piper',
		'fab fa-pied-piper-alt' =>'b Pied-piper-alt',
		'fab fa-pied-piper-pp' =>'b Pied-piper-pp',
		'fab fa-pinterest' =>'b Pinterest',
		'fab fa-pinterest-p' =>'b Pinterest-p',
		'fab fa-pinterest-square' =>'b Pinterest-square',
		'fas fa-plane' =>'s Plane',
		'fas fa-play' =>'s Play',
		'fas fa-play-circle' =>'s Play-circle',
		'far fa-play-circle' =>'r Play-circle',
		'fab fa-playstation' =>'b Playstation',
		'fas fa-plug' =>'s Plug',
		'fas fa-plus' =>'s Plus',
		'fas fa-plus-circle' =>'s Plus-circle',
		'fas fa-plus-square' =>'s Plus-square',
		'far fa-plus-square' =>'r Plus-square',
		'fas fa-podcast' =>'s Podcast',
		'fas fa-pound-sign' =>'s Pound-sign',
		'fas fa-power-off' =>'s Power-off',
		'fas fa-print' =>'s Print',
		'fab fa-product-hunt' =>'b Product-hunt',
		'fab fa-pushed' =>'b Pushed',
		'fas fa-puzzle-piece' =>'s Puzzle-piece',
		'fab fa-python' =>'b Python',
		'fab fa-qq' =>'b Qq',
		'fas fa-qrcode' =>'s Qrcode',
		'fas fa-question' =>'s Question',
		'fas fa-question-circle' =>'s Question-circle',
		'far fa-question-circle' =>'r Question-circle',
		'fab fa-quora' =>'b Quora',
		'fas fa-quote-left' =>'s Quote-left',
		'fas fa-quote-right' =>'s Quote-right',
		'fas fa-random' =>'s Random',
		'fab fa-ravelry' =>'b Ravelry',
		'fab fa-react' =>'b React',
		'fab fa-rebel' =>'b Rebel',
		'fas fa-recycle' =>'s Recycle',
		'fab fa-red-river' =>'b Red-river',
		'fab fa-reddit' =>'b Reddit',
		'fab fa-reddit-alien' =>'b Reddit-alien',
		'fab fa-reddit-square' =>'b Reddit-square',
		'fas fa-redo' =>'s Redo',
		'fas fa-redo-alt' =>'s Redo-alt',
		'fas fa-registered' =>'s Registered',
		'far fa-registered' =>'r Registered',
		'fab fa-rendact' =>'b Rendact',
		'fab fa-renren' =>'b Renren',
		'fas fa-reply' =>'s Reply',
		'fas fa-reply-all' =>'s Reply-all',
		'fab fa-replyd' =>'b Replyd',
		'fab fa-resolving' =>'b Resolving',
		'fas fa-retweet' =>'s Retweet',
		'fas fa-road' =>'s Road',
		'fas fa-rocket' =>'s Rocket',
		'fab fa-rocketchat' =>'b Rocketchat',
		'fab fa-rockrms' =>'b Rockrms',
		'fas fa-rss' =>'s Rss',
		'fas fa-rss-square' =>'s Rss-square',
		'fas fa-ruble-sign' =>'s Ruble-sign',
		'fas fa-rupee-sign' =>'s Rupee-sign',
		'fab fa-safari' =>'b Safari',
		'fab fa-sass' =>'b Sass',
		'fas fa-save' =>'s Save',
		'far fa-save' =>'r Save',
		'fab fa-schlix' =>'b Schlix',
		'fab fa-scribd' =>'b Scribd',
		'fas fa-search' =>'s Search',
		'fas fa-search-minus' =>'s Search-minus',
		'fas fa-search-plus' =>'s Search-plus',
		'fab fa-searchengin' =>'b Searchengin',
		'fab fa-sellcast' =>'b Sellcast',
		'fab fa-sellsy' =>'b Sellsy',
		'fas fa-server' =>'s Server',
		'fab fa-servicestack' =>'b Servicestack',
		'fas fa-share' =>'s Share',
		'fas fa-share-alt' =>'s Share-alt',
		'fas fa-share-alt-square' =>'s Share-alt-square',
		'fas fa-share-square' =>'s Share-square',
		'far fa-share-square' =>'r Share-square',
		'fas fa-shekel-sign' =>'s Shekel-sign',
		'fas fa-shield-alt' =>'s Shield-alt',
		'fas fa-ship' =>'s Ship',
		'fab fa-shirtsinbulk' =>'b Shirtsinbulk',
		'fas fa-shopping-bag' =>'s Shopping-bag',
		'fas fa-shopping-basket' =>'s Shopping-basket',
		'fas fa-shopping-cart' =>'s Shopping-cart',
		'fas fa-shower' =>'s Shower',
		'fas fa-sign-in-alt' =>'s Sign-in-alt',
		'fas fa-sign-language' =>'s Sign-language',
		'fas fa-sign-out-alt' =>'s Sign-out-alt',
		'fas fa-signal' =>'s Signal',
		'fab fa-simplybuilt' =>'b Simplybuilt',
		'fab fa-sistrix' =>'b Sistrix',
		'fas fa-sitemap' =>'s Sitemap',
		'fab fa-skyatlas' =>'b Skyatlas',
		'fab fa-skype' =>'b Skype',
		'fab fa-slack' =>'b Slack',
		'fab fa-slack-hash' =>'b Slack-hash',
		'fas fa-sliders-h' =>'s Sliders-h',
		'fab fa-slideshare' =>'b Slideshare',
		'fas fa-smile' =>'s Smile',
		'far fa-smile' =>'r Smile',
		'fab fa-snapchat' =>'b Snapchat',
		'fab fa-snapchat-ghost' =>'b Snapchat-ghost',
		'fab fa-snapchat-square' =>'b Snapchat-square',
		'fas fa-snowflake' =>'s Snowflake',
		'far fa-snowflake' =>'r Snowflake',
		'fas fa-sort' =>'s Sort',
		'fas fa-sort-alpha-down' =>'s Sort-alpha-down',
		'fas fa-sort-alpha-up' =>'s Sort-alpha-up',
		'fas fa-sort-amount-down' =>'s Sort-amount-down',
		'fas fa-sort-amount-up' =>'s Sort-amount-up',
		'fas fa-sort-down' =>'s Sort-down',
		'fas fa-sort-numeric-down' =>'s Sort-numeric-down',
		'fas fa-sort-numeric-up' =>'s Sort-numeric-up',
		'fas fa-sort-up' =>'s Sort-up',
		'fab fa-soundcloud' =>'b Soundcloud',
		'fas fa-space-shuttle' =>'s Space-shuttle',
		'fab fa-speakap' =>'b Speakap',
		'fas fa-spinner' =>'s Spinner',
		'fab fa-spotify' =>'b Spotify',
		'fas fa-square' =>'s Square',
		'far fa-square' =>'r Square',
		'fab fa-stack-exchange' =>'b Stack-exchange',
		'fab fa-stack-overflow' =>'b Stack-overflow',
		'fas fa-star' =>'s Star',
		'far fa-star' =>'r Star',
		'fas fa-star-half' =>'s Star-half',
		'far fa-star-half' =>'r Star-half',
		'fab fa-staylinked' =>'b Staylinked',
		'fab fa-steam' =>'b Steam',
		'fab fa-steam-square' =>'b Steam-square',
		'fab fa-steam-symbol' =>'b Steam-symbol',
		'fas fa-step-backward' =>'s Step-backward',
		'fas fa-step-forward' =>'s Step-forward',
		'fas fa-stethoscope' =>'s Stethoscope',
		'fab fa-sticker-mule' =>'b Sticker-mule',
		'fas fa-sticky-note' =>'s Sticky-note',
		'far fa-sticky-note' =>'r Sticky-note',
		'fas fa-stop' =>'s Stop',
		'fas fa-stop-circle' =>'s Stop-circle',
		'far fa-stop-circle' =>'r Stop-circle',
		'fab fa-strava' =>'b Strava',
		'fas fa-street-view' =>'s Street-view',
		'fas fa-strikethrough' =>'s Strikethrough',
		'fab fa-stripe' =>'b Stripe',
		'fab fa-stripe-s' =>'b Stripe-s',
		'fab fa-studiovinari' =>'b Studiovinari',
		'fab fa-stumbleupon' =>'b Stumbleupon',
		'fab fa-stumbleupon-circle' =>'b Stumbleupon-circle',
		'fas fa-subscript' =>'s Subscript',
		'fas fa-subway' =>'s Subway',
		'fas fa-suitcase' =>'s Suitcase',
		'fas fa-sun' =>'s Sun',
		'far fa-sun' =>'r Sun',
		'fab fa-superpowers' =>'b Superpowers',
		'fas fa-superscript' =>'s Superscript',
		'fab fa-supple' =>'b Supple',
		'fas fa-sync' =>'s Sync',
		'fas fa-sync-alt' =>'s Sync-alt',
		'fas fa-table' =>'s Table',
		'fas fa-tablet' =>'s Tablet',
		'fas fa-tablet-alt' =>'s Tablet-alt',
		'fas fa-tachometer-alt' =>'s Tachometer-alt',
		'fas fa-tag' =>'s Tag',
		'fas fa-tags' =>'s Tags',
		'fas fa-tasks' =>'s Tasks',
		'fas fa-taxi' =>'s Taxi',
		'fab fa-telegram' =>'b Telegram',
		'fab fa-telegram-plane' =>'b Telegram-plane',
		'fab fa-tencent-weibo' =>'b Tencent-weibo',
		'fas fa-terminal' =>'s Terminal',
		'fas fa-text-height' =>'s Text-height',
		'fas fa-text-width' =>'s Text-width',
		'fas fa-th' =>'s Th',
		'fas fa-th-large' =>'s Th-large',
		'fas fa-th-list' =>'s Th-list',
		'fab fa-themeisle' =>'b Themeisle',
		'fas fa-thermometer-empty' =>'s Thermometer-empty',
		'fas fa-thermometer-full' =>'s Thermometer-full',
		'fas fa-thermometer-half' =>'s Thermometer-half',
		'fas fa-thermometer-quarter' =>'s Thermometer-quarter',
		'fas fa-thermometer-three-quarters' =>'s Thermometer-three-quarters',
		'fas fa-thumbs-down' =>'s Thumbs-down',
		'far fa-thumbs-down' =>'r Thumbs-down',
		'fas fa-thumbs-up' =>'s Thumbs-up',
		'far fa-thumbs-up' =>'r Thumbs-up',
		'fas fa-thumbtack' =>'s Thumbtack',
		'fas fa-ticket-alt' =>'s Ticket-alt',
		'fas fa-times' =>'s Times',
		'fas fa-times-circle' =>'s Times-circle',
		'far fa-times-circle' =>'r Times-circle',
		'fas fa-tint' =>'s Tint',
		'fas fa-toggle-off' =>'s Toggle-off',
		'fas fa-toggle-on' =>'s Toggle-on',
		'fas fa-trademark' =>'s Trademark',
		'fas fa-train' =>'s Train',
		'fas fa-transgender' =>'s Transgender',
		'fas fa-transgender-alt' =>'s Transgender-alt',
		'fas fa-trash' =>'s Trash',
		'fas fa-trash-alt' =>'s Trash-alt',
		'far fa-trash-alt' =>'r Trash-alt',
		'fas fa-tree' =>'s Tree',
		'fab fa-trello' =>'b Trello',
		'fab fa-tripadvisor' =>'b Tripadvisor',
		'fas fa-trophy' =>'s Trophy',
		'fas fa-truck' =>'s Truck',
		'fas fa-tty' =>'s Tty',
		'fab fa-tumblr' =>'b Tumblr',
		'fab fa-tumblr-square' =>'b Tumblr-square',
		'fas fa-tv' =>'s Tv',
		'fab fa-twitch' =>'b Twitch',
		'fab fa-twitter' =>'b Twitter',
		'fab fa-twitter-square' =>'b Twitter-square',
		'fab fa-typo3' =>'b Typo3',
		'fab fa-uber' =>'b Uber',
		'fab fa-uikit' =>'b Uikit',
		'fas fa-umbrella' =>'s Umbrella',
		'fas fa-underline' =>'s Underline',
		'fas fa-undo' =>'s Undo',
		'fas fa-undo-alt' =>'s Undo-alt',
		'fab fa-uniregistry' =>'b Uniregistry',
		'fas fa-universal-access' =>'s Universal-access',
		'fas fa-university' =>'s University',
		'fas fa-unlink' =>'s Unlink',
		'fas fa-unlock' =>'s Unlock',
		'fas fa-unlock-alt' =>'s Unlock-alt',
		'fab fa-untappd' =>'b Untappd',
		'fas fa-upload' =>'s Upload',
		'fab fa-usb' =>'b Usb',
		'fas fa-user' =>'s User',
		'far fa-user' =>'r User',
		'fas fa-user-circle' =>'s User-circle',
		'far fa-user-circle' =>'r User-circle',
		'fas fa-user-md' =>'s User-md',
		'fas fa-user-plus' =>'s User-plus',
		'fas fa-user-secret' =>'s User-secret',
		'fas fa-user-times' =>'s User-times',
		'fas fa-users' =>'s Users',
		'fab fa-ussunnah' =>'b Ussunnah',
		'fas fa-utensil-spoon' =>'s Utensil-spoon',
		'fas fa-utensils' =>'s Utensils',
		'fab fa-vaadin' =>'b Vaadin',
		'fas fa-venus' =>'s Venus',
		'fas fa-venus-double' =>'s Venus-double',
		'fas fa-venus-mars' =>'s Venus-mars',
		'fab fa-viacoin' =>'b Viacoin',
		'fab fa-viadeo' =>'b Viadeo',
		'fab fa-viadeo-square' =>'b Viadeo-square',
		'fab fa-viber' =>'b Viber',
		'fas fa-video' =>'s Video',
		'fab fa-vimeo' =>'b Vimeo',
		'fab fa-vimeo-square' =>'b Vimeo-square',
		'fab fa-vimeo-v' =>'b Vimeo-v',
		'fab fa-vine' =>'b Vine',
		'fab fa-vk' =>'b Vk',
		'fab fa-vnv' =>'b Vnv',
		'fas fa-volume-down' =>'s Volume-down',
		'fas fa-volume-off' =>'s Volume-off',
		'fas fa-volume-up' =>'s Volume-up',
		'fab fa-vuejs' =>'b Vuejs',
		'fab fa-weibo' =>'b Weibo',
		'fab fa-weixin' =>'b Weixin',
		'fab fa-whatsapp' =>'b Whatsapp',
		'fab fa-whatsapp-square' =>'b Whatsapp-square',
		'fas fa-wheelchair' =>'s Wheelchair',
		'fab fa-whmcs' =>'b Whmcs',
		'fas fa-wifi' =>'s Wifi',
		'fab fa-wikipedia-w' =>'b Wikipedia-w',
		'fas fa-window-close' =>'s Window-close',
		'far fa-window-close' =>'r Window-close',
		'fas fa-window-maximize' =>'s Window-maximize',
		'far fa-window-maximize' =>'r Window-maximize',
		'fas fa-window-minimize' =>'s Window-minimize',
		'fas fa-window-restore' =>'s Window-restore',
		'far fa-window-restore' =>'r Window-restore',
		'fab fa-windows' =>'b Windows',
		'fas fa-won-sign' =>'s Won-sign',
		'fab fa-wordpress' =>'b Wordpress',
		'fab fa-wordpress-simple' =>'b Wordpress-simple',
		'fab fa-wpbeginner' =>'b Wpbeginner',
		'fab fa-wpexplorer' =>'b Wpexplorer',
		'fab fa-wpforms' =>'b Wpforms',
		'fas fa-wrench' =>'s Wrench',
		'fab fa-xbox' =>'b Xbox',
		'fab fa-xing' =>'b Xing',
		'fab fa-xing-square' =>'b Xing-square',
		'fab fa-y-combinator' =>'b Y-combinator',
		'fab fa-yahoo' =>'b Yahoo',
		'fab fa-yandex' =>'b Yandex',
		'fab fa-yandex-international' =>'b Yandex-international',
		'fab fa-yelp' =>'b Yelp',
		'fas fa-yen-sign' =>'s Yen-sign',
		'fab fa-yoast' =>'b Yoast',
		'fab fa-youtube' =>'b Youtube',
	)
);
