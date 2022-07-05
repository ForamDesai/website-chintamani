<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php 
	include("header.php");  
	include ("../../Helper/connect.php");
	//form 
	if(isset($_POST['name']) && isset($_POST['EmailId']) &&  isset($_POST['phone_number']) &&  isset($_POST['message'])){


	    $name = $_POST['name'];
		$EmailId = $_POST['EmailId'];
		$phone_number= $_POST['phone_number'];
		$message= $_POST['message'];


		
		// Performing insert query execution
		$sql =mysqli_query( $con,"INSERT INTO inquiry (first_name,EmailId,phone_number,project_message,FK_Status) VALUES ('$name',
		'$EmailId','$phone_number','$message','1')" ) ;
		}
		?>

   <?php
	$pid = $_GET['pid'] ;
	$pro=$link->rawQueryOne("select * from project_master where PK_Project=?",array($_REQUEST['pid']));
	echo $pro;
	// if($link->count > 0) {
	// 	$project_id=$pro['PK_Project'];
	// }
	
	?>

	<!-- <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
		<link rel="pingback" href="https://lasvegas.wpresidence.net/xmlrpc.php" />
		<meta name="google-signin-client_id" content="13759604714-0t7p0dh546nvkefuvt58ojmj6dcr82ld.apps.googleusercontent.com">
		<meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly">
		<title>Michaela Finney &#8211; WpResidence Real Estate Theme Demo</title>
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
		<link rel="alternate" type="application/rss+xml" title="WpResidence Real Estate Theme Demo &raquo; Michaela Finney Comments Feed" href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/feed/" />
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
		<style id='wpestate_style-inline-css' type='text/css'>
			body::after{
			position:absolute;
			width:0;
			height:0;
			overflow:hidden;
			z-index:-1; // hide images
			content:url(https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/couple-login-modal-3.jpeg);   // load images
			}
			}
		</style>
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
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://lasvegas.wpresidence.net/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://las-vegas.b-cdn.net/wp-includes/wlwmanifest.xml" />
		<meta name="generator" content="WordPress 6.0" />
		<link rel="canonical" href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/" />
		<link rel='shortlink' href='https://lasvegas.wpresidence.net/?p=57' />
		<style type='text/css'>.control_tax_sh:hover,.mobile_agent_area_wrapper .agent_detail i,.places_type_2_listings_no,.search_wr_6.with_search_form_float .adv_search_tab_item.active:before,.payment-container .perpack,.return_woo_button,.user_loged .wpestream_cart_counter_header,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.contact_close_button,#send_direct_bill,.carousel-indicators .active,.featured_property_type1 .featured_prop_price,.theme_slider_wrapper.theme_slider_2 .theme-slider-price,.submit_listing,.wpresidence_button.agency_contact_but,.developer_contact_button.wpresidence_button,.advanced_search_sidebar .filter_menu li:hover,.term_bar_item:hover:after,.term_bar_item.active_term:after,.schedule_meeting,.agent_unit_button:hover,.acc_google_maps,.unit_type3_details,#compare_close_modal,#compare_close,.adv_handler,.agency_taxonomy a:hover,.share_unit,.wpresidence_button.agency_contact_but,.developer_contact_button.wpresidence_button,.property_listing.property_unit_type1 .featured_div,.featured_property_type2 .featured_prop_price,.unread_mess,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.slider-property-status,.wpestate_term_list span,.term_bar_item.active_term,.term_bar_item.active_term:hover,.wpestate_search_tab_align_center .adv_search_tab_item.active:before,.adv_search_tab_item.active,.wpestate_theme_slider_contact_agent,.carousel-control-theme-prev,.carousel-control-theme-next,.wpestream_cart_counter_header_mobile,.wpestream_cart_counter_header,.filter_menu li:hover,.wp-block-search .wp-block-search__button,.arrow_class_sideways button.slick-prev.slick-arrow:hover, .arrow_class_sideways button.slick-next.slick-arrow:hover,.slider_container button:hover{background-color: #452820;}.action_tag_wrapper,.ribbon-inside{background-color: #452820d9;}.header_transparent .customnav .header_phone svg, .header_transparent .customnav .submit_action svg,.customnav.header_type5 .submit_action svg,.submit_action svg,.header_transparent .customnav .submit_action svg,.agent_sidebar_mobile svg, .header_phone svg,.listing_detail svg, .property_features_svg_icon{fill: #452820;}#tab_prpg li{border-right: 1px solid #452820;}.submit_container #aaiu-uploader{border-color: #452820!important;}.comment-form #submit:hover,.shortcode_contact_form.sh_form_align_center #btn-cont-submit_sh:hover,.single-content input[type="submit"]:hover,.agent_contanct_form input[type="submit"]:hover,.wpresidence_button:hover{border-color: #452820;background-color: transparent;}.form-control:focus,.form-control.open {border: 1px solid transparent;}.page-template-front_property_submit #modal_login_wrapper .form-control:focus,.dropdown-menu,.form-control:focus,.form-control.open {box-shadow: inset 0 0px 1px rgb(0 0 0 / 8%), 0 0 8px #45282020;-webkit-box-shadow: inset 0 0px 1px rgb(0 0 0 / 8%), 0 0 8px #45282020;}.developer_taxonomy a:hover,.wpresidence_button.agency_contact_but,.developer_contact_button.wpresidence_button,.wpresidence_button,.comment-form #submit,.shortcode_contact_form.sh_form_align_center #btn-cont-submit_sh:hover,.menu_user_picture{border-color: #452820;}.share_unit:after {content: " ";border-top: 8px solid #452820;}blockquote{ border-left: 2px solid #452820;}.ui-widget-content{border: 1px solid #452820!important;;}.no_more_list{color:#fff!important;border: 1px solid #452820;}.mobile-trigger-user .menu_user_picture{border: 2px solid #452820;}.openstreet_price_marker_on_click_parent .wpestate_marker:before, .wpestate_marker.openstreet_price_marker_on_click:before,.wpestate_marker.openstreet_price_marker:hover:before,.hover_z_pin:before{border-top: 6px solid #452820!important;}form.woocommerce-checkout{border-top: 3px solid #452820;}.woocommerce-error,.woocommerce-info,.woocommerce-message {border-top-color: #452820;}.openstreet_price_marker_on_click_parent .wpestate_marker, .wpestate_marker.openstreet_price_marker_on_click,.wpestate_marker.openstreet_price_marker:hover,.hover_z_pin,.pagination > .active > a,.pagination > .active > span,.pagination > .active > a:hover,.pagination > .active > span:hover,.pagination > .active > a:focus,.pagination > .active > span:focus,.developer_taxonomy a:hover,.lighbox-image-close-floor,.lighbox-image-close,.results_header,.ll-skin-melon td .ui-state-active,.ll-skin-melon td .ui-state-hover,#adv-search-header-3,#tab_prpg>ul,.wpcf7-form input[type="submit"],.adv_results_wrapper #advanced_submit_2,.wpb_btn-info,#slider_enable_map:hover,#slider_enable_street:hover,#slider_enable_slider:hover,#colophon .social_sidebar_internal a:hover,#primary .social_sidebar_internal a:hover,.ui-widget-header,.slider_control_left,.slider_control_right,#slider_enable_slider.slideron,#slider_enable_street.slideron,#slider_enable_map.slideron,#primary .social_sidebar_internal a:hover,#adv-search-header-mobile,#adv-search-header-1,.featured_second_line,.wpb_btn-info,.ui-menu .ui-state-focus{background-color: #452820!important;}.single-content input[type="submit"],.agent_contanct_form input[type="submit"],.comment-form #submit,.wpresidence_button{background-color: #452820;}.tax_active{background-image: none!important;background: #452820!important;}.agent_unit_button:hover{background-image: linear-gradient(to right, #452820 50%, #fff 50%);}.agent_unit_button:hover{background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, #452820 ), color-stop(50%, #fff));}.agent_unit_button:hover{color:#ffffff!important;}.wpresidence_button,.comment-form #submit{background-image:linear-gradient(to right, transparent 50%, #452820 50%);}.wpresidence_button,.comment-form #submit{background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, transparent), color-stop(50%,#452820 ));}.wpresidence_button_inverse {color: #452820;background-color: #ffffff;background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, #452820), color-stop(50%, #ffffff));background-image: linear-gradient(to right, #452820 50%, #ffffff 50%);}.wpresidence_button.wpresidence_button_inverse:hover{color:#ffffff!important;}.propery_price4_grid .price_label,.property_address_type1_wrapper .fas,.listing_detail svg,.property_features_svg_icon,#google_developer_location:hover,.newsletter_input:hover,.property_listing.property_unit_type2 .featured_div:before,.form-control.open .sidebar_filter_menu,#advanced_submit_shorcode:hover,.acc_google_maps:hover,.wpresidence_button:hover,.slider_control_right:hover,.slider_control_left:hover,.comment-form #submit:hover,.wpb_btn-info:hover,#advanced_submit_2:hover,.submit_action:hover,.unit_type3_details:hover,.directory_slider #property_size,.directory_slider #property_lot_size,.directory_slider #property_rooms,.directory_slider #property_bedrooms,.directory_slider #property_bathrooms,.header_5_widget_icon,input[type="checkbox"]:checked:before,.testimonial-slider-container .slick-prev.slick-arrow:hover, .testimonial-slider-container .slick-next.slick-arrow:hover,.testimonial-slider-container .slick-dots li.slick-active button:before,.slider_container .slick-dots li button::before,.slider_container .slick-dots li.slick-active button:before,.single-content p a:hover,.agent_unit_social a:hover,.featured_prop_price .price_label,.featured_prop_price .price_label_before,.compare_item_head .property_price,#grid_view:hover,#list_view:hover,#primary a:hover,.front_plan_row:hover,.adv_extended_options_text,.slider-content h3 a:hover,.agent_unit_social_single a:hover ,.adv_extended_options_text:hover ,.breadcrumb a:hover , .property-panel h4:hover,.featured_article:hover .featured_article_right,#contactinfobox,.featured_property:hover h2 a,.blog_unit:hover h3 a,.blog_unit_meta .read_more:hover,.blog_unit_meta a:hover,.agent_unit:hover h4 a,.listing_filter_select.open .filter_menu_trigger,.wpestate_accordion_tab .ui-state-active a,.wpestate_accordion_tab .ui-state-active a:link,.wpestate_accordion_tab .ui-state-active a:visited,.theme-slider-price, .agent_unit:hover h4 a,.meta-info a:hover,.widget_latest_price,#colophon a:hover, #colophon li a:hover,.price_area, .property_listing:hover h4 a,a:hover, a:focus, .top_bar .social_sidebar_internal a:hover,.featured_prop_price,.user_menu,.user_loged i,#access .current-menu-item >a, #access .current-menu-parent>a, #access .current-menu-ancestor>a,#access .menu li:hover>a:active, #access .menu li:hover>a:focus,.social-wrapper a:hover i,.agency_unit_wrapper .social-wrapper a i:hover,.property_ratings i,.listing-review .property_ratings i,.term_bar_item:hover,.agency_social i:hover,.inforoom_unit_type4 span,.infobath_unit_type4 span,.infosize_unit_type4 span,.propery_price4_grid,.pagination>li>a,.pagination>li>span,.wpestate_estate_property_details_section i.fa-check, #tab_prpg i.fa-check,.property-panel i.fa-check,.single-estate_agent .developer_taxonomy a,.starselected_click, .starselected,.icon-fav-off:hover,.icon-fav-on,.page-template-front_property_submit .navigation_container a.active,.property_listing.property_unit_type3 .icon-fav.icon-fav-on:before,#infobox_title:hover, .info_details a:hover,.company_headline a:hover i,.header_type5 #access .sub-menu .current-menu-item >a,.empty_star:hover:before,.property_listing.property_unit_type4 .compare-action:hover,.property_listing.property_unit_type4 .icon-fav-on,.property_listing.property_unit_type4 .share_list:hover,.property_listing.property_unit_type2 .share_list:hover,.compare-action:hover,.property_listing.property_unit_type2 .compare-action:hover,.propery_price4_grid span,.wpresidence_slider_price,.sections__nav-item,.section_price,.showcoupon, .listing_unit_price_wrapper, .form-control.open .filter_menu_trigger, .blog2v:hover h4 a, .prop_social .share_unit a:hover, .prop_social .share_unit a:hover:after, #add_favorites.isfavorite, #add_favorites.isfavorite i, .pack-price_sh, .property_slider2_wrapper a:hover h2, .agent_contanct_form_sidebar .agent_position, .arrow_class_sideways button.slick-prev.slick-arrow, .arrow_class_sideways button.slick-next.slick-arrow, button.slick-prev.slick-arrow,button.slick-next.slick-arrow, .half_map_controllers_wrapper i{color: #452820;}.header_type5 #access .current-menu-item >a,.header_type5 #access .current-menu-parent>a,.header_type5 #access .current-menu-ancestor>a{color: #fff!important;}.social_email:hover,.share_facebook:hover,#print_page:hover, .prop_social a:hover i,.single_property_action:hover,.share_tweet:hover,.agent_unit_button,#amount_wd, #amount,#amount_mobile,#amount_sh,.mobile-trigger-user:hover i, .mobile-trigger:hover i,.mobilemenu-close-user:hover, .mobilemenu-close:hover,.header_type5 #access .sub-menu .current-menu-item >a,.customnav.header_type5 #access .current-menu-ancestor>a,.icon-fav-on,.property_listing.property_unit_type3 .icon-fav.icon-fav-on:before,.property_listing.property_unit_type3 .share_list:hover:before,.property_listing.property_unit_type3 .compare-action:hover:before,.agency_socialpage_wrapper i:hover,.advanced_search_sidebar #amount_wd,.section_price,.sections__nav-item,.icon_selected{color: #452820!important;}.featured_article_title{border-top: 3px solid #452820!important;}.carousel-indicators .active,.featured_agent_listings.wpresidence_button,.agent_unit_button,.adv_search_tab_item.active,.scrollon,.single-estate_agent .developer_taxonomy a{border: 1px solid #452820;}#tab_prpg li{border-right: 1px solid #ffffff;}.testimonial-slider-container .slick-dots li button::before { color: #452820;}.testimonial-slider-container .slick-dots li.slick-active button:before {opacity: .75;color: #452820 !important;}.submit_listing{border-color: #452820;background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, transparent), color-stop(50%, #452820));background-image: linear-gradient(to right, transparent 50%, #452820 50%);}a.submit_listing:hover {color: #452820;border-color: #452820;}.info_details .infocur,.info_details .prop_pricex,.propery_price4_grid span,.subunit_price,.featured_property.featured_property_type3 .featured_secondline .featured_prop_price,.featured_property.featured_property_type3 .featured_secondline .featured_prop_price .price_label,.preview_details,.preview_details .infocur,.radius_wrap:after,.unit_details_x:hover,.property_slider2_info_price,.featured_prop_type5 .featured_article_label{color: #ab978a;}.unit_details_x:hover{background:transparent;}.developer_taxonomy a,.unit_details_x a,.unit_details_x,.unit_details_x:hover,.adv_search_tab_item{border: 1px solid #ab978a;}.wpresidence_button.developer_contact_button:hover,.wpresidence_button.agency_contact_but:hover{ border: 1px solid #ab978a!important;}.wpresidence_button.developer_contact_button:hover,.wpresidence_button.agency_contact_but:hover{background-color: #ab978a!important;}.unit_details_x a,.unit_details_x{background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, transparent), color-stop(50%, #ab978a));background-image: linear-gradient(to right, transparent 50%, #ab978a 50%);} .page-template-user_dashboard_add .wpresidence_button:hover{color:white;}.developer_taxonomy a,.agent_card_my_listings,.agency_taxonomy a,.unit_details_x,.col-md-4 > .agent_unit .agent_card_my_listings,.agent_card_my_listings,.menu_label,.adv_search_tab_item{background-color: #ab978a;}.property_title_label,.featured_div{background-color: #ab978ad9;}body,.wide {background-color: #fcfbfd;} .content_wrapper,.agency_contact_class{ background-color: #fcfbfd;} .featured_article_righ, .featured_article_secondline,.property_location .inforoom, .property_location .infobath , .agent_meta , .blog_unit_meta a, .property_location .infosize,.sale_line , .meta-info a, .breadcrumb > li + li:before, .blog_unit_meta,.meta-info,.breadcrumb a,.wpestate_dashboard_list_header .btn-group .dropdown-toggle{color: #6f6f6f;}.form-control::placeholder,input::placeholder,.page-template-front_property_submit select,#schedule_hour,#agent_comment.form-control,#new_user_type,#new_user_type_mobile{color: #6f6f6f!important;}.header_type5 .submit_action svg,.header5_user_wrap .header_phone svg, .header5_user_wrap {fill: #181c23;}.header5_user_wrap .header_phone a,.header_phone a,.customnav.header_type5 #access .menu-main-menu-container>ul>li>a,.header_type5 #access .menu-main-menu-container>ul>li>a,#header4_footer,#header4_footer .widget-title-header4,#header4_footer a,#access ul.menu >li>a{color: #181c23;}.menu_user_picture{border-color:#181c23;}.navicon:before,.navicon:after,.navicon{background: #181c23; }.header_transparent .header_phone svg,.header_transparent .header_phone a,.header_transparent .menu_user_tools,.header_transparent #access ul.menu >li>a{color: #181c23;} .header_transparent .header_phone a,.header_transparent .header_phone svg,.header_transparent .submit_action svg{fill: #181c23;}.header_transparent .navicon:before,.header_transparent .navicon:after,.header_transparent .navicon{background: #181c23;}.header_transparent .menu_user_picture{border-color: #181c23;}.customnav.header_type5 #access .menu-main-menu-container>ul>li:hover>a,.header_type5 #access .menu-main-menu-container>ul>li:hover>a,#access .menu li:hover>a,.header_type3_menu_sidebar #access .menu li:hover>a,.header_type3_menu_sidebar #access .menu li:hover>a:active,.header_type3_menu_sidebar #access .menu li:hover>a:focus,.customnav #access ul.menu >li>a:hover,#access ul.menu >li>a:hover,.hover_type_3 #access .menu > li:hover>a,.hover_type_4 #access .menu > li:hover>a,.hover_type_6 #access .menu > li:hover>a,.header_type5 #access .menu li:hover>a,.header_type5 #access .menu li:hover>a:active,.header_type5 #access .menu li:hover>a:focus,.customnav.header_type5 #access .menu li:hover>a,.customnav.header_type5 #access .menu li:hover>a:active,.customnav.header_type5 #access .menu li:hover>a:focus,.header5_bottom_row_wrapper #access .sub-menu .current-menu-item >a,#access ul.menu .current-menu-item >a{color: #452820;}.hover_type_5 #access .menu > li:hover>a {border-bottom: 3px solid #452820;}.header_transparent .customnav .hover_type_6 #access .menu > li:hover>a,.hover_type_6 #access .menu > li:hover>a {border: 2px solid #452820;}.header_transparent .master_header_sticky .hover_type_2 #access .menu > li:hover>a:before,.hover_type_2 #access .menu > li:hover>a:before {border-top: 3px solid #452820;} .header_transparent .customnav #access ul.menu >li>a:hover,.customnav.header_type5 #access .menu li:hover>a{ color: #452820!important;}#access .current-menu-item,#access ul.menu .current-menu-item >a{color: #452820;} .header_transparent .customnav #access ul.menu >li>a:hover,.header_transparent #access ul.menu >li>a:hover,.header_transparent .hover_type_3 #access .menu > li:hover>a,.header_transparent .hover_type_4 #access .menu > li:hover>a,.header_transparent .hover_type_6 #access .menu > li:hover>a,.header_transparent .customnav #access .menu > li:hover a{color: #452820;}.header_transparent .hover_type_5 #access .menu > li:hover>a {border-bottom: 3px solid #452820;}.header_transparent .hover_type_6 #access .menu > li:hover>a {border: 2px solid #452820;}.header_transparent .hover_type_2 #access .menu > li:hover>a:before {border-top: 3px solid #452820;}.header_transparent .header_phone a:hover,.header_transparent #access ul.menu >li>a:hover,.header_transparent .hover_type_3 #access .menu > li:hover>a,.header_transparent .hover_type_3 #access ul.menu >li>a:hover{color: #452820!important;}.header_transparent .submit_action svg:hover{fill: #452820;} .alalx223, .header_type3_menu_sidebar .menu > li:hover,.hover_type_3 #access .menu > li:hover>a,.hover_type_4 #access .menu > li:hover>a {background: #452820!important;}.customnav .header_phone a, .header_transparent .customnav .header_phone a,.customnav.header_type5 #access .menu-main-menu-container>ul>li>a,.customnav #access ul.menu >li>a{color: #181c23;}.header_transparent .customnav .header_phone svg{fill: #181c23;} .customnav .menu_user_picture{border-color:#181c23;}.header_transparent .customnav #access ul.menu >li>a{color: #181c23;}.customnav .navicon:before,.customnav .navicon:after,.customnav .navicon{background: #181c23;}#user_menu_open > li > a:hover,#user_menu_open > li > a:focus,.sub-menu li:hover, #access .menu li:hover>a,#access .menu li:hover>a:active,#access .menu li:hover>a:focus{background-color: #452820;}.customnav.header_type5 #access .menu .with-megamenu .sub-menu li:hover>a,.customnav.header_type5 #access .menu .with-megamenu .sub-menu li:hover>a:active,.customnav.header_type5 #access .menu .with-megamenu .sub-menu li:hover>a:focus,.header_type5 #access .menu .with-megamenu .sub-menu li:hover>a,.header_type5 #access .menu .sub-menu .with-megamenu li:hover>a:active,.header_type5 #access .menu .sub-menu .with-megamenu li:hover>a:focus,#access .with-megamenu .sub-menu li:hover>a,#access .with-megamenu .sub-menu li:hover>a:active,#access .with-megamenu .sub-menu li:hover>a:focus,.menu_user_tools{color: #452820;}.menu_user_picture {border: 1px solid #452820;}#access .menu ul li:hover>a,#access .sub-menu li:hover>a,#access .sub-menu li:hover>a:active,#access .sub-menu li:hover>a:focus,.header5_bottom_row_wrapper #access .sub-menu .current-menu-item >a,.customnav.header_type5 #access .menu .sub-menu li:hover>a,.customnav.header_type5 #access .menu .sub-menu li:hover>a:active,.customnav.header_type5 #access .menu .sub-menu li:hover>a:focus,.header_type5 #access .menu .sub-menu li:hover>a,.header_type5 #access .menu .sub-menu li:hover>a:active,.header_type5 #access .menu .sub-menu li:hover>a:focus,#user_menu_open > li > a:hover,#user_menu_open > li > a:focus{color: #ffffff;}#user_menu_open> li > a:hover svg circle,#user_menu_open> li > a:focus svg circle,#user_menu_open> li > a:hover svg path,#user_menu_open> li > a:focus svg path,#user_menu_open a svg:hover{color: #ffffff;stroke:#ffffff;}.header_transparent .customnav #access .sub-menu li:hover>a,.customnav.header_type5 #access .menu .sub-menu li:hover>a{color: #ffffff!important;}#access a,#access ul ul a,#access ul ul li.wpestate_megamenu_col_1,#access ul ul li.wpestate_megamenu_col_2,#access ul ul li.wpestate_megamenu_col_3,#access ul ul li.wpestate_megamenu_col_4,#access ul ul li.wpestate_megamenu_col_5,#access ul ul li.wpestate_megamenu_col_6,#access ul ul li.wpestate_megamenu_col_1 a,#access ul ul li.wpestate_megamenu_col_2 a,#access ul ul li.wpestate_megamenu_col_3 a,#access ul ul li.wpestate_megamenu_col_4 a,#access ul ul li.wpestate_megamenu_col_5 a,#access ul ul li.wpestate_megamenu_col_6 a,#access ul ul li.wpestate_megamenu_col_1 a.menu-item-link,#access ul ul li.wpestate_megamenu_col_2 a.menu-item-link,#access ul ul li.wpestate_megamenu_col_3 a.menu-item-link,#access ul ul li.wpestate_megamenu_col_4 a.menu-item-link,#access ul ul li.wpestate_megamenu_col_5 a.menu-item-link,#access ul ul li.wpestate_megamenu_col_6 a.menu-item-link,.header_type5 #access .sub-menu a{ color:#222222;} #access .with-megamenu .megamenu-title a, #access ul ul li.wpestate_megamenu_col_1 .megamenu-title:hover a, #access ul ul li.wpestate_megamenu_col_2 .megamenu-title:hover a, #access ul ul li.wpestate_megamenu_col_3 .megamenu-title:hover a, #access ul ul li.wpestate_megamenu_col_4 .megamenu-title:hover a, #access ul ul li.wpestate_megamenu_col_5 .megamenu-title:hover a, #access ul ul li.wpestate_megamenu_col_6 .megamenu-title:hover a, #access .current-menu-item >a, #access .current-menu-parent>a, #access .current-menu-ancestor>a{color: #222222;}.header_transparent .customnav #access .sub-menu li a{color: #222222!important;}body,a,label,input[type=text], input[type=password], input[type=email],input[type=url], input[type=number], textarea, .slider-content, .listing-details, .form-control,.adv-search-1 .form-control,#user_menu_open i,#grid_view, #list_view, .listing_details a, .caret::after,.adv_search_slider label,.extended_search_checker label,.slider_radius_wrap, #tab_prpg .tab-pane li, #tab_prpg .tab-pane li:first-of-type,.notice_area, .social-agent-page a, .prop_detailsx, #reg_passmail_topbar,#reg_passmail, .testimonial-text,.wpestate_tabs .ui-widget-content,.wpestate_tour .ui-widget-content, .wpestate_accordion_tab .ui-widget-content,.wpestate_accordion_tab .ui-state-default, .wpestate_accordion_tab .ui-widget-content .ui-state-default,.wpestate_accordion_tab .ui-widget-header .ui-state-default,.filter_menu,.property_listing_details .infosize,.property_listing_details .infobath,.property_listing_details .inforoom,.directory_sidebar label,.agent_detail a,.agent_unit .agent_detail a,.agent_detail,.agent_position{ color: #6f6f6f;}.caret, .caret_sidebar, .advanced_search_shortcode .caret_filter{ border-top-color:#6f6f6f;}.pagination > li > a,.pagination > li > span,.single-content p a,.featured_article:hover h2 a,.user_dashboard_listed a,.blog_unit_meta .read_more,.slider-content .read_more,.blog2v .read_more,.breadcrumb .active,.unit_more_x a, .unit_more_x,#login_trigger_modal{color: #452820;}.single-content p a,.contact-wrapper p a{color: #452820!important;}h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,.featured_property h2 a,.featured_property h2,.blog_unit h3,.blog_unit h3 a,.submit_container_header,.info_details #infobox_title,#tab_prpg.wpestate_elementor_tabs li a,.pack_content,.property_agent_wrapper a,.testimonial-container.type_class_3 .testimonial-author-line,.dashboard_hi_text,.invoice_unit_title,.dashbard_unit_title,.property_dashboard_status,.property_dashboard_types{color: #181c23;}.featured_property_type2 h2 a {color: #fff;}#colophon {background-color: #f4ebe4;}#colophon, #colophon a, #colophon li a, #colophon .widget_latest_price {color: #181c23;}#colophon .widget-title-footer{ color: #181c23;}.sub_footer, .subfooter_menu a, .subfooter_menu li a {color: #181c23!important;}.sub_footer{background-color:#f4ebe4;}.top_bar_wrapper{background-color:#181c23;}.top_bar,.top_bar a{color:#ffffff;}.with_search_form_float #advanced_submit_2:hover,.with_search_form_float #advanced_submit_3:hover, .with_search_form_float .adv-search-1 .wpresidence_button, .adv_handler:hover,.with_search_form_float .wpresidence_button.advanced_submit_4:hover{color: #fff;}.submit_container #aaiu-uploader:hover,.row_user_dashboard .wpresidence_button:hover,.with_search_form_float #advanced_submit_3:hover, .with_search_form_float .adv-search-1 .wpresidence_button:hover,.with_search_form_float .wpresidence_button.advanced_submit_4:hover{background-color: #ab978a!important;border-color: #ab978a!important;}.wpestate_dashboard_content_wrapper .wpresidence_button:hover{background-color: #ab978a!important;}.woo_pay_submit:hover, .woo_pay:hover,.wpestate_crm_lead_actions .btn-group>.btn:active, .wpestate_crm_lead_actions .btn-group>.btn:focus, .wpestate_crm_lead_actions .btn-group>.btn:hover,.wpestate_crm_lead_actions .btn-default:focus, .wpestate_crm_lead_actions .btn-default:hover,.wpresidence_button.mess_send_reply_button:hover,.wpresidence_button.mess_send_reply_button2:hover,#floor_submit:hover,#register_agent:hover,#update_profile_agency:hover,#update_profile_developer:hover,.wpresidence_success:hover,#update_profile:hover,#search_form_submit_1:hover,.view_public_profile:hover,#google_developer_location:hover,.wpresidence_button.add_custom_parameter:hover,.wpresidence_button.remove_parameter_button:hover,.wpresidence_button.view_public_profile:hover,.property_dashboard_action .btn-default:hover,.property_dashboard_action .btn-group.open .dropdown-toggle.active,.property_dashboard_action .btn-group.open .dropdown-toggle:focus,.property_dashboard_action .btn-group.open .dropdown-toggle:hover,.property_dashboard_action .btn-group.open .dropdown-toggle:active,.property_dashboard_action .btn-group.open .dropdown-toggle,.carousel-control-theme-prev:hover,.carousel-control-theme-next:hover,.wpestate_theme_slider_contact_agent:hover,.slider_container button:hover,.page-template-user_dashboard_add .wpresidence_button:hover,#change_pass:hover,#register_agent:hover,#update_profile_agency:hover,#update_profile_developer:hover,.wpresidence_success:hover,#update_profile:hover,#search_form_submit_1:hover,.view_public_profile:hover,#google_developer_location:hover,#delete_profile:hover,#aaiu-uploader:hover,.wpresidence_button.add_custom_parameter:hover,.wpresidence_button.remove_parameter_button:hover,.wpresidence_button.view_public_profile:hover{background-color: #ab978a;}.wpestate_dashboard_content_wrapper .wpresidence_button:hover,.wpresidence_button.mess_send_reply_button:hover,.wpresidence_button.mess_send_reply_button2:hover,#floor_submit:hover,#register_agent:hover,#update_profile_agency:hover,#update_profile_developer:hover,.wpresidence_success:hover,#update_profile:hover,#search_form_submit_1:hover,.view_public_profile:hover,#google_developer_location:hover,#delete_profile:hover,#aaiu-uploader:hover,.wpresidence_button.add_custom_parameter:hover,.wpresidence_button.remove_parameter_button:hover,.wpresidence_button.view_public_profile:hover,.property_dashboard_action .btn-default:hover,.property_dashboard_action .btn-group.open .dropdown-toggle.active,.property_dashboard_action .btn-group.open .dropdown-toggle:focus,.property_dashboard_action .btn-group.open .dropdown-toggle:hover,.property_dashboard_action .btn-group.open .dropdown-toggle:active,.property_dashboard_action .btn-group.open .dropdown-toggle{border-color: #ab978a;}.acc_google_maps:hover,.schedule_meeting:hover,.twitter_wrapper,.slider_control_right:hover,.slider_control_left:hover,.wpb_btn-info:hover,.unit_type3_details:hover{background-color: #ab978a!important;}.wpestate_crm_lead_actions .btn-group>.btn:active, .wpestate_crm_lead_actions .btn-group>.btn:focus, .wpestate_crm_lead_actions .btn-group>.btn:hover,.wpestate_crm_lead_actions .btn-default:focus, .wpestate_crm_lead_actions .btn-default:hover,.header5_bottom_row_wrapper .submit_listing:hover {border: 2px solid #ab978a!important;}.no_more_list:hover{background-color: #fff!important;border: 1px solid #ab978a;color:#ab978a!important;}.icon_selected,.featured_prop_label{color: #ab978a!important;}.page-template-user_dashboard_add .wpresidence_button:hover,#change_pass:hover,#register_agent:hover,#update_profile_agency:hover,#update_profile_developer:hover,.wpresidence_success:hover,#update_profile:hover,#search_form_submit_1:hover,.view_public_profile:hover,#google_developer_location:hover,#delete_profile:hover,.wpresidence_button.add_custom_parameter:hover,.wpresidence_button.remove_parameter_button:hover,.wpresidence_button.view_public_profile:hover{border: 1px solid #ab978a;}.header_transparent a.submit_listing:hover{border-color: #ab978a;background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, #ab978a), color-stop(50%, #452820));background-image: linear-gradient(to right, #ab978a 50%, #452820 50%);}.user_dashboard_links a:hover,.dropdown-menu>li>a:hover{color: #452820;}.user_dashboard_links a:hover svg path, .user_dashboard_links a:hover svg circle{ stroke: #452820;}#open_packages:hover .fa,.secondary_menu_sidebar a.secondary_select, #open_packages:hover{color:#452820}.user_dashboard_links .user_tab_active{background-color: #452820;}.dashboard_package_row { background-color: #452820;}.buypackage,.buypackage input[type="checkbox"] { background-color: #452820;}.pack-unit h4 { color: #452820;}.pagination > .active > a,.pagination > .active > span,.pagination > .active > a:hover,.pagination > .active > span:hover,.pagination > .active > a:focus,.pagination > .active > span:focus,.property_dashboard_action .btn-default:focus,.print_invoice, .property_dashboard_actions_button,#stripe_cancel,#update_profile, #change_pass,.wpresidence_success,.page-template-user_dashboard_add .wpresidence_button,.page-template-user_dashboard .wpresidence_button,.wpb_btn-success,#register_agent,#update_profile_agency,#update_profile_developer, #update_profile,#delete_profile,.dashboard-margin .wpresidence_button.view_public_profile,#search_form_submit_1,.add_custom_data_cont button.add_custom_parameter,.add_custom_data_cont button.remove_parameter_button,.page-template-user_dashboard_add .wpresidence_button,#change_pass,.mess_delete,.mess_reply,.woo_pay_submit{background-color: #452820;}.wpestate_dashboard_content_wrapper .wpresidence_button{background-color: #452820;}.wpestate_dashboard_content_wrapper input[type=text]:focus, .wpestate_dashboard_content_wrapper input[type=password]:focus, .wpestate_dashboard_content_wrapper input[type=email]:focus, .wpestate_dashboard_content_wrapper input[type=url]:focus, .wpestate_dashboard_content_wrapper input[type=number]:focus, .wpestate_dashboard_content_wrapper textarea:focus,.btn-group.wpestate_dashhboard_filter.open,.btn-group.wpestate_dashhboard_filter.visited,.btn-group.wpestate_dashhboard_filter.active,.btn-group.wpestate_dashhboard_filter.focus,.btn-group.wpestate_dashhboard_filter:hover,#prop_name:focus{border: 2px solid #452820!important;}.page-template-user_dashboard_add .wpresidence_button,#change_pass,.wpestate_dashboard_content_wrapper .wpresidence_button,#search_form_submit_1 {border-color: #452820;}.page-template-user_dashboard_add .wpresidence_button,#change_pass,.wpestate_dashboard_content_wrapper .wpresidence_button{background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, transparent), color-stop(50%, #452820));background-image: linear-gradient(to right, transparent 50%, #452820 50%);}.pagination>li>a, .pagination>li>span{color: #452820;}.wpestate_dashboard_content_wrapper .featured_div{background-color: #452820d9;}.dashboard_agent_listing_image:after,.dashbard_unit_image:after{background-color: #45282080;}.mobile_header {background-color: #ffffff;}.mobilemenu-close-user, .mobilemenu-close, .mobile_header i{color: #452820;}.sub_footer {border-top: 1px solid #37373708;}#colophon .social_sidebar_internal a {background-color: #fdfdfd;}.places_cover {border-radius: 10px;}#search_wrapper {top: 70%;}.adv3-holder{background-color: #594127a8;} #search_wrapper.with_search_form_float #search_wrapper_color{background-color: #594127;}#search_wrapper {background:transparent;}#search_wrapper.with_search_form_float #search_wrapper_color{opacity: 0.25;}#primary .widget-container.featured_sidebar{padding:0px;}#gmap-control span.spanselected,#gmap-control span,#gmap-control,#gmapzoomplus, #gmapzoomminus,#openmap,#street-view{background-color:#ab978a;}#gmap-control span.spanselected,#gmap-control span,#gmap-control,#gmapzoomplus, #gmapzoomminus,#openmap,#street-view{color:#ffffff;}#gmap-control span:hover,#street-view:hover{color: #fff;}.property_listing,.related_blog_unit_image,.property_listing:hover,.featured_property,.featured_article,.agent_unit,.user_role_unit,.agency_unit,.property_listing_blog{border-color:#ffffff}.property_listing,.related_blog_unit_image,.property_listing:hover,.featured_property,.featured_article,.agent_unit,.user_role_unit,.agency_unit,.user_role_unit,.agency_unit:hover,.property_listing_blog{border-width:0px;}}.master_header{ border-width:0px;border-bottom-style:solid;}.master_header_sticky,.master_header.header_transparent.master_header_sticky{border-width:0px;border-bottom-style:solid;} .single_property_action,.estate_places_slider button.slick-prev.slick-arrow, .estate_places_slider button.slick-next.slick-arrow,.estate_places_slider button.slick-prev.slick-arrow:hover, .estate_places_slider button.slick-next.slick-arrow:hover,.listing_wrapper .property_listing:hover, .agent_unit:hover, .blog_unit:hover, .property_listing:hover, .agency_unit:hover, .user_role_unit:hover, .featured_article:hover, .featured_property:hover,.wpb_btn-info,#primary .widget-container.twitter_wrapper,.wpcf7-form-control,#access ul ul,.btn,.customnav,#user_menu_open,.filter_menu,.property_listing,.agent_unit,.blog_unit,.property_listing_blog,.related_blog_unit .blog_unit_image img,#tab_prpg .tab-pane,.agent_unit_social_single,.agent_contanct_form_sidebar .agent_contanct_form,.zillow_widget,.advanced_search_shortcode,.advanced_search_sidebar,.mortgage_calculator_div,.footer-contact-form,.contactformwrapper,.info_details,.info_idx,.loginwd_sidebar,.featured_article,.featured_property,.customlist2 ul,.featured_agent,.wpb_alert-info.vc_alert_3d.wpestate_message,.wpb_alert-success.vc_alert_3d.wpestate_message,.wpb_alert-error.vc_alert_3d.wpestate_message,.wpb_alert-danger.vc_alert_3d.wpestate_message,.wpb_call_to_action.wpestate_cta_button,.vc_call_to_action.wpestate_cta_button2,.saved_search_wrapper,.mortgage_calculator_li,.adv_listing_filters_head, .listing_filters_head, .listing_filters,.adv-search-3, .page-template-front_property_submit .navigation_container,.advanced_search_shortcode,.membership_package_product, .contact-wrapper, .developer_contact_wrapper,.agency_contact_wrapper,.property_reviews_wrapper, .agency_contact_container_wrapper,.agency_content_wrapper, .submit_property_front_wrapper,.directory_sidebar_wrapper, .places_wrapper_type_2,.featured_property, .agency_unit, #comments,.single-blog, #content_container .container_agent,.listing_wrapper .property_listing,.listing_wrapper .agent_unit, .tab-pane,.agent_contanct_form, .agent_content,.wpestate_agent_details_wrapper,.wpestate_property_description,.multi_units_wrapper, .property-panel,#primary .widget-container, .user_role_unit,.testimonial-slider-container .testimonial-container.type_class_3,.estate_places_slider.slick-initialized.slick-slider,.google_map_shortcode_wrapper,.testimonial-container.type_class_1 .testimonial-text,.blog_unit, .agent_unit_featured,.featured_article,.agent_unit:hover,.blog_unit:hover,.property_listing:hover,.agency_unit:hover,.user_role_unit:hover,.featured_article:hover,.featured_property:hover,.testimonial-container.type_class_4,.testimonial-container.type_class_3,#print_page{-webkit-box-shadow:0px 5px 70px 0px rgb(38 42 76 / 0.1);box-shadow:0px 5px 70px 0px rgb(38 42 76 / 0.1);}.slider_container .property_listing_blog:hover,.slider_container .agent_unit:hover,.slider_container .listing_wrapper .property_listing:hover{box-shadow: 0 -1px 19px 0 rgba(38,42,76,0.1);}#facebooklogin,#facebookloginsidebar_mobile,#facebookloginsidebar_topbar,#facebookloginsidebar,#googlelogin,#googleloginsidebar_mobile,#googleloginsidebar_topbar,#googleloginsidebar,#yahoologin,#twitterloginsidebar_mobile,#twitterloginsidebar_topbar,#twitterloginsidebar{border-bottom:0px;}#primary .widget-container.twitter_wrapper,.agentpict,.agent_unit img,.property_listing img{border:none;}#advanced_submit_2,.adv_handler,#search_wrapper,#search_wrapper_color,.blog_unit_image,.comment-form #submit,.wpresidence_button,.adv_search_tab_item,#search_wrapper,.property_unit_type5 .item,.property_unit_type5 .featured_gradient,.property_unit_type5,.adv_search_tab_item,.property_reviews_wrapper,.listing_wrapper,.term_bar_item, .agentpict,.schedule_meeting,.form-control,.subunit_wrapper,.related_blog_unit_image img,.widget_latest_listing_image img,.agent-unit-img-wrapper img,.featured_widget_image img,.front_plan_row,.acc_google_maps,.wpresidence_button,.sidebar_filter_menu,.places_wrapper_type_2,.places_wrapper_type_2 .places_cover,.mortgage_calculator_li,input[type=text],input[type=password],input[type=email],input[type=url],input[type=number],textarea,.wpcf7-form-control,#mobile_display,.form-control,.adv-search-1 input[type=text],.property_listing,.listing-cover-plus,.share_unit,.items_compare img,.ribbon-wrapper-default,.featured_div,.agent_unit,.blog_unit,.related_blog_unit,.related_blog_unit_image,.related_blog_unit_image img,.related_blog_unit_image .listing-cover,.listing-cover-plus-related,.gallery img,.post-carusel,.property-panel .panel-heading,.isnotfavorite,#add_favorites.isfavorite:hover,#add_favorites:hover,#add_favorites.isfavorite,#slider_enable_map,#slider_enable_street,#slider_enable_slider,.mydetails,.agent_contanct_form_sidebar .agent_contanct_form,.comment .blog_author_image,#agent_submit,.comment-reply-link,.comment-form #submit,#colophon .social_sidebar_internal a,#primary .social_sidebar_internal a,.zillow_widget,.twitter_wrapper,#calendar_wrap,.widget_latest_internal img,.widget_latest_internal .listing-cover,.widget_latest_internal .listing-cover-plus,.featured_sidebar,.featured_widget_image img,.advanced_search_shortcode,.advanced_search_sidebar,.mortgage_calculator_div,.flickr_widget_internal img,.Widget_Flickr .listing-cover,#gmap-loading,#gmap-noresult,#street-view,.contact-comapany-logo,#gmap-control,#google_map_prop_list_sidebar #advanced_submit_2,#results,.adv-search-1 input[type=text],.adv-search-3,.adv-search-3 #results,#advanced_submit_22,.adv_results_wrapper #advanced_submit_2,.compare_item_head img,.backtop,.contact-box,.footer-contact-form,.contactformwrapper,.info_details,.info_idx,.user_dashboard_links,#stripe_cancel,.pack_description,.pack-unit,.perpack,#direct_pay,#send_direct_bill,#profile-image,.dasboard-prop-listing,.info-container i,#form_submit_1,.loginwd_sidebar,.login_form,.alert-message,.login-alert,.agent_contanct_form input[type="submit"],.single-content input[type="submit"],table,.featured_article,.blog_author_image,.featured_property,.agent_face,.agent_face img,.agent_face_details img,.google_map_sh,.customlist2 ul,.featured_agent,.iconcol img,.testimonial-image,.wpestate_posts_grid.wpb_teaser_grid .categories_filter li,.wpestate_posts_grid.wpb_categories_filter li,.wpestate_posts_grid img,.wpestate_progress_bar.vc_progress_bar .vc_single_bar,.wpestate_cta_button,.wpestate_cta_button2,button.wpb_btn-large, span.wpb_btn-large,select.dsidx-resp-select,.dsidx-resp-area input[type="text"], .dsidx-resp-area select,.sidebar .dsidx-resp-area-submit input[type="submit"], .dsidx-resp-vertical .dsidx-resp-area-submit input[type="submit"],.saved_search_wrapper,.search_unit_wrapper,.front_plan_row,.front_plan_row_image,#floor_submit,.manage_floor,#search_form_submit_1,.dropdown-menu,.wpcf7-form input[type="submit"],.panel-group .panel,.label,.featured_title,.featured_second_line,.transparent-wrapper,.wpresidence_button,.tooltip-inner,.listing_wrapper.col-md-12 .property_listing>img,#facebooklogin,#facebookloginsidebar_mobile,#facebookloginsidebar_topbar,#facebookloginsidebar,#googlelogin,#googleloginsidebar_mobile,#googleloginsidebar_topbar,#googleloginsidebar,#yahoologin,#twitterloginsidebar_mobile,#twitterloginsidebar_topbar,#twitterloginsidebar,#new_post select,button.slick-prev.slick-arrow,button.slick-next.slick-arrow,#pick_pack,.single-estate_property .listing-content .agent_contanct_form,.property_reviews_wrapper,.notice_area,.multi_units_wrapper,.subunit_wrapper,.subunit_thumb img,.single-content.single-agent,.container_agent .agent_contanct_form,.agency_contact_wrapper,.single-estate_agency .property_reviews_wrapper,.agency_content_wrapper,.developer_contact_wrapper,.agency_contact_wrapper,.single-content.single-blog,.single_width_blog #comments, #primary .widget-container, .widget_latest_listing_image, .directory_sidebar_wrapper, .full_width_header .header_type1.header_left #access ul li.with-megamenu>ul.sub-menu, .full_width_header .header_type1.header_left #access ul li.with-megamenu:hover>ul.sub-menu, .action_tag_wrapper, .ribbon-inside, .unit_type3_details, .submit_listing, .submit_action, .agency_unit, .modal_login_container, .page_template_loader .vc_row, .listing_wrapper .property_listing, .adv-search-3, .page-template-front_property_submit .navigation_container, .advanced_search_shortcode, .membership_package_product, .contact-wrapper, .developer_contact_wrapper, .agency_contact_wrapper, .property_reviews_wrapper, .agency_contact_container_wrapper, .agency_content_wrapper, .submit_property_front_wrapper, .directory_sidebar_wrapper, .places_wrapper_type_2, .featured_property, .agency_unit, #comments, .single-blog, #content_container .container_agent, .listing_wrapper .property_listing, .listing_wrapper .agent_unit, .agent_contanct_form, .agent_content, .wpestate_agent_details_wrapper, .wpestate_property_description, .multi_units_wrapper, .property-panel, #primary .widget-container, .user_role_unit, .testimonial-slider-container .testimonial-container.type_class_3, .estate_places_slider.slick-initialized.slick-slider, .google_map_shortcode_wrapper, .testimonial-container.type_class_1 .testimonial-text, .blog_unit, .agent_unit_featured, .featured_article, .single_property_action, .single_property_action, .property_title_label, .testimonial-container, .property_listing_blog, .contact_map_container, .listing_filters_head_directory, .adv_listing_filters_head, .listing_filters_head, .listing_filters, .order_filter_single, .places_cover{border-radius: 10px;}.wpestate_tabs .ui-widget-content,.agent_contanct_form input[type="submit"],.single-content input[type="submit"],button.wpb_btn-large, span.wpb_btn-large{border-radius: 10px!important;}.carousel-control-theme-prev,.carousel-control-theme-next,.icon-fav-on-remove,.nav-prev-wrapper,#advanced_submit_2:hover,.pagination > li:first-child > a,.pagination > li:first-child > span,.pagination .roundright a,.pagination .roundright span,#user_menu_open,#access ul ul,.adv-search-1,#openmap,.slider-content,#access ul li.with-megamenu>ul.sub-menu,#access ul li.with-megamenu:hover>ul.sub-menu,.wpb_toggle.wpestate_toggle,.featured_property.featured_property_type2 img,.featured_property_type2 .places_cover,.info_details img, #adv-search-header-3,#adv-search-header-1,.page-template-advanced_search_results .with_search_2 #openmap,.agentpict,.slider-property-status,.nav-next-wrapper,.agent_unit img,.listing-cover,.pagination .roundleft a,.pagination .roundleft span,.slider-content,.property_listing img,.agent_unit_social_single,.wpestate_agent_details_wrapper,.wpestate_property_description,.single-estate_property .listing-content .agent_contanct_form,.property_reviews_wrapper,.schedule_meeting,.agent_unit_button,.control_tax_sh,.adv_handler,.featured_property.featured_property_type3,.agent_unit_widget_sidebar{border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;}.featured_property.featured_property_type3 .featured_img,.featured_property_type3 .item,.single-estate_agency .agent_contanct_form{border-top-left-radius: 10px;border-bottom-left-radius: 10px;}.featured_property.featured_property_type3 .featured_secondline{border-top-right-radius: 10px;border-bottom-right-radius: 10px;}.pack-unit h4,.featured_property.featured_property_type1 .featured_img,.featured_property.featured_property_type1 .carousel-inner,#primary .widget-container.latest_listings .widget-title-sidebar,#forgot-div-title-topbar,#register-div-title-topbar,#login-div-title-topbar{border-top-left-radius: 10px;border-top-right-radius: 10px;}.listing-unit-img-wrapper {border-top-left-radius: 10px;border-top-right-radius: 10px;}#tab_prpg .tab-pane,.tab-pane, .featured_secondline,.featured_property_type3 .item,#primary .latest_listings,#primary .latest_listings .owl-carousel .owl-wrapper-outer,.login_modal_control{border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;}#infocloser{border-top-right-radius:0px;}.property-panel .panel-heading{border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;}.property-panel .panel-body{border-bottom-left-radius: 10px!important;border-bottom-right-radius: 10px!important;}.agency_unit,.modal_login_container{overflow: hidden;}.listing_wrapper.col-md-12 .listing-unit-img-wrapper,.listing_wrapper.col-md-12 > .property_listing .carousel-inner{border-top-left-radius: 10px;border-top-right-radius: 0px;border-bottom-left-radius: 10px;border-bottom-right-radius: 0px;}.header_wrapper,.header5_top_row,.header_wrapper.header_type5{height:110px;}#access ul li.with-megamenu>ul.sub-menu,#access ul li.with-megamenu:hover>ul.sub-menu,#access ul li:hover > ul {top:110px;}.menu > li{height:110px;line-height:110px;}#access .menu>li>a i{line-height:110px;}#access ul ul{top:160px;}.has_header_type5 .header_media,.has_header_type2 .header_media,.has_header_type3 .header_media,.has_header_type4 .header_media,.has_header_type1 .header_media{padding-top: 110px;}.has_top_bar .has_header_type5 .header_media,.has_top_bar .has_header_type2 .header_media,.has_top_bar .has_header_type3 .header_media,.has_top_bar .has_header_type4 .header_media,.has_top_bar .has_header_type1 .header_media{padding-top: 150px;}.admin-bar .has_header_type5 .header_media,.admin-bar .has_header_type2 .header_media,.admin-bar .has_header_type3 .header_media,.admin-bar .has_header_type4 .header_media,.admin-bar .has_header_type1 .header_media{padding-top: 109px;}.admin-bar .has_header_type4 .header_media,.has_header_type4 .header_media{padding-top: 0px;}.admin-bar.has_top_bar .has_header_type4 .header_media,.has_top_bar .has_header_type4 .header_media{padding-top: 40px;}.admin-bar.has_top_bar .has_header_type5 .header_media,.admin-bar.has_top_bar .has_header_type2 .header_media,.admin-bar.has_top_bar .has_header_type3 .header_media,.admin-bar.has_top_bar .has_header_type4 .header_media,.admin-bar.has_top_bar .has_header_type1 .header_media{padding-top: 151px;}.admin-bar.has_top_bar .has_header_type2 #google_map_prop_list_wrapper,.admin-bar.has_top_bar .has_header_type2 #google_map_prop_list_sidebar{top: 183px;margin-top: 0px;}.has_top_bar .has_header_type2 #google_map_prop_list_wrapper,.has_top_bar .has_header_type2 #google_map_prop_list_sidebar{top: 150px;margin-top: 0px;}#google_map_prop_list_sidebar,#google_map_prop_list_wrapper{top: 151px;}#google_map_prop_list_wrapper.half_no_top_bar.half_type3,#google_map_prop_list_sidebar.half_no_top_bar.half_type3,#google_map_prop_list_wrapper.half_no_top_bar.half_type2,#google_map_prop_list_sidebar.half_no_top_bar.half_type2,#google_map_prop_list_wrapper.half_no_top_bar,#google_map_prop_list_sidebar.half_no_top_bar{top: 110px;}.admin-bar.has_top_bar #google_map_prop_list_sidebar.half_type3,.admin-bar.has_top_bar #google_map_prop_list_wrapper.half_type3{top: 183px;margin-top: 0px;}.admin-bar #google_map_prop_list_sidebar.half_type3,.admin-bar #google_map_prop_list_sidebar.half_type2,.admin-bar #google_map_prop_list_wrapper.half_type2,.admin-bar #google_map_prop_list_wrapper.half_type3,#google_map_prop_list_sidebar.half_type2,#google_map_prop_list_sidebar.half_type3,#google_map_prop_list_wrapper.half_type2,#google_map_prop_list_wrapper.half_type3{top: 143px;margin-top: 0px;}.admin-bar.has_top_bar .has_header_type1 .dashboard-margin{top: 102px;}.has_top_bar .has_header_type1 .dashboard-margin{top: 70px;}.has_header_type1 .dashboard-margin{top: 110px;}.admin-bar .has_header_type1 .dashboard-margin{top: 142px;}.admin-bar .has_header_type1 .col-md-3.user_menu_wrapper {padding-top: 110px;}.has_header_type1 .col-md-3.user_menu_wrapper {padding-top: 78px;}.header_wrapper.customnav,.customnav.header_wrapper.header_type5{height:90px;}.customnav.header_type2 .logo img{bottom: 10px;top: auto;transform: none;}.customnav .menu > li{height:90px;line-height:90px;}.customnav.header_type5 .menu > li, .customnav.header_type5.hover_type_4.menu > li{ line-height:90px!important;}.customnav #access .menu>li>a i{line-height:90px;}.customnav #access ul li.with-megamenu>ul.sub-menu,.customnav #access ul li.with-megamenu:hover>ul.sub-menu,.customnav #access ul li:hover> ul{top:90px;}.header_type5.customnav #access ul li.with-megamenu>ul.sub-menu,.header_type5.customnav #access ul li.with-megamenu:hover>ul.sub-menu,.header_type5.customnav #access ul li:hover> ul,.full_width_header .header_type1.header_left.customnav #access ul li.with-megamenu>ul.sub-menu,.full_width_header .header_type1.header_left.customnav #access ul li.with-megamenu:hover>ul.sub-menu{top:90px;}</style>
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
	<!-- <body class="estate_agent-template-default single single-estate_agent postid-57 using-mobile-header-sticky elementor-default elementor-kit-22">
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
							<input type="hidden" id="security-login-mobile" name="security-login-mobile" value="1763ad61be-1656435529">
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
							<input type="hidden" id="security-register-mobile" name="security-register-mobile" value="3442ede80f-1656435529">
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
							<input type="hidden" id="security-forgot-mobile" name="security-forgot-mobile" value="6a25fa81c6" /><input type="hidden" name="_wp_http_referer" value="/estate_agent/michaela-finney/" />
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
												<li id="menu-item-853" class="menu-item menu-item-type-post_type menu-item-object-estate_agent current-menu-item   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Agent Profile Page</a></li>
												<li id="menu-item-18162" class="menu-item menu-item-type-post_type menu-item-object-page   "><a class="menu-item-link" href="https://lasvegas.wpresidence.net/agent-list-sidebar-left/">Agents List Page</a></li>
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
				<div class="header_media  mobile_header_media_sticky_yes header_mediatype_0 with_search_1 header_media_non_elementor">
					<div id="gmap_wrapper" class=" with_open_street " data-post_id="57" data-cur_lat="" data-cur_long="" style="height:450px">
						<div id="googleMap" class="" style="height:450px"></div>
						<div class="tooltip"> click to enable zoom</div>
						<div id="gmap-loading">
							loading...
							<div class="new_prelader"></div>
						</div>
						<div id="gmap-noresult">
							We didn&#039;t find any results 
						</div>
						<div class="gmap-controls  with_open_street  ">
							<div id="openmap"><i class="fas fa-angle-down"></i>open map</div>
							<div id="gmap-control">
								<span id="map-view"><i class="far fa-image"></i>View</span>
								<span id="map-view-roadmap" class="map-type">Roadmap</span>
								<span id="map-view-satellite" class="map-type">Satellite</span>
								<span id="map-view-hybrid" class="map-type">Hybrid</span>
								<span id="map-view-terrain" class="map-type">Terrain</span>
								<span id="geolocation-button"><i class="fas fa-map-marker-alt"></i>My Location</span>
								<span id="gmap-full"><i class="fas fa-arrows-alt"></i>Fullscreen</span>
								<span id="gmap-prev"><i class="fas fa-chevron-left"></i>Prev</span>
								<span id="gmap-next">Next<i class="fas fa-chevron-right"></i></span>
							</div>
							<div id="gmapzoomplus"><i class="fas fa-plus"></i> </div>
							<div id="gmapzoomminus"><i class="fas fa-minus"></i></div>
						</div>
					</div>
				</div> -->
                <?php include("subheader.php"); ?>
				<div class="pre_search_wrapper"></div>
				<div class="container content_wrapper">
					<div class="row">
                    <div id="gmap_wrapper" class=" with_open_street " data-post_id="57" data-cur_lat="" data-cur_long="" style="height:450px">
						<div id="googleMap" class="" style="height:450px"></div>
						<div class="tooltip"> click to enable zoom</div>
						<div id="gmap-loading">
							loading...
							<div class="new_prelader"></div>
						</div>
						<div id="gmap-noresult">
							We didn&#039;t find any results 
						</div>
						<div class="gmap-controls  with_open_street  ">
							<div id="openmap"><i class="fas fa-angle-down"></i>open map</div>
							<div id="gmap-control">
								<span id="map-view"><i class="far fa-image"></i>View</span>
								<span id="map-view-roadmap" class="map-type">Roadmap</span>
								<span id="map-view-satellite" class="map-type">Satellite</span>
								<span id="map-view-hybrid" class="map-type">Hybrid</span>
								<span id="map-view-terrain" class="map-type">Terrain</span>
								<span id="geolocation-button"><i class="fas fa-map-marker-alt"></i>My Location</span>
								<span id="gmap-full"><i class="fas fa-arrows-alt"></i>Fullscreen</span>
								<span id="gmap-prev"><i class="fas fa-chevron-left"></i>Prev</span>
								<span id="gmap-next">Next<i class="fas fa-chevron-right"></i></span>
							</div>
							<div id="gmapzoomplus"><i class="fas fa-plus"></i> </div>
							<div id="gmapzoomminus"><i class="fas fa-minus"></i></div>
						</div>
					</div>
						<div class="col-xs-12 col-md-12 breadcrumb_container">
							<ol class="breadcrumb">
								<li><a href="https://lasvegas.wpresidence.net/">Home</a></li>
								<li class="active">Michaela Finney</li>
							</ol>
						</div>
						<div class=" col-md-9 rightmargin ">
							<span class="entry-title listing_loader_title">Your search results</span>
							<div class="spinner" id="listing_loader">
								<div class="rect1"></div>
								<div class="rect2"></div>
								<div class="rect3"></div>
								<div class="rect4"></div>
								<div class="rect5"></div>
							</div>
							<div id="listing_ajax_container">
							
							</div>
							<div id="content_container">
								<div class="container_agent">
									<div class="single-content single-agent">
										<div class="wpestate_agent_details_wrapper">
											<div class="col-md-5 agentpic-wrapper">
												<div class="agent-listing-img-wrapper" data-link="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">
													<div class="agentpict" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person7-21-500x328.png)"> </div>
												</div>
												<div class="agent_unit_social_single">
													<a href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-pinterest"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
												</div>
											</div>
											<div class="col-md-7 agent_details">
												<h3><a href=""><?php echo $pro['ProjectName'] ?></a></h3>
												<div class="agent_position"><?php echo $pro['ProjectType'] ?></div>
												<div class="agent_detail agent_phone_class"><i class="fas fa-phone"></i><a href="tel:(305) 555-4555">(305) 555-4555</a></div>
												<div class="agent_detail agent_mobile_class"><i class="fas fa-mobile"></i></i><a href="tel:(305) 555-4555">(305) 555-4555</a></div>
												<div class="agent_detail agent_email_class"><i class="far fa-envelope"></i><a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#016c68626960646d41766463726875642f6f6475"><span class="__cf_email__" data-cfemail="e08d89838881858ca097858293899485ce8e8594">[email&#160;protected]</span></a></div>
												<div class="agent_detail agent_skype_class"><i class="fab fa-skype"></i>michaela.roja</div>
												<div class="agent_detail agent_web_class"><i class="fas fa-desktop"></i><a href="http://website.net/" target="_blank">website.net</a></div>
											</div>
											<div class="row custom_details_container">
												<a class="wpresidence_button send_email_agent" href="#show_contact">
												Send Email </a>
												<a class="wpresidence_button wpresidence_button_inverse realtor_call" href="tel:(305) 555-4555 ">
												<i class="fas fa-phone"></i>
												Call <span class="agent_call_no">(305) 555-4555</span></a>
												<a class="wpresidence_button wpresidence_button_inverse realtor_whatsapp" href="https://api.whatsapp.com/send?phone=(305)%20555-4555&amp;text=Hello%20I'm%20interested%20in%20one%20of%20your%20listings.">
												<i class="fab fa-whatsapp"></i>
												WhatsApp</a>
												<div class="custom_parameter_wrapper">
													<div class="col-md-4">
														<span class="custom_parameter_label">
														Location </span>
														<span class="custom_parameter_value">
														18 years as Expert Realtor at Madrid Realty </span>
													</div>
													<div class="col-md-4">
														<span class="custom_parameter_label">
														 Office Address</span>
														<span class="custom_parameter_value">
														Best Realtor in Madrid from 2000-2018 </span>
													</div>
													<div class="col-md-4">
														<span class="custom_parameter_label">
														Office Hours </span>
														<span class="custom_parameter_value">
														9 AM - 5 PM, Monday - Saturday </span>
													</div>
													<!-- <div class="col-md-4">
														<span class="custom_parameter_label">
														MLS Number </span>
														<span class="custom_parameter_value">
														12345 MYID - Until 12/12/2025 </span>
													</div> -->
													<!-- <div class="col-md-4">
														<span class="custom_parameter_label">
														Languages Spoken </span>
														<span class="custom_parameter_value">
														French, Spanish, English </span>
													</div> -->
													<!-- <div class="col-md-4">
														<span class="custom_parameter_label">
														Office Address </span>
														<span class="custom_parameter_value">
														Calle de Toledo, 28005 Madrid, Spain </span>
													</div> -->
												</div>
												<!-- <div class="developer_taxonomy agent_taxonomy">
													<h4>Specialties &amp; Service Areas</h4>
													<a href="https://lasvegas.wpresidence.net/property_county_state_agent/comunidad-de-madrid/" rel="tag">Comunidad de Madrid</a><a href="https://lasvegas.wpresidence.net/property_city_agent/madrid/" rel="tag">Madrid</a><a href="https://lasvegas.wpresidence.net/property_area_agent/malasana/" rel="tag">Malasaña</a><a href="https://lasvegas.wpresidence.net/property_category_agent/residential/" rel="tag">Residential</a><a href="https://lasvegas.wpresidence.net/property_action_category_agent/commercial/" rel="tag">Commercial</a>
												</div> -->
											</div>
										</div>
										<div class="agent_content col-md-12">
											<h4>About Me </h4>
											<p><?php echo $pro['LongDescription'] ?></p>
											
										</div>
										
									</div>
									<!-- <div class="agent_contanct_form ">
										<h4 id="show_contact">Contact Me</h4>
										<div class="schedule_meeting">Schedule a showing?</div>
										<div class="alert-box error">
											<div class="alert-message" id="alert-agent-contact"></div>
										</div>
										<div class="schedule_wrapper" style="display: none;">
											<input name="schedule_day" class="schedule_day form-control" type="text" placeholder="Day" aria-required="true" class="form-control">
											<select name="schedule_hour" id="schedule_hour" class="form-control">
												<option value="0">Time</option>
												<option value="7:00">7:00</option>
												<option value="7:15">7:15</option>
												<option value="7:30">7:30</option>
												<option value="7:45">7:45</option>
												<option value="8:00">8:00</option>
												<option value="8:15">8:15</option>
												<option value="8:30">8:30</option>
												<option value="8:45">8:45</option>
												<option value="9:00">9:00</option>
												<option value="9:15">9:15</option>
												<option value="9:30">9:30</option>
												<option value="9:45">9:45</option>
												<option value="10:00">10:00</option>
												<option value="10:15">10:15</option>
												<option value="10:30">10:30</option>
												<option value="10:45">10:45</option>
												<option value="11:00">11:00</option>
												<option value="11:15">11:15</option>
												<option value="11:30">11:30</option>
												<option value="11:45">11:45</option>
												<option value="12:00">12:00</option>
												<option value="12:15">12:15</option>
												<option value="12:30">12:30</option>
												<option value="12:45">12:45</option>
												<option value="13:00">13:00</option>
												<option value="13:15">13:15</option>
												<option value="13:30">13:30</option>
												<option value="13:45">13:45</option>
												<option value="14:00">14:00</option>
												<option value="14:15">14:15</option>
												<option value="14:30">14:30</option>
												<option value="14:45">14:45</option>
												<option value="15:00">15:00</option>
												<option value="15:15">15:15</option>
												<option value="15:30">15:30</option>
												<option value="15:45">15:45</option>
												<option value="16:00">16:00</option>
												<option value="16:15">16:15</option>
												<option value="16:30">16:30</option>
												<option value="16:45">16:45</option>
												<option value="17:00">17:00</option>
												<option value="17:15">17:15</option>
												<option value="17:30">17:30</option>
												<option value="17:45">17:45</option>
												<option value="18:00">18:00</option>
												<option value="18:15">18:15</option>
												<option value="18:30">18:30</option>
												<option value="18:45">18:45</option>
												<option value="19:00">19:00</option>
												<option value="19:15">19:15</option>
												<option value="19:30">19:30</option>
												<option value="19:45">19:45</option>
											</select>
										</div>
										<div class="contact_form_flex_wrapper">
											<input name="contact_name" id="agent_contact_name" type="text" placeholder="Your Name" aria-required="true" class="form-control">
											<input type="text" name="email" class="form-control" id="agent_user_email" aria-required="true" placeholder="Your Email">
											<input type="text" name="phone" class="form-control" id="agent_phone" placeholder="Your Phone">
										</div>
										<textarea id="agent_comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true"></textarea>
										<div class="gpr_wrapper"><input type="checkbox" role="checkbox" aria-checked="false" id="wpestate_agree_gdpr" class="wpestate_agree_gdpr" name="wpestate_agree_gdpr" />
											<label for="wpestate_agree_gdpr">I consent to the <a target="_blank" href="https://lasvegas.wpresidence.net/">GDPR Terms</a></label>
										</div>
										<input type="submit" class="wpresidence_button agent_submit_class " id="agent_submit" value="Send Email">
										<input name="prop_id" type="hidden" id="agent_property_id" value="0">
										<input name="prop_id" type="hidden" id="agent_id" value="57">
										<input type="hidden" name="contact_ajax_nonce" id="agent_property_ajax_nonce" value="66dc2680ca" />
									</div> -->
								</div>
								<!-- <div class="mylistings agent_listing agency_listings_title single_listing_block">
									<h3 class="agent_listings_title">My Listings</h3>
									<input type="hidden" id="wpestate_agent_listings_nonce" value="8b4cdabddc" />
									<div class="term_bar_wrapper" data-agent_id="-1" data-post_id="57">
										<div class="term_bar_item active_term" data-term_id="0" data-term_name="all">All (4)</div>
										<div class="term_bar_item " data-term_id="37" data-term_name="duplexes">Duplexes (1)</div>
										<div class="term_bar_item " data-term_id="44" data-term_name="houses">Houses (1)</div>
										<div class="term_bar_item " data-term_id="70" data-term_name="villas">Villas (2)</div>
									</div>
									<div class="agency_listings_wrapper">
										<div class="col-md-6 listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-800x467.jpg" data-modal-title="Townhouse for Rent" data-modal-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/" data-listid="111">
											<div class="property_listing  property_card_default  " data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">
												<div class="listing-unit-img-wrapper">
													<div class="prop_new_details">
														<div class="prop_new_details_back"></div>
														<div class="property_media">
															<i class="fas fa-video"></i>
															<i class="fas fa-camera"></i> 5
														</div>
														<div class="property_location_image">
															<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/winchester/" rel="tag">Winchester</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a>
														</div>
														<div class="featured_gradient"></div>
													</div>
													<a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-525x328.jpg" /></a> 
													<div class="tag-wrapper">
														<div class="featured_div">Featured</div>
														<div class="status-wrapper">
															<div class="action_tag_wrapper Rentals ">Rentals</div>
														</div>
													</div>
												</div>
												<div class="property-unit-information-wrapper">
													<h4>
														<a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">
														Townhouse for Rent </a>
													</h4>
													<div class="listing_unit_price_wrapper">
														100 $ <span class="price_label">/ sq. ft.</span>
													</div>
													<div class="listing_details the_grid_view">
														Mineral Reserves: 2008 core drilling and testing (on just 60 of the 1,100 acres) proved 30 <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/" class="unit_more_x"> ...</a> 
													</div>
													<div class="listing_details the_list_view">
														Mineral Reserves: 2008 core drilling and testing (on just 60 of the 1,100 acres) proved 30-60 million tons of high- <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/" class="unit_more_x"> ...</a> 
													</div>
													<div class="property_listing_details">
														<span class="inforoom">
															<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
															</svg>
															2
														</span>
														<span class="infobath">
															<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
															</svg>
															5
														</span>
														<span class="infosize">
															<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
															</svg>
															29,000 ft<sup>2</sup>
														</span>
														<a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/" target="_self" class="unit_details_x">details</a>
													</div>
													<div class="property_location">
														<div class="property_agent_wrapper">
															<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person7-21-120x120.png')"></div>
															<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
															<a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Michaela Finney</a>
														</div>
														<div class="listing_actions">
															<div class="share_unit">
																<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/&amp;t=Townhouse+for+Rent" target="_blank" rel="noreferrer" class="social_facebook"></a>
																<a href="https://twitter.com/intent/tweet?text=Townhouse+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ftownhouse-for-rent-2%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
																<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/09/interior-4-800x790.jpg&amp;description=Townhouse+for+Rent" target="_blank" rel="noreferrer" class="social_pinterest"></a>
																<a href="https://api.whatsapp.com/send?text=Townhouse+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ftownhouse-for-rent-2%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
																<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#dabfb7bbb3b69abfb7bbb3b6f4b9b5b7e5a9afb8b0bfb9aee78eb5adb4b2b5afa9bff1bcb5a8f188bfb4aefcbbb7aae1b8b5bea3e7b2aeaeaaa9ffe99bffe89cffe89cb6bba9acbfbdbba9f4adaaa8bfa9b3bebfb4b9bff4b4bfaeffe89cbfa9aebbaebf85aaa8b5aabfa8aea3ffe89caeb5adb4b2b5afa9bff7bcb5a8f7a8bfb4aef7e8ffe89c" data-action="share email" class="social_email"></a>
															</div>
															<span class="share_list" data-original-title="share"></span>
															<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="111"></span>
															<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-143x83.jpg" data-pid="111"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38-800x467.jpg" data-modal-title="Apartment Space for Rent" data-modal-link="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" data-listid="19365">
											<div class="property_listing  property_card_default  " data-link="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/">
												<div class="listing-unit-img-wrapper">
													<div class="prop_new_details">
														<div class="prop_new_details_back"></div>
														<div class="property_media">
															<i class="fas fa-video"></i>
															<i class="fas fa-camera"></i> 6
														</div>
														<div class="property_location_image">
															<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/winchester/" rel="tag">Winchester</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a>
														</div>
														<div class="featured_gradient"></div>
													</div>
													<a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38-525x328.jpg" /></a> 
													<div class="tag-wrapper">
														<div class="status-wrapper">
															<div class="action_tag_wrapper Rentals ">Rentals</div>
														</div>
													</div>
												</div>
												<div class="property-unit-information-wrapper">
													<h4>
														<a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/">
														Apartment Space for Rent </a>
													</h4>
													<div class="listing_unit_price_wrapper">
														800 $ <span class="price_label">/ month</span>
													</div>
													<div class="listing_details the_grid_view">
														Downtown Frederick hot spot. Top location for local entertainment. All fixtures are includ <a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" class="unit_more_x"> ...</a> 
													</div>
													<div class="listing_details the_list_view">
														Downtown Frederick hot spot. Top location for local entertainment. All fixtures are included. Liquor license can be <a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" class="unit_more_x"> ...</a> 
													</div>
													<div class="property_listing_details">
														<span class="inforoom">
															<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
															</svg>
															2
														</span>
														<span class="infobath">
															<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
															</svg>
															4
														</span>
														<span class="infosize">
															<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
															</svg>
															500 ft<sup>2</sup>
														</span>
														<a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" target="_self" class="unit_details_x">details</a>
													</div>
													<div class="property_location">
														<div class="property_agent_wrapper">
															<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person7-21-120x120.png')"></div>
															<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
															<a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Michaela Finney</a>
														</div>
														<div class="listing_actions">
															<div class="share_unit">
																<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/&amp;t=Apartment+Space+for+Rent" target="_blank" rel="noreferrer" class="social_facebook"></a>
																<a href="https://twitter.com/intent/tweet?text=Apartment+Space+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-space-for-rent%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
																<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/09/interior38.jpg&amp;description=Apartment+Space+for+Rent" target="_blank" rel="noreferrer" class="social_pinterest"></a>
																<a href="https://api.whatsapp.com/send?text=Apartment+Space+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-space-for-rent%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
																<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#741119151d18341119151d185a171b194b0701161e11170049350415060019111a005f27041517115f121b065f26111a00521519044f161b100d491c0000040751473551463251463218150702111315075a03040611071d10111a17115a1a11005146321107001500112b04061b041106000d514632150415060019111a0059070415171159121b065906111a00514632" data-action="share email" class="social_email"></a>
															</div>
															<span class="share_list" data-original-title="share"></span>
															<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="19365"></span>
															<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38-143x83.jpg" data-pid="19365"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/interior3-5-800x467.jpg" data-modal-title="Family Home for Sale" data-modal-link="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" data-listid="160">
											<div class="property_listing  property_card_default  " data-link="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/">
												<div class="listing-unit-img-wrapper">
													<div class="prop_new_details">
														<div class="prop_new_details_back"></div>
														<div class="property_media">
															<i class="fas fa-video"></i>
															<i class="fas fa-camera"></i> 5
														</div>
														<div class="property_location_image">
															<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/the-strip/" rel="tag">The Strip</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a>
														</div>
														<div class="featured_gradient"></div>
													</div>
													<a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/interior3-5-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/interior3-5-525x328.jpg" /></a> 
													<div class="tag-wrapper">
														<div class="status-wrapper">
															<div class="action_tag_wrapper Rentals ">Rentals</div>
														</div>
													</div>
												</div>
												<div class="property-unit-information-wrapper">
													<h4>
														<a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/">
														Family Home for Sale </a>
													</h4>
													<div class="listing_unit_price_wrapper">
														800 $ <span class="price_label">/ month</span>
													</div>
													<div class="listing_details the_grid_view">
														Downtown Frederick hot spot. Top location for local entertainment. All fixtures are includ <a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" class="unit_more_x"> ...</a> 
													</div>
													<div class="listing_details the_list_view">
														Downtown Frederick hot spot. Top location for local entertainment. All fixtures are included. Liquor license can be <a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" class="unit_more_x"> ...</a> 
													</div>
													<div class="property_listing_details">
														<span class="inforoom">
															<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
															</svg>
															2
														</span>
														<span class="infobath">
															<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
															</svg>
															4
														</span>
														<span class="infosize">
															<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
															</svg>
															500 ft<sup>2</sup>
														</span>
														<a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" target="_self" class="unit_details_x">details</a>
													</div>
													<div class="property_location">
														<div class="property_agent_wrapper">
															<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person7-21-120x120.png')"></div>
															<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
															<a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Michaela Finney</a>
														</div>
														<div class="listing_actions">
															<div class="share_unit">
																<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/&amp;t=Family+Home+for+Sale" target="_blank" rel="noreferrer" class="social_facebook"></a>
																<a href="https://twitter.com/intent/tweet?text=Family+Home+for+Sale+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ffamily-home-for-sale%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
																<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2014/05/interior3-5.jpg&amp;description=Family+Home+for+Sale" target="_blank" rel="noreferrer" class="social_pinterest"></a>
																<a href="https://api.whatsapp.com/send?text=Family+Home+for+Sale+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ffamily-home-for-sale%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
																<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#95f0f8f4fcf9d5f0f8f4fcf9bbf6faf8aae6e0f7fff0f6e1a8d3f4f8fcf9ecbeddfaf8f0bef3fae7bec6f4f9f0b3f4f8e5aef7faf1eca8fde1e1e5e6b0a6d4b0a7d3b0a7d3f9f4e6e3f0f2f4e6bbe2e5e7f0e6fcf1f0fbf6f0bbfbf0e1b0a7d3f0e6e1f4e1f0cae5e7fae5f0e7e1ecb0a7d3f3f4f8fcf9ecb8fdfaf8f0b8f3fae7b8e6f4f9f0b0a7d3" data-action="share email" class="social_email"></a>
															</div>
															<span class="share_list" data-original-title="share"></span>
															<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="160"></span>
															<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/interior3-5-143x83.jpg" data-pid="160"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-800x467.jpg" data-modal-title="Modern Penthouse Apartment" data-modal-link="https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/" data-listid="145">
											<div class="property_listing  property_card_default  " data-link="https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/">
												<div class="listing-unit-img-wrapper">
													<div class="prop_new_details">
														<div class="prop_new_details_back"></div>
														<div class="property_media">
															<i class="fas fa-video"></i>
															<i class="fas fa-camera"></i> 6
														</div>
														<div class="property_location_image">
															<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/winchester/" rel="tag">Winchester</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a>
														</div>
														<div class="featured_gradient"></div>
													</div>
													<a href="https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-525x328.jpg" /></a> 
													<div class="tag-wrapper">
														<div class="status-wrapper">
															<div class="action_tag_wrapper Rentals ">Rentals</div>
														</div>
													</div>
												</div>
												<div class="property-unit-information-wrapper">
													<h4>
														<a href="https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/">
														Modern Penthouse Apartment </a>
													</h4>
													<div class="listing_unit_price_wrapper">
														2.000 $ <span class="price_label">/ month</span>
													</div>
													<div class="listing_details the_grid_view">
														Mckinley Hill is situated inside Fort Bonifacio which is a 50 hectares owned by Megaworld. <a href="https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/" class="unit_more_x"> ...</a> 
													</div>
													<div class="listing_details the_list_view">
														Mckinley Hill is situated inside Fort Bonifacio which is a 50 hectares owned by Megaworld. Mckinley Hill is Said to <a href="https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/" class="unit_more_x"> ...</a> 
													</div>
													<div class="property_listing_details">
														<span class="inforoom">
															<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
															</svg>
															2
														</span>
														<span class="infobath">
															<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
															</svg>
															2.5
														</span>
														<span class="infosize">
															<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
															</svg>
															250 ft<sup>2</sup>
														</span>
														<a href="https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/" target="_self" class="unit_details_x">details</a>
													</div>
													<div class="property_location">
														<div class="property_agent_wrapper">
															<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person7-21-120x120.png')"></div>
															<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
															<a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Michaela Finney</a>
														</div>
														<div class="listing_actions">
															<div class="share_unit">
																<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/&amp;t=Modern+Penthouse+Apartment" target="_blank" rel="noreferrer" class="social_facebook"></a>
																<a href="https://twitter.com/intent/tweet?text=Modern+Penthouse+Apartment+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fmodern-penthouse-apartment%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
																<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/modern-penthouse-apartment/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/11/home2.jpg&amp;description=Modern+Penthouse+Apartment" target="_blank" rel="noreferrer" class="social_pinterest"></a>
																<a href="https://api.whatsapp.com/send?text=Modern+Penthouse+Apartment+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fmodern-penthouse-apartment%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
																<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#9bfef6faf2f7dbfef6faf2f7b5f8f4f6a4e8eef9f1fef8efa6d6f4fffee9f5b0cbfef5eff3f4eee8feb0daebfae9eff6fef5efbdfaf6eba0f9f4ffe2a6f3efefebe8bea8dabea9ddbea9ddf7fae8edfefcfae8b5ecebe9fee8f2fffef5f8feb5f5feefbea9ddfee8effaeffec4ebe9f4ebfee9efe2bea9ddf6f4fffee9f5b6ebfef5eff3f4eee8feb6faebfae9eff6fef5efbea9dd" data-action="share email" class="social_email"></a>
															</div>
															<span class="share_list" data-original-title="share"></span>
															<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="145"></span>
															<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-143x83.jpg" data-pid="145"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="spinner" id="listing_loader">
										<div class="new_prelader"></div>
									</div>
									<div class="load_more_ajax_cont">
										<input type="button" class="wpresidence_button listing_load_more" value="Load More Properties">
									</div>
								</div> -->
								<!-- <div class="property_reviews_wrapper agent_reviews_wrapper">
									<h4>Agent Reviews </h4>
									<h5 class="review_notice">You need to <span id="login_trigger_modal">login</span> in order to post a review </h5>
								</div> -->
							</div>
						</div>
						<!-- <div class="clearfix visible-xs"></div>
						<div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary">
							<div id="primary_sidebar_wrapper">
								<ul class="xoxo">
									<li id="multiple_currency_widget-1" class="widget-container multiple_currency_widget">
										<h3 class="widget-title-sidebar">Change Currency</h3>
										<div class="dropdown form-control">
											<div data-toggle="dropdown" id="sidebar_currency_list" class="sidebar_filter_menu">USD <span class="caret caret_sidebar"></span></div>
											<input type="hidden" name="filter_curr[]" value="">
											<ul id="list_sidebar_curr" class="dropdown-menu filter_menu list_sidebar_currency" role="menu" aria-labelledby="sidebar_currency_list">
												<li role="presentation" data-curpos="after" data-coef="1" data-value="USD" data-symbol="USD" data-pos="-1">USD </li>
												<li role="presentation" data-curpos="after" data-coef="1.74" data-value="USD" data-symbol="USD" data-pos="0">USD </li>
												<li role="presentation" data-curpos="before" data-coef="2.44" data-value="EGB" data-symbol="EGB" data-pos="1">EGB </li>
												<li role="presentation" data-curpos="before" data-coef="1.33" data-value="YEN" data-symbol="YEN" data-pos="2">YEN </li>
											</ul>
										</div>
										<input type="hidden" id="wpestate_change_currency" value="2c4ac2f45b" /> 
									</li>
									<li id="measurement_unit_widget-1" class="widget-container measurement_unit_widget">
										<h3 class="widget-title-sidebar">Change Measurement</h3>
										<div class="dropdown form-control">
											<div data-toggle="dropdown" id="sidebar_measure_unit_list" class="sidebar_filter_menu">square feet - ft<sup>2</sup> <span class="caret caret_sidebar"></span></div>
											<input type="hidden" name="filter_curr[]" value="">
											<ul id="list_sidebar_measure_unit" class="dropdown-menu filter_menu list_sidebar_measure_unit" role="menu" aria-labelledby="sidebar_currency_list">
												<li role="presentation" data-value="ft">square feet - ft<sup>2</sup></li>
												<li role="presentation" data-value="m">square meters - m<sup>2</sup></li>
												<li role="presentation" data-value="ac">acres - ac</li>
												<li role="presentation" data-value="yd">square yards - yd<sup>2</sup></li>
												<li role="presentation" data-value="ha">hectares - ha</li>
											</ul>
										</div>
										<input type="hidden" id="wpestate_change_measure" value="e19e9dc139" /> 
									</li>
									<li id="advanced_search_widget-1" class="widget-container advanced_search_sidebar boxed_widget">
										<h3 class="widget-title-sidebar">Advanced Search</h3>
										<form role="search" method="get" action="https://lasvegas.wpresidence.net/advanced-search/">
											<input type="hidden" id="wpestate_regular_search_nonce" name="wpestate_regular_search_nonce" value="1a2276c63f" /><input type="hidden" name="_wp_http_referer" value="/estate_agent/michaela-finney/" /><input type="text" id="sidebar-adv_location_" class="form-control adv_locations_search" name="adv_location" placeholder="Enter an address, state, city, area or zip code" value=""><script data-cfasync="false" src="https://lasvegas.wpresidence.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
												//<![CDATA[
												jQuery(document).ready(function(){
												     var availableTags = ["Temse","Marcory","Las Vegas","Downtown","The Strip","Meadows Village","Downtown East","Winchester","België","Nevada",];
												     jQuery(".adv_locations_search").autocomplete({
												         source: availableTags,
												         change: function() {
												             wpestate_show_pins();
												         }
												     });
												});
												//]]>
											</script>
											<div class="dropdown form-control ">
												<div data-toggle="dropdown" id="sidebar-bedrooms" class=" sidebar_filter_menu  " xx maca cacaall Bedrooms data-value="all">Bedrooms
													<span class="caret  caret_sidebar "></span>
												</div>
												<input type="hidden" doithere name="bedrooms" value="">
												<ul id="sidebar-search-bedrooms" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-bedrooms">
													<li role="presentation" data-value="all">Bedrooms</li>
													<li data-value="1" value="1">1</li>
													<li data-value="2" value="2">2</li>
													<li data-value="3" value="3">3</li>
													<li data-value="4" value="4">4</li>
													<li data-value="5" value="5">5</li>
													<li data-value="6" value="6">6</li>
													<li data-value="7" value="7">7</li>
													<li data-value="8" value="8">8</li>
													<li data-value="9" value="9">9</li>
													<li data-value="10" value="10">10</li>
												</ul>
											</div>
											<div class="dropdown form-control ">
												<div data-toggle="dropdown" id="sidebar-rooms" class=" sidebar_filter_menu  " xx maca cacaall Rooms data-value="all">Rooms
													<span class="caret  caret_sidebar "></span>
												</div>
												<input type="hidden" doithere name="rooms" value="">
												<ul id="sidebar-search-rooms" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-rooms">
													<li role="presentation" data-value="all">Rooms</li>
													<li data-value="1" value="1">1</li>
													<li data-value="2" value="2">2</li>
													<li data-value="3" value="3">3</li>
													<li data-value="4" value="4">4</li>
													<li data-value="5" value="5">5</li>
													<li data-value="6" value="6">6</li>
													<li data-value="7" value="7">7</li>
													<li data-value="8" value="8">8</li>
													<li data-value="9" value="9">9</li>
													<li data-value="10" value="10">10</li>
												</ul>
											</div>
											<div class="dropdown form-control ">
												<div data-toggle="dropdown" id="sidebar-adv_categ" class=" sidebar_filter_menu  " xxmaca cacaall Categories data-value="all">Categories
													<span class="caret  caret_sidebar "></span>
												</div>
												<input type="hidden" name="filter_search_type[]" value="">
												<ul id="sidebar-categlist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-adv_categ">
													<li role="presentation" data-value="all">Categories</li>
													<li role="presentation" data-value="apartments">Apartments</li>
													<li role="presentation" data-value="condos">Condos</li>
													<li role="presentation" data-value="duplexes">Duplexes</li>
													<li role="presentation" data-value="houses">Houses</li>
													<li role="presentation" data-value="villas">Villas</li>
												</ul>
											</div>
											<div class="dropdown form-control ">
												<div data-toggle="dropdown" id="sidebar-adv_actions" class=" sidebar_filter_menu  " xxmaca cacaall Types data-value="all">Types
													<span class="caret  caret_sidebar "></span>
												</div>
												<input type="hidden" name="filter_search_action[]" value="">
												<ul id="sidebar-actionslist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-adv_actions">
													<li role="presentation" data-value="all">Types</li>
													<li role="presentation" data-value="rentals">Rentals</li>
													<li role="presentation" data-value="sales">Sales</li>
												</ul>
											</div>
											<input type="text" id="sidebar-min-property-size" name="min-property-size" placeholder="Min Property Size" value="" class="advanced_select form-control">
											<div class="adv_search_slider">
												<p>
													<label for="amount">Price range:</label>
													<span id="amount_wd" class="wpresidence_slider_price">0 $ to 5.600.000 $</span>
												</p>
												<div id="slider_price_widget"></div>
												<input type="hidden" id="price_low_widget" name="price_low" value="0" />
												<input type="hidden" id="price_max_widget" name="price_max" value="5600000" />
											</div>
											<div class="adv_extended_options_text" id="adv_extended_options_text_widget">More Search Options</div>
											<div class="extended_search_check_wrapper">
												<span id="adv_extended_close_widget" class="adv_extended_close_button"><i class="fas fa-times"></i></span>
												<div class="extended_search_checker">
													<input type="checkbox" id="central-airwidget" name="central-air" name-title="Central Air" value="1">
													<label for="central-airwidget">Central Air</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="chair-accessiblewidget" name="chair-accessible" name-title="Chair Accessible" value="1">
													<label for="chair-accessiblewidget">Chair Accessible</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="elevatorwidget" name="elevator" name-title="Elevator" value="1">
													<label for="elevatorwidget">Elevator</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="equipped-kitchenwidget" name="equipped-kitchen" name-title="Equipped Kitchen" value="1">
													<label for="equipped-kitchenwidget">Equipped Kitchen</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="fireplacewidget" name="fireplace" name-title="Fireplace" value="1">
													<label for="fireplacewidget">Fireplace</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="garage-attachedwidget" name="garage-attached" name-title="Garage Attached" value="1">
													<label for="garage-attachedwidget">Garage Attached</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="gymwidget" name="gym" name-title="Gym" value="1">
													<label for="gymwidget">Gym</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="heatingwidget" name="heating" name-title="Heating" value="1">
													<label for="heatingwidget">Heating</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="hot-bathwidget" name="hot-bath" name-title="Hot Bath" value="1">
													<label for="hot-bathwidget">Hot Bath</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="media-roomwidget" name="media-room" name-title="Media Room" value="1">
													<label for="media-roomwidget">Media Room</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="natural-gaswidget" name="natural-gas" name-title="Natural Gas" value="1">
													<label for="natural-gaswidget">Natural Gas</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="poolwidget" name="pool" name-title="Pool" value="1">
													<label for="poolwidget">Pool</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="ventilationwidget" name="ventilation" name-title="Ventilation" value="1">
													<label for="ventilationwidget">Ventilation</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="washer-and-dryerwidget" name="washer-and-dryer" name-title="Washer and dryer" value="1">
													<label for="washer-and-dryerwidget">Washer and dryer</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="waterwidget" name="water" name-title="Water" value="1">
													<label for="waterwidget">Water</label>
												</div>
												<div class="extended_search_checker">
													<input type="checkbox" id="wifiwidget" name="wifi" name-title="WiFi" value="1">
													<label for="wifiwidget">WiFi</label>
												</div>
											</div>
											<button class="wpresidence_button" id="advanced_submit_widget">Search</button>
										</form>
									</li>
									<li id="property_categories-1" class="widget-container property_categories">
										<h3 class="widget-title-sidebar">Our Listings</h3>
										<div class="category_list_widget">
											<ul>
												<li><a href="https://lasvegas.wpresidence.net/property_category/apartments/">Apartments</a><span class="category_no">(2)</span></li>
												<li><a href="https://lasvegas.wpresidence.net/property_category/condos/">Condos</a><span class="category_no">(1)</span></li>
												<li><a href="https://lasvegas.wpresidence.net/property_category/duplexes/">Duplexes</a><span class="category_no">(2)</span></li>
												<li><a href="https://lasvegas.wpresidence.net/property_category/houses/">Houses</a><span class="category_no">(3)</span></li>
												<li><a href="https://lasvegas.wpresidence.net/property_category/villas/">Villas</a><span class="category_no">(6)</span></li>
											</ul>
										</div>
									</li>
									<li id="footer_latest_widget-1" class="widget-container latest_listings">
										<h3 class="widget-title-sidebar">Latest Listings</h3>
										<script type="text/javascript">
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
											<div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">
												<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
												<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">Townhouse for Rent</a></span> <span class=widget_latest_price>100 $ <span class="price_label">/ sq. ft.</span></span> </div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div> -->
					<div class="clearfix visible-xs"></div>
						<div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary">
							<div id="primary_sidebar_wrapper">
								<ul class="xoxo">
									<li id="ag_ag_dev_search_widget-1" class="widget-container advanced_search_sidebar ag_ag_dev_search_widget boxed_widget">
										<h3 class="widget-title-sidebar">For More Inquiry</h3>
										<form  method="post" action="">
											<input type="text"   name="name" class="form-control" placeholder="Name" required/>
											<input type="email"   name="EmailId" class="form-control" placeholder="email id" required/>
											<input type="tel"  name="phone_number" class="form-control" placeholder="Phone number" required/>
											<textarea type="text"  name="message" class="form-control" placeholder="Message" rows="3" cols="50" required>  </textarea>
											<button type="submit" class="wpresidence_button" id="advanced_submit_widget" name="submit">Submit</button>
										</form>
									</li>
									<li id="footer_latest_widget-2" class="widget-container latest_listings">
										<?php include("latestlisting.php");  ?>

										<!-- <h3 class="widget-title-sidebar">Latest Listings</h3>
										<script data-cfasync="false" src="https://lasvegas.wpresidence.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
											//<![CDATA[
											jQuery(document).ready(function(){
											   estate_sidebar_slider_carousel();
											});
											//]]>
										</script>
										<div class="latest_listings list_type"> -->
										<?php
											// $sql = $link->rawQuery("SELECT * from leasing_master WHERE isDeleted = 0 ORDER BY Lease_Name ASC LIMIT 3");
											// foreach ($sql as $pr)
											// {
											?>
											<!-- <div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">
												<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><img src="<?php echo $pr['ThumbnailURL'] ?>" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
												<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><?php echo $pr['Lease_Name'] ?>"</a></span> <span class=widget_latest_price><?php echo $pr['Price'] ?><span class="price_label"></span></span> </div>
											</div> -->
											<?php
											//}
											?>
											
										</div>
										
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
				</div>
			</div>
			<?php include("subfooter.php"); ?>
		</div>
        <?php include("footer.php"); ?>
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
						<input type="hidden" id="security-login-topbar" name="security-login-topbar" value="c80cf7b7bd-1656435529">
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
						<input type="hidden" id="security-register-topbar" name="security-register-topbar" value="14b62f7853-1656435529">
						<button class="wpresidence_button" id="wp-submit-register_topbar">Register</button>
					</div>
					<div class="login_form" id="forgot-pass-div">
						<div id="forgot-div-title-topbar">Reset Password</div>
						<div class="loginalert" id="forgot_pass_area_topbar"></div>
						<div class="loginrow">
							<input type="email" class="form-control" name="forgot_email" id="forgot_email_topbar" autofocus placeholder="Enter Your Email Address" size="20" />
						</div>
						<input type="hidden" id="security-forgot-topbar" name="security-forgot-topbar" value="facd656da0" /><input type="hidden" name="_wp_http_referer" value="/estate_agent/michaela-finney/" /> <input type="hidden" id="postid" value="
							57">
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
		<div class="navigational_links">
			<div class="nav-prev-wrapper">
				<div class="nav-prev">
					<a href="https://lasvegas.wpresidence.net/estate_agent/elena-pernia/" rel="prev">Elena Pernía</a> <i class="fas fa-angle-left"></i>
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
			var mapfunctions_vars = {"path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/css\/css-images","pin_images":"{\"rentals\":\"\",\"sales\":\"\",\"apartments\":\"\",\"condos\":\"\",\"duplexes\":\"\",\"houses\":\"\",\"villas\":\"\",\"apartmentsrentals\":\"\",\"condosrentals\":\"\",\"duplexesrentals\":\"\",\"housesrentals\":\"\",\"villasrentals\":\"\",\"apartmentssales\":\"\",\"condossales\":\"\",\"duplexessales\":\"\",\"housessales\":\"\",\"villassales\":\"\",\"idxpin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/sale.png\",\"single_pin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/single.png\",\"cloud_pin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/cloud.png\",\"userpin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/userpin.png\"}","geolocation_radius":"1000","adv_search":"1","in_text":" in ","zoom_cluster":"15","user_cluster":"yes","open_close_status":"0","open_height":"550","closed_height":"450","generated_pins":"1","geo_no_pos":"The browser couldn't detect your position!","geo_no_brow":"Geolocation is not supported by this browser.","geo_message":"m radius","show_adv_search":"","custom_search":"yes","listing_map":"top","slugs":["adv_location","bedrooms","rooms","adv_categ","adv_actions","min-property-size","property_price"],"hows":["like","greater","greater","like","like","greater","greater"],"measure_sys":"ft","close_map":"close map","show_g_search_status":"no","slider_price":"yes","slider_price_position":"7","adv_search_type":"1","is_half":"0","map_style":"[\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"weight\": \"2.00\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"geometry.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#9c9c9c\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"labels.text\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.man_made\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#eeeeee\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#7b7b7b\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"labels.text.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#46bcec\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c8d7d4\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#070707\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"labels.text.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    }\r\n]","shortcode_map_style":"","small_slider_t":"","is_prop_list":"0","is_tax":"0","half_no_results":"No results found!","fields_no":"7","type":"ROADMAP","useprice":"yes","use_price_pins_full_price":"no","use_single_image_pin":"no","loading_results":"loading results...","geolocation_type":"2","is_half_map_list":"0","is_normal_map_list":"0","is_adv_search":"0","ba":"BA","bd":"BD"};
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
			var googlecode_regular_vars = {"general_latitude":"40.43342740570791","general_longitude":"-3.6857248215705933","path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/css\/css-images","markers":"[]","idx_status":"0","page_custom_zoom":"10","generated_pins":"1","type":"ROADMAP","is_adv_search":"0","is_half_map_list":"0","is_normal_map_list":"0"};
			var googlecode_regular_vars2 = {"markers2":"[[\"Apartment%20Space%20for%20Rent\",36.16241230601900014107741299085319042205810546875,-115.1001977920499967922296491451561450958251953125,2,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E800%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-space-for-rent%2F\",19365,800,\"2\",\"4\",\"500 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"800%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Family%20Home%20for%20Sale\",36.14716587982439932602574117481708526611328125,-115.0591278076172017108547152020037174224853515625,3,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E800%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"houses\",\"rentals\",\"housesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ffamily-home-for-sale%2F\",160,800,\"2\",\"4\",\"500 ft<sup>2<\\\/sup>\",\"Houses\",\"Rentals\",\"800%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Modern%20Penthouse%20Apartment\",36.15700523196900206812642863951623439788818359375,-115.1123080076649927150356234051287174224853515625,4,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E2.000%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"duplexes\",\"rentals\",\"duplexesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fmodern-penthouse-apartment%2F\",145,2000,\"2\",\"2.5\",\"250 ft<sup>2<\\\/sup>\",\"Duplexes\",\"Rentals\",\"2000%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Townhouse%20for%20Rent\",36.188740058983711378459702245891094207763671875,-115.1177501678466938983547152020037174224853515625,5,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-800x790.jpg%20800w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E100%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20sq.%20ft.%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ftownhouse-for-rent-2%2F\",111,100,\"2\",\"5\",\"29,000 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"100%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"]]","agent_id":"-1"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/google_js/google_map_code.js?ver=4.4' id='googlecode_regular-js'></script>
		<script type='text/javascript' id='wpestate_property-js-extra'>
			/* <![CDATA[ */
			var wpestate_property_vars = {"singular_label":"[]","singular_values":"[]","label_principal":"Principal and Interest","label_hoo":"HOO fees","label_property_tax":"Property Tax","property_views":"Property Views"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-content/themes/wpresidence/js/property.js?ver=4.4' id='wpestate_property-js'></script>
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