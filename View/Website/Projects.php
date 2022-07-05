<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<?php 
	include ("header.php");
	include ("../../Helper/connect.php"); 

	
			?>
	<!-- <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
		<link rel="pingback" href="https://lasvegas.wpresidence.net/xmlrpc.php" />
		<meta name="google-signin-client_id" content="13759604714-0t7p0dh546nvkefuvt58ojmj6dcr82ld.apps.googleusercontent.com">
		<meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly">
		<title>Agents List &#8211; WpResidence Real Estate Theme Demo</title>
		<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Nunito%20Sans%3A300%2C400%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext&amp;display=swap" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito%20Sans%3A300%2C400%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext&amp;display=swap" media="print" onload="this.media='all'" />
		<noscript>
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito%20Sans%3A300%2C400%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext&amp;display=swap" />
		</noscript>
		<meta name='robots' content='noindex, nofollow' />
		<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
		<link rel='dns-prefetch' href='http://las-vegas.b-cdn.net/' />
		<link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
		<link href='http://las-vegas.b-cdn.net/' rel='preconnect' />
		<link rel="alternate" type="application/rss+xml" title="WpResidence Real Estate Theme Demo &raquo; Feed" href="https://lasvegas.wpresidence.net/feed/" />
		<link rel="alternate" type="application/rss+xml" title="WpResidence Real Estate Theme Demo &raquo; Comments Feed" href="https://lasvegas.wpresidence.net/comments/feed/" />
		<link rel="alternate" type="application/rss+xml" title="WpResidence Real Estate Theme Demo &raquo; Agents List Comments Feed" href="https://lasvegas.wpresidence.net/agent-list-sidebar-left/feed/" />
		<style type="text/css">
			img.wp-smiley,
			img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
			}
		</style>
		<link rel='stylesheet' id='wp-block-library-css' href='https://las-vegas.b-cdn.net/wp-includes/css/dist/block-library/style.min.css?ver=6.0' type='text/css' media='all' />
		<style id='global-styles-inline-css' type='text/css'>
			body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
		</style>
		<link rel='stylesheet' id='bootstrap.min-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/css/bootstrap.min.css?ver=4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-theme.min-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/css/bootstrap-theme.min.css?ver=4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='wpestate_style-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/style.css?ver=4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='wpestate_media-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/css/my_media.css?ver=4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-5.min-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/css/fontawesome/css/all.css?ver=6.0' type='text/css' media='all' />
		<link rel='stylesheet' id='fontello-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/css/fontello.min.css?ver=6.0' type='text/css' media='all' />
		<link rel='stylesheet' id='jquery.ui.theme-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/css/jquery-ui.min.css?ver=6.0' type='text/css' media='all' />
		<link rel='stylesheet' id='wpestate_leaflet_css-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/openstreet/leaflet.css?ver=4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='wpestate_leaflet_css_markerCluster-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/openstreet/MarkerCluster.css?ver=4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='wpestate_leaflet_css_markerCluster_default-css' href='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/openstreet/MarkerCluster.Default.css?ver=4.4' type='text/css' media='all' />
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/modernizr.custom.62456.js?ver=4.4' id='modernizr.custom.62456-js'></script>
		<link rel="https://api.w.org/" href="https://lasvegas.wpresidence.net/wp-json/" />
		<link rel="alternate" type="application/json" href="https://lasvegas.wpresidence.net/wp-json/wp/v2/pages/676" />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://lasvegas.wpresidence.net/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://las-vegas.b-cdn.net/wp-includes/wlwmanifest.xml" />
		<meta name="generator" content="WordPress 6.0" />
		<link rel="canonical" href="https://lasvegas.wpresidence.net/agent-list-sidebar-left/" />
		<link rel='shortlink' href='https://lasvegas.wpresidence.net/?p=676' />
		
		<link rel="icon" href="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas-fav-36x36.png" sizes="32x32" />
		<link rel="icon" href="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas-fav.png" sizes="192x192" />
		<link rel="apple-touch-icon" href="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas-fav.png" />
		<meta name="msapplication-TileImage" content="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas-fav.png" />
		<style type="text/css" id="wp-custom-css">
			@media only screen and (max-width: 1023px){
			.page-id-7 .has_header_type1 #google_map_prop_list_sidebar {
			margin-top: 25px!important;
			}
			}
			#google_map_prop_list_wrapper #gmap-control i {
			background-color: #af9d91;
			}		
		</style>
	</head> -->
	<!-- <body class="page-template page-template-agents_list page-template-agents_list-php page page-id-676 using-mobile-header-sticky elementor-default elementor-kit-22">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-dark-grayscale">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0 0.49803921568627" />
						<feFuncG type="table" tableValues="0 0.49803921568627" />
						<feFuncB type="table" tableValues="0 0.49803921568627" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-grayscale">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0 1" />
						<feFuncG type="table" tableValues="0 1" />
						<feFuncB type="table" tableValues="0 1" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-purple-yellow">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
						<feFuncG type="table" tableValues="0 1" />
						<feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-blue-red">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0 1" />
						<feFuncG type="table" tableValues="0 0.27843137254902" />
						<feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-midnight">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0 0" />
						<feFuncG type="table" tableValues="0 0.64705882352941" />
						<feFuncB type="table" tableValues="0 1" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-magenta-yellow">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0.78039215686275 1" />
						<feFuncG type="table" tableValues="0 0.94901960784314" />
						<feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-purple-green">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
						<feFuncG type="table" tableValues="0 1" />
						<feFuncB type="table" tableValues="0.44705882352941 0.4" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-blue-orange">
					<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0.098039215686275 1" />
						<feFuncG type="table" tableValues="0 0.66274509803922" />
						<feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
						<feFuncA type="table" tableValues="1 1" />
					</feComponentTransfer>
					<feComposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>
		<div class="mobilewrapper" id="mobilewrapper_links">
			<div class="snap-drawers">
				<div class="snap-drawer snap-drawer-left">
					<div class="mobilemenu-close"><i class="fas fa-times"></i></div>
					<ul id="menu-main-menu" class="mobilex-menu">
						<li id="menu-item-19214" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18618 current_page_item menu-item-19214"><a href="https://lasvegas.wpresidence.net/" aria-current="page">Home</a></li>
						<li id="menu-item-20475" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20475"><a target="_blank" rel="noopener" href="https://demo.wpresidence.net/#demos">Demos</a></li>
						<li id="menu-item-837" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-837">
							<a href="#">Properties</a>
							<ul class="sub-menu">
								<li id="menu-item-848" class="menu-item menu-item-type-post_type menu-item-object-estate_property menu-item-848"><a href="https://lasvegas.wpresidence.net/estate_property/gorgeous-studio-for-rent/">Property Single Page</a></li>
								<li id="menu-item-18161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18161"><a href="https://lasvegas.wpresidence.net/properties-standard-list/">Properties Standard List</a></li>
								<li id="menu-item-18168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18168"><a href="https://lasvegas.wpresidence.net/half-map-properties-list/">Half Map Properties List</a></li>
							</ul>
						</li>
						<li id="menu-item-836" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-836">
							<a href="#">Agents</a>
							<ul class="sub-menu">
								<li id="menu-item-20259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20259"><a href="https://lasvegas.wpresidence.net/about-us/">About us</a></li>
								<li id="menu-item-853" class="menu-item menu-item-type-post_type menu-item-object-estate_agent menu-item-853"><a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Agent Profile Page</a></li>
								<li id="menu-item-18162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18162"><a href="https://lasvegas.wpresidence.net/agent-list-sidebar-left/">Agents List Page</a></li>
							</ul>
						</li>
						<li id="menu-item-838" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-838">
							<a href="#">Blog</a>
							<ul class="sub-menu">
								<li id="menu-item-18174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18174"><a href="https://lasvegas.wpresidence.net/blog-list-no-sidebar/">Blog List</a></li>
								<li id="menu-item-18163" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-18163"><a href="https://lasvegas.wpresidence.net/2014/05/27/in-las-vegas-home-prices-have-doubled-in-the-past-5-years/">Blog Single Post</a></li>
							</ul>
						</li>
						<li id="menu-item-18169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18169"><a href="https://lasvegas.wpresidence.net/contact-us-3/">Contact</a></li>
						<li id="menu-item-20229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20229"><a href="https://lasvegas.wpresidence.net/favorite-properties/">Favorites</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobilewrapper-user" id="mobilewrapperuser">
			<div class="snap-drawers">
				<div class="snap-drawer snap-drawer-right">
					<div class="mobilemenu-close-user"><i class="fas fa-times"></i></div>
					<div class="login_sidebar">
						<h3 id="login-div-title-mobile">Login</h3>
						<div class="login_form" id="login-div_mobile">
							<div class="loginalert" id="login_message_area_mobile"> </div>
							<input type="text" class="form-control" name="log" id="login_user_mobile" autofocus placeholder="Username" />
							<div class="password_holder"><input type="password" class="form-control" name="pwd" id="login_pwd_mobile" placeholder="Password" />
								<i class=" far fa-eye-slash show_hide_password"></i>
							</div>
							<input type="hidden" name="loginpop" id="loginpop_wd_mobile" value="0">
							<input type="hidden" id="security-login-mobile" name="security-login-mobile" value="3cf184ad58-1656434561">
							<button class="wpresidence_button" id="wp-login-but-mobile">Login</button>
							<div class="login-links">
								<a href="#" id="widget_register_mobile">Need an account? Register here!</a>
								<a href="#" id="forgot_pass_mobile">Forgot Password?</a>
							</div>
						</div>
						<h3 id="register-div-title-mobile">Register</h3>
						<div class="login_form" id="register-div-mobile">
							<div class="loginalert" id="register_message_area_mobile"></div>
							<input type="text" name="user_login_register" id="user_login_register_mobile" class="form-control" autofocus placeholder="Username" />
							<input type="email" name="user_email_register" id="user_email_register_mobile" class="form-control" placeholder="Email" />
							<div class="password_holder"><input type="password" name="user_password" id="user_password_mobile" class="form-control" placeholder="Password" /> <i class=" far fa-eye-slash show_hide_password"></i></div>
							<div class="password_holder"><input type="password" name="user_password_retype" id="user_password_mobile_retype" class="form-control" placeholder="Retype Password" /> <i class=" far fa-eye-slash show_hide_password"></i></div>
							<input type="checkbox" name="terms" id="user_terms_register_mobile" />
							<label id="user_terms_register_mobile_label" for="user_terms_register_mobile">I agree with <a href="https://lasvegas.wpresidence.net/" target="_blank" id="user_terms_register_mobile_link">terms &amp; conditions</a> </label>
							<input type="hidden" id="security-register-mobile" name="security-register-mobile" value="ddb89bf3b4-1656434561">
							<button class="wpresidence_button" id="wp-submit-register_mobile">Register</button>
							<div class="login-links">
								<a href="#" id="widget_login_mobile">Back to Login</a>
							</div>
						</div>
						<h3 id="forgot-div-title-mobile">Reset Password</h3>
						<div class="login_form" id="forgot-pass-div-mobile">
							<div class="loginalert" id="forgot_pass_area_mobile"></div>
							<div class="loginrow">
								<input type="email" class="form-control" name="forgot_email" id="forgot_email_mobile" autofocus placeholder="Enter Your Email Address" size="20" />
							</div>
							<input type="hidden" id="security-forgot-mobile" name="security-forgot-mobile" value="6a25fa81c6" /><input type="hidden" name="_wp_http_referer" value="/agent-list-sidebar-left/" />
							<input type="hidden" id="postid-mobile" value="">
							<button class="wpresidence_button" id="wp-forgot-but-mobile" name="forgot">Reset Password</button>
							<div class="login-links shortlog">
								<a href="#" id="return_login_mobile">Return to Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="website-wrapper" id="all_wrapper">
			<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">
				<?php include ("subheader.php"); ?>
				<!-- <div class="master_header   wide   topbar_transparent  ">
					<div class="mobile_header mobile_header_sticky_yes">
						<div class="mobile-trigger"><i class="fas fa-bars"></i></div>
						<div class="mobile-logo">
							<a href="https://lasvegas.wpresidence.net/">
							<img src="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas.png" class="img-responsive retina_ready " alt="image" /> </a>
						</div>
						<div class="mobile-trigger-user">
							<i class="fas fa-user-circle"></i>
						</div>
					</div>
					<div class="header_wrapper   header_type1 header_center hover_type_2 header_alignment_text_left  no_property_submit ">
						<div class="header_wrapper_inside  " data-logo="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas.png" data-sticky-logo="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas.png">
							<div class="logo">
								<a href="https://lasvegas.wpresidence.net/"><img id="logo_image" style="margin-top:0px;" src="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/las-vegas.png" class="img-responsive retina_ready" alt="company logo" /></a>
							</div>
							<div class="user_menu user_not_loged" id="user_menu_u">
								<a class="menu_user_tools dropdown" id="user_menu_trigger" data-toggle="dropdown">
								<a class="navicon-button nav-notlog x">
									<div class="navicon"></div>
								</a>
								<div class="submit_action">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve">
										<g>
											<path d="M50,5C25.2,5,5,25.1,5,50s20.2,45,45,45s45-20.1,45-45S74.8,5,50,5z M50,26.5c7.2,0,13.1,5.9,13.1,13.1   c0,7.2-5.9,13.1-13.1,13.1s-13.1-5.9-13.1-13.1C36.9,32.4,42.8,26.5,50,26.5z M50,87.9c-12.2,0-23.1-5.8-30.1-14.8   c5.7-10.7,17.1-18,30.1-18s24.4,7.3,30.1,18C73.2,82.1,62.2,87.9,50,87.9z" />
										</g>
									</svg>
								</div>
								<div class="header_phone">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 295.64 369.5375" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd">
										<defs></defs>
										<g>
											<path class="fil0" d="M231.99 189.12c18.12,10.07 36.25,20.14 54.37,30.21 7.8,4.33 11.22,13.52 8.15,21.9 -15.59,42.59 -61.25,65.07 -104.21,49.39 -87.97,-32.11 -153.18,-97.32 -185.29,-185.29 -15.68,-42.96 6.8,-88.62 49.39,-104.21 8.38,-3.07 17.57,0.35 21.91,8.15 10.06,18.12 20.13,36.25 30.2,54.37 4.72,8.5 3.61,18.59 -2.85,25.85 -8.46,9.52 -16.92,19.04 -25.38,28.55 18.06,43.98 55.33,81.25 99.31,99.31 9.51,-8.46 19.03,-16.92 28.55,-25.38 7.27,-6.46 17.35,-7.57 25.85,-2.85z" />
										</g>
									</svg>
									<a href="tel: 800-555-6789"> 800-555-6789</a>
								</div>
							</div>
							<nav id="access">
								<div class="menu-main-menu-container">
									<ul id="menu-main-menu" class="menu">
										<li id="menu-item-19214" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home no-megamenu   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/">Home</a></li>
										<li id="menu-item-20475" class="menu-item menu-item-type-custom menu-item-object-custom no-megamenu   "><a class="menu-item-link" target="_blank" href="https://demo.wpresidence.net/#demos">Demos</a></li>
										<li id="menu-item-837" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-megamenu   ">
											<a class="menu-item-link" href="#">Properties</a>
											<ul style="" class="  sub-menu ">
												<li id="menu-item-848" class="menu-item menu-item-type-post_type menu-item-object-estate_property   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/estate_property/gorgeous-studio-for-rent/">Property Single Page</a></li>
												<li id="menu-item-18161" class="menu-item menu-item-type-post_type menu-item-object-page   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/properties-standard-list/">Properties Standard List</a></li>
												<li id="menu-item-18168" class="menu-item menu-item-type-post_type menu-item-object-page   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/half-map-properties-list/">Half Map Properties List</a></li>
											</ul>
										</li>
										<li id="menu-item-836" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children no-megamenu   ">
											<a class="menu-item-link" href="#">Agents</a>
											<ul style="" class="  sub-menu ">
												<li id="menu-item-20259" class="menu-item menu-item-type-post_type menu-item-object-page   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/about-us/">About us</a></li>
												<li id="menu-item-853" class="menu-item menu-item-type-post_type menu-item-object-estate_agent   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Agent Profile Page</a></li>
												<li id="menu-item-18162" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-676 current_page_item   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/agent-list-sidebar-left/">Agents List Page</a></li>
											</ul>
										</li>
										<li id="menu-item-838" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-megamenu   ">
											<a class="menu-item-link" href="#">Blog</a>
											<ul style="" class="  sub-menu ">
												<li id="menu-item-18174" class="menu-item menu-item-type-post_type menu-item-object-page   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/blog-list-no-sidebar/">Blog List</a></li>
												<li id="menu-item-18163" class="menu-item menu-item-type-post_type menu-item-object-post   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/2014/05/27/in-las-vegas-home-prices-have-doubled-in-the-past-5-years/">Blog Single Post</a></li>
											</ul>
										</li>
										<li id="menu-item-18169" class="menu-item menu-item-type-post_type menu-item-object-page no-megamenu   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/contact-us-3/">Contact</a></li>
										<li id="menu-item-20229" class="menu-item menu-item-type-post_type menu-item-object-page no-megamenu   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/favorite-properties/">Favorites</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="header_media  mobile_header_media_sticky_yes header_mediatype_2 with_search_1 header_media_non_elementor">
					<div class="wpestate_header_image full_screen_no parallax_effect_yes" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/about-us-photo.jpeg); height:450px; ">
						<div class="wpestate_header_image_overlay" style="background-color:#2e2525;opacity:0.6;background-image:url();"></div>
						<div class="heading_over_image_wrapper">
							<h1 class="heading_over_image">Madrid Real Estate Team</h1>
							<div class="subheading_over_image">Professional agents at your service</div>
						</div>
					</div>
				</div> -->
				<div class="pre_search_wrapper"></div>
				<div class="container content_wrapper">
					<div class="row">
					<div class="wpestate_header_image full_screen_no parallax_effect_yes" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/about-us-photo.jpeg); height:450px; ">
						<div class="wpestate_header_image_overlay" style="background-color:#2e2525;opacity:0.6;background-image:url();"></div>
						<div class="heading_over_image_wrapper">
							<h1 class="heading_over_image">Madrid Real Estate Team</h1>
							<div class="subheading_over_image">Professional agents at your service</div>
						</div>
					</div>
						<div class="col-xs-12 col-md-12 breadcrumb_container">
							<ol class="breadcrumb">
								<li><a href="https://lasvegas.wpresidence.net/">Home</a></li>
								<li class="active">Agents List</li>
							</ol>
						</div>
						<div class=" col-md-12 rightmargin ">
							<span class="entry-title listing_loader_title">Your search results</span>
							<div class="spinner" id="listing_loader">
								<div class="rect1"></div>
								<div class="rect2"></div>
								<div class="rect3"></div>
								<div class="rect4"></div>
								<div class="rect5"></div>
							</div>
							<div id="listing_ajax_container"></div>
							<h1 class="entry-title">Project Details</h1>
							<!-- <div class="single-content">
								<p>We like to think of ourselves as a small but perfectly formed lettings &amp; management agency. Working you get the exposure, knowledge and expertise you would expect from a large agent, but the service you will only receive from a smaller business built around 100% client and tenant focus.</p>
								<p>Whether you’re looking for property for sale in New York area or property for rent, WP Residence makes searching easy. Use our unique geolocation mapping feature to root-out your ideal villa, townhouse or apartment and contact the owners direct. We will help you find your dream house in just a few seconds.</p>
							</div> -->
							<div id="listing_ajax_container_agent">
							<?php
								$sql = mysqli_query($con,"select * from project_master where isDeleted=0 ");
									foreach ($sql as $pro)
									{
										?>
								
								<div class="col-md-4 listing_wrapper">
									<div class="agent_unit" >
									
										<div class="agent-unit-img-wrapper"  data-link="SingleProject.php?pid=<?php echo $pro["PK_Project"]; ?>" >
											<img style="width:525px;height:380px" alt="<?php echo $pro['ThumbnailImageURL']; ?>" src="<?php echo $pro['ThumbnailImageURL']; ?>" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" srcset="" sizes="(max-width: 500px) 100vw, 500px" /> 
											
										</div>
										<a style="position:relative;left:425px;top:40px"  href="<?php echo $pro['BrochureURL']; ?>" target="_blank" ><i class="fas fa-download" ></i></a>
									
										 

										
											<h4> <a href="SingleProject.php?pid=<?php echo $pro["PK_Project"]; ?>">
										<?php echo $pro['ProjectName'] ?></a> 
									</h4>

										
									
										
										
										<div class="agent_position">
										<?php echo $pro['ProjectType'] ?>
										</div>
										
										<div class="agent_card_content"><?php echo $pro['ShortDescription'] ?><a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/" class="unit_more_x">...</a></div>
							
									</div>
									</div>
									<?php
									}
									?>
									
									
								</div>
								
								<!-- <div class="col-md-6 listing_wrapper">
									<div class="agent_unit" data-link="https://lasvegas.wpresidence.net/estate_agent/elena-pernia/">
										<div class="agent-unit-img-wrapper">
											<img width="500" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person8-1-1-500x328.png" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" srcset="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person8-1-1-500x328.png 500w, https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person8-1-1-105x70.png 105w" sizes="(max-width: 500px) 100vw, 500px" /> 
										</div>
										<h4> <a href="https://lasvegas.wpresidence.net/estate_agent/elena-pernia/">Elena Pernía</a></h4>
										<div class="agent_position">sales executive</div>
										<div class="agent_card_content">As a fourth generation realtor, I was raised in a family where real estate was the primary <a href="https://lasvegas.wpresidence.net/estate_agent/elena-pernia/" class="unit_more_x">...</a></div>
										<div class="agent_unit_social agent_list">
											<a class="agent_unit_facebook" href="#" rel="noopener"><i class="fab fa-facebook-f"></i></a> <a class="agent_unit_twitter" href="#" rel="noopener"><i class="fab fa-twitter"></i></a> <a class="agent_unit_linkedin" href="#" rel="noopener"><i class="fab fa-linkedin-in"></i></a> <a class="agent_unit_pinterest" href="#" rel="noopener"><i class="fab fa-pinterest-p"></i></a> <a class="agent_unit_instagram" href="#" rel="noopener"><i class="fab fa-instagram"></i></a>
											<div class="agent_unit_phone"><a href="tel:(305) 555-4555" rel="noopener"><i class="fas fa-phone"></i></a></div>
											<div class="agent_unit_email"><a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#c9aca5aca7a889aca4a8a0a5e7a7acbd" rel="noopener"><i class="fas fa-envelope"></i></a></div>
										</div>
									</div>
								</div> -->
								<!-- <div class="col-md-6 listing_wrapper">
									<div class="agent_unit" data-link="https://lasvegas.wpresidence.net/estate_agent/alessandra-tortella/">
										<div class="agent-unit-img-wrapper">
											<img width="500" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person3-27-500x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" srcset="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person3-27-500x328.jpg 500w, https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person3-27-105x70.jpg 105w" sizes="(max-width: 500px) 100vw, 500px" /> 
										</div>
										<h4> <a href="https://lasvegas.wpresidence.net/estate_agent/alessandra-tortella/">Alessandra Rosales</a></h4>
										<div class="agent_position">selling agent</div>
										<div class="agent_card_content">Alessandra Tortella’s knowledge, honesty, integrity, and fairness have been evident throug <a href="https://lasvegas.wpresidence.net/estate_agent/alessandra-tortella/" class="unit_more_x">...</a></div>
										<div class="agent_unit_social agent_list">
											<a class="agent_unit_facebook" href="#" rel="noopener"><i class="fab fa-facebook-f"></i></a> <a class="agent_unit_twitter" href="#" rel="noopener"><i class="fab fa-twitter"></i></a> <a class="agent_unit_linkedin" href="#" rel="noopener"><i class="fab fa-linkedin-in"></i></a> <a class="agent_unit_pinterest" href="#" rel="noopener"><i class="fab fa-pinterest-p"></i></a> <a class="agent_unit_instagram" href="#" rel="noopener"><i class="fab fa-instagram"></i></a>
											<div class="agent_unit_phone"><a href="tel:(305) 555-4555" rel="noopener"><i class="fas fa-phone"></i></a></div>
											<div class="agent_unit_email"><a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#02636e677171636c66706342676f636b6e2c6c6776" rel="noopener"><i class="fas fa-envelope"></i></a></div>
										</div>
									</div>
								</div> -->
								<!-- <div class="col-md-6 listing_wrapper">
									<div class="agent_unit" data-link="https://lasvegas.wpresidence.net/estate_agent/carlos-dobarro/">
										<div class="agent-unit-img-wrapper">
											<img width="500" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person-21-500x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" srcset="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person-21-500x328.jpg 500w, https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person-21-105x70.jpg 105w" sizes="(max-width: 500px) 100vw, 500px" /> 
										</div>
										<h4> <a href="https://lasvegas.wpresidence.net/estate_agent/carlos-dobarro/">Carlos Dobarro</a></h4>
										<div class="agent_position">CEO</div>
										<div class="agent_card_content">Whether it is working with a first time homebuyer, a luxury home listing or a seasoned inv <a href="https://lasvegas.wpresidence.net/estate_agent/carlos-dobarro/" class="unit_more_x">...</a></div>
										<div class="agent_unit_social agent_list">
											<a class="agent_unit_facebook" href="#" rel="noopener"><i class="fab fa-facebook-f"></i></a> <a class="agent_unit_twitter" href="#" rel="noopener"><i class="fab fa-twitter"></i></a> <a class="agent_unit_linkedin" href="#" rel="noopener"><i class="fab fa-linkedin-in"></i></a> <a class="agent_unit_pinterest" href="#" rel="noopener"><i class="fab fa-pinterest-p"></i></a> <a class="agent_unit_instagram" href="#" rel="noopener"><i class="fab fa-instagram"></i></a>
											<div class="agent_unit_phone"><a href="tel:(305) 555-4555" rel="noopener"><i class="fas fa-phone"></i></a></div>
											<div class="agent_unit_email"><a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#ceadafbca2a1bd8eb9abacbda7baabe0a0abba" rel="noopener"><i class="fas fa-envelope"></i></a></div>
										</div>
									</div>
								</div> -->
								
							
							
						</div>
						
				</div>
				
			</div>
			<?php include ("subfooter.php"); ?>
			<!-- <footer id="colophon" class="  footer_back_repeat  ">
				<div id="footer-widget-area" class="row ">
					<div id="first" class="widget-area col-md-4 ">
						<ul class="xoxo">
							<li id="text-1" class="widget-container widget_text">
								<h4 class="widget-title-footer">About Us</h4>
								<div class="textwidget">
									<p>WpResidence is committed to delivering a high level of expertise, customer service, and attention to detail to the marketing and sales of luxury real estate, and rental properties.</p>
								</div>
							</li>
							<li id="social_widget-1" class="widget-container social_sidebar">
								<div class="social_sidebar_internal"><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a><a href="#" target="_blank"><i class="fab fa-twitter"></i></a><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a><a href="#" target="_blank"><i class="fab fa-tumblr"></i></a><a href="#" target="_blank"><i class="fab fa-youtube"></i></a><a href="#" target="_blank"><i class="fab fa-vimeo-v"></i></a></div>
							</li>
						</ul>
					</div>
					<div id="second" class="widget-area col-md-4">
						<ul class="xoxo">
							<li id="contact_widget-1" class="widget-container contact_sidebar">
								<h4 class="widget-title-footer">Contact Us</h4>
								<div class="contact_sidebar_wrap">
									<p class="widget_contact_addr"><i class="fas fa-building"></i>10845 Griffith Peak Dr, Las Vegas, NV 89135</p>
									<p class="widget_contact_phone"><i class="fas fa-phone"></i><a href="tel:%2B1+800-555-6789">+1 800-555-6789</a></p>
									<p class="widget_contact_fax"><i class="fas fa-print"></i>+1 800-555-6744</p>
									<p class="widget_contact_email"><i class="far fa-envelope"></i><a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#b6d9d0d0dfd5d3f6c4d3d7dad3c5c2d7c2d398d5d9db"><span class="__cf_email__" data-cfemail="9af5fcfcf3f9ffdae8fffbf6ffe9eefbeeffb4f9f5f7">[email&#160;protected]</span></a></p>
								</div>
							</li>
						</ul>
					</div>
					<div id="third" class="widget-area col-md-4">
						<ul class="xoxo">
							<li id="footer_latest_widget-3" class="widget-container latest_listings">
								<h4 class="widget-title-footer">Latest Properties</h4>
								<script data-cfasync="false" src="https://lasvegas.wpresidence.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
									//<![CDATA[
									jQuery(document).ready(function(){
									   estate_sidebar_slider_carousel();
									});
									//]]>
								</script>
								<div class="latest_listings list_type">
									<div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">
										<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
										<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">Villa with Amazing View</a></span> <span class=widget_latest_price>5.500.000 $ <span class="price_label"></span></span> </div>
									</div>
									<div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">
										<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
										<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">Townhouse for Sale</a></span> <span class=widget_latest_price>210.000 $ <span class="price_label"></span></span> </div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="sub_footer">
					<div class="sub_footer_content ">
						<span class="copyright">
						Copyright WP Estate. All Rights Reserved. </span>
						<div class="subfooter_menu"></div>
					</div>
				</div>
			</footer> -->
		</div>
		<?php include ("footer.php"); ?>
		<!-- <div id="modal_login_wrapper">
			<div class="modal_login_back"></div>
			<div class="modal_login_container " style='height:520px;'>
				<div id="login-modal_close"></div>
				<div class="login-register-modal-image" style="background-image: url('https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/couple-login-modal-3.jpeg')">
					<div class="featured_gradient"></div>
					<div class="login-register-modal-image_text">Welcome to Las Vegas Real Estate</div>
				</div>
				<div class="login-register-modal-form-wrapper">
					<div class="login_form" id="login-div_topbar">
						<div id="login-div-title-topbar">Sign into your account </div>
						<div class="loginalert" id="login_message_area_topbar"> </div>
						<input type="text" class="form-control" name="log" id="login_user_topbar" autofocus placeholder="Username" />
						<div class="password_holder">
							<input type="password" class="form-control" name="pwd" id="login_pwd_topbar" placeholder="Password" />
							<i class=" far fa-eye-slash show_hide_password"></i>
						</div>
						<input type="hidden" name="loginpop" id="loginpop_wd_topbar" value="0">
						<input type="hidden" id="security-login-topbar" name="security-login-topbar" value="c4be057c4d-1656434561">
						<button class="wpresidence_button" id="wp-login-but-topbar">Login</button>
						<div class="login-links"></div>
					</div>
					<div class="login_form" id="register-div-topbar">
						<div id="register-div-title-topbar">Create an account</div>
						<div class="loginalert" id="register_message_area_topbar"></div>
						<input type="text" name="user_login_register" id="user_login_register_topbar" class="form-control" autofocus placeholder="Username" />
						<input type="email" name="user_email_register" id="user_email_register_topbar" class="form-control" placeholder="Email" />
						<div class="password_holder"><input type="password" name="user_password" id="user_password_topbar" class="form-control" placeholder="Password" /> <i class=" far fa-eye-slash show_hide_password"></i></div>
						<div class="password_holder"><input type="password" name="user_password_retype" id="user_password_topbar_retype" class="form-control" placeholder="Retype Password" /> <i class=" far fa-eye-slash show_hide_password"></i></div>
						<input type="checkbox" name="terms" id="user_terms_register_topbar" />
						<label id="user_terms_register_topbar_label" for="user_terms_register_topbar">I agree with <a href="https://lasvegas.wpresidence.net/" target="_blank" id="user_terms_register_topbar_link">terms &amp; conditions</a> </label>
						<input type="hidden" id="security-register-topbar" name="security-register-topbar" value="066b1a1cc5-1656434561">
						<button class="wpresidence_button" id="wp-submit-register_topbar">Register</button>
					</div>
					<div class="login_form" id="forgot-pass-div">
						<div id="forgot-div-title-topbar">Reset Password</div>
						<div class="loginalert" id="forgot_pass_area_topbar"></div>
						<div class="loginrow">
							<input type="email" class="form-control" name="forgot_email" id="forgot_email_topbar" autofocus placeholder="Enter Your Email Address" size="20" />
						</div>
						<input type="hidden" id="security-forgot-topbar" name="security-forgot-topbar" value="facd656da0" /><input type="hidden" name="_wp_http_referer" value="/agent-list-sidebar-left/" /> <input type="hidden" id="postid" value="
							45">
						<button class="wpresidence_button" id="wp-forgot-but-topbar" name="forgot">Reset Password</button>
					</div>
					<div class="login_modal_control">
						<a href="#" id="widget_register_topbar">Register here!</a>
						<a href="#" id="forgot_pass_topbar">Forgot password?</a>
						<a href="#" id="widget_login_topbar">Back to login</a>
						<a href="#" id="return_login_topbar">Back to login</a>
						<input type="hidden" name="loginpop" id="loginpop" value="0">
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="wpestate_ajax_log_reg" value="0953076f00" /> <a href="#" class="backtop "><i class="fas fa-chevron-up"></i></a>
		<a href="#" class="contact-box "><i class="fas fa-envelope"></i></a>
		<div class="contactformwrapper hidden">
			<div id="footer-contact-form">
				<div class="contact_close_button">
					<i class="fas fa-times" aria-hidden="true"></i>
				</div>
				<h4>Contact Us</h4>
				<p>Use the form below to contact us!</p>
				<div class="alert-box error">
					<div class="alert-message" id="footer_alert-agent-contact"></div>
				</div>
				<input type="text" placeholder="Your Name" required="required" id="foot_contact_name" name="contact_name" class="form-control" value="" tabindex="373">
				<input type="email" required="required" placeholder="Your Email" id="foot_contact_email" name="contact_email" class="form-control" value="" tabindex="374">
				<input type="email" required="required" placeholder="Your Phone" id="foot_contact_phone" name="contact_phone" class="form-control" value="" tabindex="374">
				<textarea placeholder="Type your message..." required="required" id="foot_contact_content" name="contact_content" class="form-control" tabindex="375"></textarea>
				<input type="hidden" name="contact_footer_ajax_nonce" id="contact_footer_ajax_nonce" value="260a7073ad" />
				<div class="gpr_wrapper"><input type="checkbox" role="checkbox" aria-checked="false" id="wpestate_agree_gdprfooter" class="wpestate_agree_gdpr" name="wpestate_agree_gdpr" />
					<label for="wpestate_agree_gdpr">I consent to the <a target="_blank" href="https://lasvegas.wpresidence.net/">GDPR Terms</a></label>
				</div>
				<div class="btn-cont">
					<button type="submit" id="btn-cont-submit" class="wpresidence_button">Send</button>
					<input type="hidden" value="" name="contact_to">
					<div class="bottom-arrow"></div>
				</div>
			</div>
		</div>
		<div class="prop-compare ">
			<div id="compare_close"><i class="fas fa-times" aria-hidden="true"></i></div>
			<form method="post" id="form_compare" action="https://lasvegas.wpresidence.net/compare-listings/">
				<h4 class="title_compare">Compare Listings</h4>
				<button id="submit_compare" class="wpresidence_button"> Compare </button>
			</form>
		</div>
		<input type="hidden" id="wpestate_ajax_filtering" value="59fa78032e" /> <input type="hidden" id="wpestate_payments_nonce" value="11981c5b94" /> <script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.1' id='jquery-ui-mouse-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/draggable.min.js?ver=1.13.1' id='jquery-ui-draggable-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/menu.min.js?ver=1.13.1' id='jquery-ui-menu-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/dom-ready.min.js?ver=d996b53411d1533a84951212ab6ac4ff' id='wp-dom-ready-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/hooks.min.js?ver=c6d64f2cb8f5c6bb49caca37f8828ce3' id='wp-hooks-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/i18n.min.js?ver=ebee46757c6a411e38fd079a7ac71d94' id='wp-i18n-js'></script>
		<script type='text/javascript' id='wp-i18n-js-after'>
			wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/a11y.min.js?ver=a38319d7ba46c6e60f7f9d4c371222c5' id='wp-a11y-js'></script>
		<script type='text/javascript' id='jquery-ui-autocomplete-js-extra'>
			/* <![CDATA[ */
			var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.13.1' id='jquery-ui-autocomplete-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.1' id='jquery-ui-slider-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.1' id='jquery-ui-datepicker-js'></script>
		<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
			jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/bootstrap.min.js?ver=4.4' id='bootstrap-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/jquery.fancybox.pack.js?ver=4.4' id='jquery.fancybox.pack-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/jquery.fancybox-thumbs.js?ver=4.4' id='jquery.fancybox-thumbs-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/dense.min.js?ver=4.4' id='dense.min-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/placeholders.min.js?ver=4.4' id='placeholders.min-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/slideout.min.js?ver=4.4' id='slideout.min-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/i18n/datepicker-en-GB.js?ver=4.4' id='datepicker-en-GB-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/jquery.ui.touch-punch.min.js?ver=4.4' id='touch-punch-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/openstreet/leaflet.js?ver=4.4' id='wpestate_leaflet-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/openstreet/leaflet.markercluster.js?ver=4.4' id='wpestate_leaflet_cluster-js'></script>
		<script type='text/javascript' id='mapfunctions-js-extra'>
			/* <![CDATA[ */
			var mapfunctions_vars = {"path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/css\/css-images","pin_images":"{\"rentals\":\"\",\"sales\":\"\",\"apartments\":\"\",\"condos\":\"\",\"duplexes\":\"\",\"houses\":\"\",\"villas\":\"\",\"apartmentsrentals\":\"\",\"condosrentals\":\"\",\"duplexesrentals\":\"\",\"housesrentals\":\"\",\"villasrentals\":\"\",\"apartmentssales\":\"\",\"condossales\":\"\",\"duplexessales\":\"\",\"housessales\":\"\",\"villassales\":\"\",\"idxpin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/sale.png\",\"single_pin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/single.png\",\"cloud_pin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/cloud.png\",\"userpin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/userpin.png\"}","geolocation_radius":"1000","adv_search":"1","in_text":" in ","zoom_cluster":"15","user_cluster":"yes","open_close_status":"0","open_height":"550","closed_height":"450","generated_pins":"0","geo_no_pos":"The browser couldn't detect your position!","geo_no_brow":"Geolocation is not supported by this browser.","geo_message":"m radius","show_adv_search":"","custom_search":"yes","listing_map":"internal","slugs":["adv_location","bedrooms","rooms","adv_categ","adv_actions","min-property-size","property_price"],"hows":["like","greater","greater","like","like","greater","greater"],"measure_sys":"ft","close_map":"close map","show_g_search_status":"no","slider_price":"yes","slider_price_position":"7","adv_search_type":"1","is_half":"0","map_style":"[\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"weight\": \"2.00\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"geometry.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#9c9c9c\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"labels.text\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.man_made\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#eeeeee\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#7b7b7b\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"labels.text.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#46bcec\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c8d7d4\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#070707\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"labels.text.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    }\r\n]","shortcode_map_style":"","small_slider_t":"","is_prop_list":"0","is_tax":"0","half_no_results":"No results found!","fields_no":"7","type":"ROADMAP","useprice":"yes","use_price_pins_full_price":"no","use_single_image_pin":"no","loading_results":"loading results...","geolocation_type":"2","is_half_map_list":"0","is_normal_map_list":"0","is_adv_search":"0","ba":"BA","bd":"BD"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/google_js/mapfunctions.js?ver=4.4' id='mapfunctions-js'></script>
		<script type='text/javascript' id='wpestate_mapfunctions_base-js-extra'>
			/* <![CDATA[ */
			var mapbase_vars = {"wp_estate_kind_of_map":"2","wp_estate_mapbox_api_key":"","hq_latitude":"36.209328","hq_longitude":"-115.206369","path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/css\/css-images","markers":"[\"Real Estate Agency\",\"\",\"\",1,{\"url\":\"https:\\\/\\\/beijing.wpresidence.net\\\/wp-content\\\/uploads\\\/2021\\\/10\\\/team2.jpg\",\"id\":\"19640\",\"height\":\"667\",\"width\":\"1000\",\"thumbnail\":\"https:\\\/\\\/beijing.wpresidence.net\\\/wp-content\\\/uploads\\\/2021\\\/10\\\/team2-150x150.jpg\"},\"0\",\"address\",\"none\",\"\"]","page_custom_zoom":"10","address":"10845 Griffith Peak Dr, Las Vegas, NV 89135","logo":{"url":"https:\/\/beijing.wpresidence.net\/wp-content\/uploads\/2021\/10\/team2.jpg","id":"19640","height":"667","width":"1000","thumbnail":"https:\/\/beijing.wpresidence.net\/wp-content\/uploads\/2021\/10\/team2-150x150.jpg"},"type":"ROADMAP","title":"Real Estate Agency"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/google_js/maps_base.js?ver=4.4' id='wpestate_mapfunctions_base-js'></script>
		<script type='text/javascript' id='googlecode_regular-js-extra'>
			/* <![CDATA[ */
			var googlecode_regular_vars = {"general_latitude":"40.43342740570791","general_longitude":"-3.6857248215705933","path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/css\/css-images","markers":"[[\"Awesome%20Family%20Apartment\",36.16449113444699747788035892881453037261962890625,-115.1235437393199987354819313623011112213134765625,2,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E550%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"houses\",\"rentals\",\"housesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fawesome-family-apartment%2F\",19386,550,\"3\",\"2.5\",\"1,300 ft<sup>2<\\\/sup>\",\"Houses\",\"Rentals\",\"550%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"2%20Rooms%20Apartment%20for%20Rent\",36.15970974664639214779526810161769390106201171875,-115.1089525222778462421047152020037174224853515625,3,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E775.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"apartments\",\"sales\",\"apartmentssales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2F2-rooms-apartment-for-rent%2F\",19371,775000,\"5\",\"6\",\"190 ft<sup>2<\\\/sup>\",\"Apartments\",\"Sales\",\"775K%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Apartment%20Space%20for%20Rent\",36.16241230601900014107741299085319042205810546875,-115.1001977920499967922296491451561450958251953125,4,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E800%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-space-for-rent%2F\",19365,800,\"2\",\"4\",\"500 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"800%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Family%20Home%20for%20Sale\",36.14716587982439932602574117481708526611328125,-115.0591278076172017108547152020037174224853515625,5,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E800%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"houses\",\"rentals\",\"housesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ffamily-home-for-sale%2F\",160,800,\"2\",\"4\",\"500 ft<sup>2<\\\/sup>\",\"Houses\",\"Rentals\",\"800%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Apartment%20with%20Ocean%20View\",36.144428191866751376437605358660221099853515625,-115.1173210478079482754765194840729236602783203125,6,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-120x120.jpeg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-120x120.jpeg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-150x150.jpeg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-45x45.jpeg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-36x36.jpeg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E1.500.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"sales\",\"villassales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-with-ocean-view%2F\",154,1500000,\"2\",\"2\",\"700 ft<sup>2<\\\/sup>\",\"Villas\",\"Sales\",\"1.5M%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-105x70.jpeg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Modern%20Condo%20for%20Rent\",36.157292393442702405081945471465587615966796875,-115.1103777601383768569576204754412174224853515625,7,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E1.600%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"duplexes\",\"rentals\",\"duplexesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fmodern-condo-for-rent-2%2F\",150,1600,\"3\",\"2\",\"150 ft<sup>2<\\\/sup>\",\"Duplexes\",\"Rentals\",\"1600%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1024x683.jpg%201024w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1536x1024.jpg%201536w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2.jpg%201920w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Modern%20Penthouse%20Apartment\",36.15700523196900206812642863951623439788818359375,-115.1123080076649927150356234051287174224853515625,8,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E2.000%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"duplexes\",\"rentals\",\"duplexesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fmodern-penthouse-apartment%2F\",145,2000,\"2\",\"2.5\",\"250 ft<sup>2<\\\/sup>\",\"Duplexes\",\"Rentals\",\"2000%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Villa%20with%20Amazing%20View\",36.1475818442140024444597656838595867156982421875,-115.1168061226999981272456352598965167999267578125,9,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E5.500.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"sales\",\"villassales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fvilla-with-amazing-panoramic-view%2F\",139,5500000,\"5\",\"3\",\"250 ft<sup>2<\\\/sup>\",\"Villas\",\"Sales\",\"5.5M%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Townhouse%20for%20Sale\",36.16054590382599798203955288045108318328857421875,-115.0752978395999974736696458421647548675537109375,10,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E210.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"sales\",\"villassales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ftownhouse-for-sale%2F\",132,210000,\"3\",\"2\",\"150 ft<sup>2<\\\/sup>\",\"Villas\",\"Sales\",\"210K%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Luxury%20Villa%20for%20Sale\",36.15666059345699778759808395989239215850830078125,-115.1178359985400021514578838832676410675048828125,11,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3Efrom%3C%2Fspan%3E2.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fluxury-villa-for-sale%2F\",127,2000,\"1\",\"1\",\"400 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"2000%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1024x683.jpg%201024w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1536x1024.jpg%201536w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2.jpg%201920w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Townhouse%20for%20Rent\",36.188740058983711378459702245891094207763671875,-115.1177501678466938983547152020037174224853515625,12,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-800x790.jpg%20800w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E100%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20sq.%20ft.%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ftownhouse-for-rent-2%2F\",111,100,\"2\",\"5\",\"29,000 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"100%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Gorgeous%20Condo%20in%20Las%20Vegas\",36.15693790015105690827112994156777858734130859375,-115.11908056017631452050409279763698577880859375,13,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E1.000.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"apartments\",\"rentals\",\"apartmentsrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-condo-in-las-vegas%2F\",72,1000000,\"5\",\"2.5\",\"5,600 ft<sup>2<\\\/sup>\",\"Apartments\",\"Rentals\",\"1M%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Gorgeous%20Studio%20for%20Rent\",36.1605066648649398075576755218207836151123046875,-115.1090383529663228046047152020037174224853515625,14,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E770.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"houses\",\"sales\",\"housessales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-studio-for-rent%2F\",59,770000,\"5\",\"6\",\"190 ft<sup>2<\\\/sup>\",\"Houses\",\"Sales\",\"770K%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Gorgeous%20Studio%20for%20Rent\",36.07936246958423254227454890497028827667236328125,-115.104618072509765625,15,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E500%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"condos\",\"rentals\",\"condosrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-studio-for-rent-2%2F\",31,500,\"3\",\"2.5\",\"1,300 ft<sup>2<\\\/sup>\",\"Condos\",\"Rentals\",\"500%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"]]","idx_status":"0","page_custom_zoom":"10","generated_pins":"0","type":"ROADMAP","is_adv_search":"0","is_half_map_list":"0","is_normal_map_list":"0"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/google_js/google_map_code.js?ver=4.4' id='googlecode_regular-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/slick.min.js?ver=4.4' id='slick.min-js'></script>
		<script type='text/javascript' id='control-js-extra'>
			/* <![CDATA[ */
			var control_vars = {"morg1":"Amount Financed:","morg2":"Mortgage Payments:","morg3":"Annual cost of Loan:","searchtext":"SEARCH","searchtext2":"Search here...","path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence","search_room":"Type Bedrooms No.","search_bath":"Type Bathrooms No.","search_min_price":"Type Min. Price","search_max_price":"Type Max. Price","contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","zillow_addres":"Your Address","zillow_city":"Your City","zillow_state":"Your State Code (ex CA)","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","admin_url":"https:\/\/lasvegas.wpresidence.net\/wp-admin\/","login_redirect":"https:\/\/lasvegas.wpresidence.net\/dashboard-profile-page\/","login_loading":"Sending user info, please wait...","street_view_on":"Street View","street_view_off":"Close Street View","userid":"0","show_adv_search_map_close":"","close_map":"close map","open_map":"open map","fullscreen":"Fullscreen","default":"Default","addprop":"Please wait while we are processing your submission!","deleteconfirm":"Are you sure you wish to delete?","terms_cond":"You need to agree with terms and conditions !","procesing":"Processing...","slider_min":"0","slider_max":"5600000","curency":"$","where_curency":"after","submission_curency":"USD","to":"to","direct_pay":"","send_invoice":"Send me the invoice","direct_title":"Direct payment instructions","direct_thx":"Thank you. Please check your email for payment instructions.","direct_price":"To be paid","price_separator":".","plan_title":"Plan Title","plan_image":"Plan Image","plan_desc":"Plan Description","plan_size":"Plan Size","plan_rooms":"Plan Rooms","plan_bathrooms":"Plan Bathrooms","plan_price":"Plan Price","readsys":"no","datepick_lang":"en-GB","deleting":"deleting...","save_search":"saving...","captchakey":"","usecaptcha":"no","scroll_trigger":"110","adv6_taxonomy_term":"","adv6_max_price":"","adv6_min_price":"","is_rtl":"0","sticky_footer":"no","geo_radius_measure":"km","initial_radius":"12","min_geo_radius":"1","max_geo_radius":"50","stiky_search":"no","posting":"posting","review_posted":"Review Sent ","review_edited":"Review Edit Saved","sticky_bar":"","new_page_link":"_self","stripe_pay":"Pay","stripe_pay_for":"Payment for package","property_modal":"","property_sticky":"yes","location_animation":"yes","location_animation_text":"Reimagine home in %city%","miles":"miles","km":"km","indian_format":"no"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/control.js?ver=4.4' id='control-js'></script>
		<script type='text/javascript' id='ajaxcalls-js-extra'>
			/* <![CDATA[ */
			var ajaxcalls_vars = {"contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","disabled":"Disabled","published":"Published","no_title":"Please, enter property title","admin_url":"https:\/\/lasvegas.wpresidence.net\/wp-admin\/","login_redirect":"https:\/\/lasvegas.wpresidence.net\/dashboard-profile-page\/","login_loading":"Sending user info, please wait...","userid":"0","prop_featured":"Property is featured","no_prop_featured":"You have used all the \"Featured\" listings in your package.","favorite":"favorite","add_favorite":"add to favorites","remove_fav":"remove from favorites","saving":"saving..","sending":"sending message..","error_field":"Please, enter field:","noimages":"You need to upload at last one image","notitle":"Please, enter property title","paypal":"Connecting to Paypal! Please wait...","stripecancel":"subscription will be cancelled at the end of current period","userpass":"yes","disablelisting":"Disable Listing","enablelisting":"Enable Listing","disableagent":"Disable Agent","enableagent":"Enable Agent","agent_list":"https:\/\/lasvegas.wpresidence.net\/dashboard-agent-list\/","use_gdpr":"yes","gdpr_terms":"You must agree with GDPR terms","delete_account":"Confirm your ACCOUNT DELETION request! Clicking the button below will delete your account and data. This means you will no longer be able to login to your account and access your account information: My Profile, My Properties, Inbox, Saved Searches and Messages. This operation CAN NOT BE REVERSED!","checkout_url":"","wpestate_ajax":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/ajax_handler.php","property_views":"Property Views","contact_agent":"Contact Agent","favorites_login":"no"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/ajaxcalls.js?ver=4.4' id='ajaxcalls-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/owl.carousel.min.js?ver=4.4' id='owl_carousel-js'></script>
	</body> -->
</html>