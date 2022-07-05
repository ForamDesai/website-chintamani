<?php
	include("../../Helper/connect.php"); 
	
	$pid = $_GET['leaseID'] ;
	$lease=$link->rawQueryOne("select * from leasing_master where PK_lease=?",array($_REQUEST['leaseID']));
	if($link->count > 0) {
		$project_id=$lease['PK_lease'];
	}
	



	?>
<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<?php include("header.php"); ?>
	<div class="website-wrapper" id="all_wrapper">
		
	<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">


		<?php include("subheader.php"); ?>




		
				<div class="container content_wrapper">
					<div class="row">
						<div class="gallery_wrapper property_header_gallery_wrapper">
							<div class="status-wrapper"></div>
							<div class="col-md-6 image_gallery lightbox_trigger special_border" data-slider-no="1" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/interior35.jpg)  ">
								<div class="img_listings_overlay "></div>
							</div>
							<div  class="col-md-3 image_gallery lightbox_trigger  special_border_top  myBtn " data-slider-no="2" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/house4-800x467.jpg);opacity: 0.2; filter: brightness(90%);">
								<div class="img_listings_overlay"></div>
								<span class="img_listings_mes" style='color:black'; ><i class="fas fa-lock fa-lg"></i></span>
							</div>
							<div  class="col-md-3 image_gallery lightbox_trigger  special_border_top  myBtn " data-slider-no="3" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/house6-800x467.jpg);opacity: 0.2; filter: brightness(90%);">
								<div class="img_listings_overlay"></div>
								<span class="img_listings_mes" style='color:black'; ><i class="fas fa-lock fa-lg"></i></span>
							</div>
							<div class="col-md-3 image_gallery lightbox_trigger  myBtn" data-slider-no="4" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/house8-800x467.jpg);opacity: 0.2; filter: brightness(90%);">
								<div class="img_listings_overlay"></div>
								<span class="img_listings_mes" style='color:black'; ><i class="fas fa-lock fa-lg"></i></span>
							</div>
							<div  class="col-md-3 image_gallery last_gallery_item lightbox_trigger  myBtn" data-slider-no="5" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/house11-800x467.jpg);opacity: 0.2; filter: brightness(90%);  ">
								<div class="myBtn" class="img_listings_overlay img_listings_overlay_last"></div>
								<span class="img_listings_mes" style='color:black'; ><i class="fas fa-lock fa-lg"></i></span>
								
								
								
							</div>
						</div>

						<div >

						<style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>



<!-- 

						 <div style="display:none ;" >
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
							<input type="hidden" id="security-login-topbar" name="security-login-topbar" value="c70f189e17-1656426998">
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
							<input type="hidden" id="security-register-topbar" name="security-register-topbar" value="8acf1b727c-1656426998">
							<button class="wpresidence_button" id="wp-submit-register_topbar">Register</button>
						</div>
						<div class="login_form" id="forgot-pass-div">
							<div id="forgot-div-title-topbar">Reset Password</div>
							<div class="loginalert" id="forgot_pass_area_topbar"></div>
							<div class="loginrow">
								<input type="email" class="form-control" name="forgot_email" id="forgot_email_topbar" autofocus placeholder="Enter Your Email Address" size="20" />
							</div>
							<input type="hidden" id="security-forgot-topbar" name="security-forgot-topbar" value="facd656da0" /><input type="hidden" name="_wp_http_referer" value="/2014/05/27/these-were-the-most-expensive-las-vegas-condos/" /> <input type="hidden" id="postid" value="
								169">
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
			</div>     -->




<!-- The Modal -->
<div id="myModal" class="modal">
<div class="modal_login_back"></div>

<div class="modal_login_container " style='height:520px;'>
<div id="login-modal_close "></div>
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
							<input type="hidden" id="security-login-topbar" name="security-login-topbar" value="c70f189e17-1656426998">
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
							<input type="hidden" id="security-register-topbar" name="security-register-topbar" value="8acf1b727c-1656426998">
							<button class="wpresidence_button" id="wp-submit-register_topbar">Register</button>
						</div>

						<div class="login_form" id="forgot-pass-div">
							<div id="forgot-div-title-topbar">Reset Password</div>
							<div class="loginalert" id="forgot_pass_area_topbar"></div>
							<div class="loginrow">
								<input type="email" class="form-control" name="forgot_email" id="forgot_email_topbar" autofocus placeholder="Enter Your Email Address" size="20" />
							</div>
							<input type="hidden" id="security-forgot-topbar" name="security-forgot-topbar" value="facd656da0" /><input type="hidden" name="_wp_http_referer" value="/2014/05/27/these-were-the-most-expensive-las-vegas-condos/" /> <input type="hidden" id="postid" value="
								169">
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

  <!-- Modal content -->
  <!-- <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
	
  </div> -->

</div>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtn");
for (let index = 0; index < btn.length; index++) {
	const element = btn[index];
	element.addEventListener('click',function(){
		modal.style.display = "block";
		// console.log("clicked");

	})
	
}

// Get the <span> element that closes the modal
var span = document.getElementById("close");

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
                        




























						<div class="notice_area col-md-12 ">
							<div class="single_property_labels">
								<div class="property_title_label"><a href="https://lasvegas.wpresidence.net/property_action_category/sales/" rel="tag">
									<?php 
										if($lease["FK_Status"] == "8")
										{echo "Vacant";}
										else{echo "Occupied";}; ?>
									</a>
								</div>
								<div class="property_title_label actioncat"><a href="https://lasvegas.wpresidence.net/property_category/houses/" rel="tag">Houses</a></div>
							</div>
							<h1 class="entry-title entry-prop"><?php echo $lease["Lease_Name"]; ?></h1>
							<div class="price_area">₹&nbsp;<?php echo $lease["Price"] ?><span class="price_label"></span></div>
							<div class="property_categs">
								<i class="fas fa-map-marker-alt"></i>
								<?php echo  $lease["CompleteAddress"]; ?> 
							</div>
							<div class="prop_social">
								<div class="share_unit">
									<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/gorgeous-studio-for-rent/&amp;t=Gorgeous+Studio+for+Rent" target="_blank" rel="noreferrer" class="social_facebook">Facebook</a>
									<a href="https://twitter.com/intent/tweet?text=Gorgeous+Studio+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-studio-for-rent%2F" class="social_tweet" rel="noreferrer" target="_blank">Twitter</a>
									<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/gorgeous-studio-for-rent/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/10/interior35.jpg&amp;description=Gorgeous+Studio+for+Rent" target="_blank" rel="noreferrer" class="social_pinterest">Pinterest</a>
									<a href="https://api.whatsapp.com/send?text=Gorgeous+Studio+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-studio-for-rent%2F" class="social_whatsup" rel="noreferrer" target="_blank">WhatsApp</a>
									<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#a7c2cac6cecbe7c2cac6cecb89c4c8ca98d4d2c5cdc2c4d39ae0c8d5c0c2c8d2d48cf4d3d2c3cec88cc1c8d58cf5c2c9d381c6cad79cc5c8c3de9acfd3d3d7d48294e68295e18295e1cbc6d4d1c2c0c6d489d0d7d5c2d4cec3c2c9c4c289c9c2d38295e1c2d4d3c6d3c2f8d7d5c8d7c2d5d3de8295e1c0c8d5c0c2c8d2d48ad4d3d2c3cec88ac1c8d58ad5c2c9d38295e1" data-action="share email" class="social_email">Email</a>
								</div>
								<div class="title_share share_list single_property_action" data-original-title="share this page">
									<i class="fas fa-share-alt"></i>Share 
								</div>
								<div id="add_favorites" class="title_share single_property_action isnotfavorite" data-postid="59" data-original-title="add to favorites">
									<i class="far fa-heart"></i>Favorite 
								</div>
								<div id="print_page" class="title_share single_property_action" data-propid="59" data-original-title="print page">
									<i class="fas fa-print"></i>Print 
								</div>
							</div>
						</div>
						
					<!--main container division-->	
				<div class=" col-md-9 rightmargin full_width_prop">
					<span class="entry-title listing_loader_title">Your search results</span>
					<div class="spinner" id="listing_loader">
						<div class="rect1"></div>
						<div class="rect2"></div>
						<div class="rect3"></div>
						<div class="rect4"></div>
						<div class="rect5"></div>
					</div>
					<div id="listing_ajax_container"></div>
					<div class="single-content listing-content">
						<div class="single-overview-section panel-group property-panel">
							<h4 class="panel-title" id="">Overview</h4>
							<ul class="overview_element">
								<li class="first_overview">
									Updated On: 
								</li>
								<li class="first_overview_date">March 29, 2022</li>
							</ul>
							<ul class="overview_element">
								<li class="first_overview">
									<svg width="798" height="569" viewBox="0 0 798 569" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M236.65 0H560.87C567.29 0 573.12 2.61 577.33 6.83L656.2 85.7C660.75 90.24 663.02 96.2 663.02 102.17L663.03 216.94C667.14 217.92 671.04 220 674.23 223.21L712.37 261.37C717.33 265.63 720.47 271.96 720.47 279.02V329.58H754.52C760.95 329.58 766.78 332.19 770.99 336.41L790.71 356.12C795.25 360.66 797.52 366.63 797.52 372.59L797.53 446.06C797.53 458.91 787.1 469.35 774.24 469.35H717.9V545.52C717.9 558.38 707.47 568.81 694.61 568.81H624.8C611.94 568.81 601.51 558.38 601.51 545.52V469.35H196.02V545.52C196.02 558.38 185.59 568.81 172.73 568.81H102.92C90.06 568.81 79.63 558.38 79.63 545.52V469.35H23.29C10.43 469.35 0 458.91 0 446.06V372.59C0 366.16 2.61 360.34 6.82 356.12L26.54 336.41C31.08 331.87 37.04 329.6 43.01 329.58H77.04V279.02C77.06 273.06 79.33 267.1 83.87 262.55L123.31 223.11C126.34 220.08 130.18 217.89 134.49 216.89V102.17C134.49 95.74 137.1 89.91 141.31 85.7L220.19 6.83C224.73 2.28 230.69 0.01 236.65 0V0ZM52.65 376.16L46.58 382.23V422.77C281.37 422.77 516.16 422.77 750.95 422.77V382.23L744.88 376.16C514.13 376.16 283.4 376.16 52.65 376.16V376.16ZM262.99 119.54H534.51C547.37 119.54 557.8 129.97 557.8 142.83V216.29H616.45V111.81L551.22 46.58H246.3L181.07 111.81V216.29H239.7V142.83C239.7 129.97 250.14 119.54 262.99 119.54V119.54ZM511.22 166.12H286.28V216.29H511.22V166.12ZM149.44 469.35H126.21V522.23H149.44V469.35ZM671.32 469.35H648.09V522.23H671.32V469.35ZM639.74 262.87C479.08 262.87 318.44 262.87 157.78 262.87H149.42L123.62 288.66V329.58H673.89V288.57L648.22 262.87H639.74V262.87Z" fill="#333333" />
									</svg>
								</li>
								<li>5 Packs</li>
							</ul>
							<ul class="overview_element">
								<li class="first_overview">
									<svg width="517" height="515" viewBox="0 0 517 515" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M53.7957 274.151C131 273.543 208.204 272.936 285.409 272.328C320.502 272.052 355.595 271.776 390.687 271.499C408.709 271.357 436.246 267.321 453.855 271.002C483.718 277.245 500.827 291.055 460.56 297.045C394.658 306.848 320.713 297.873 254.042 298.06C220.181 298.154 186.32 298.249 152.459 298.344C132.142 298.4 111.826 298.457 91.5092 298.514C84.737 298.533 77.9649 298.552 71.1927 298.571C52.3786 304.32 40.7481 296.826 36.3013 276.088C52.8826 279.86 59.9619 254.352 43.3362 250.57C24.104 246.195 9.18371 253.464 2.87718 272.911C-7.86142 306.025 12.9416 323.181 40.7178 325.119C107.664 329.789 176.766 324.739 243.883 324.551C313.315 324.357 383.305 326.686 452.681 323.869C475.355 322.948 505.639 324.33 513.939 298.79C523.252 270.129 504.563 248.411 478.428 244.846C413.411 235.977 340.514 245.431 274.881 245.948C201.186 246.528 127.491 247.108 53.7957 247.688C36.7748 247.822 36.7351 274.285 53.7957 274.151Z" fill="#222222" />
										<path d="M466.461 323.548C474.73 375.537 434.999 433.231 387.646 453.943C349.846 470.477 295.94 463.719 254.54 464.503C214.778 465.257 180.991 468.261 146.51 445.99C109.925 422.358 55.4102 377.073 57.7829 329.415C58.6303 312.393 32.165 312.438 31.3198 329.415C28.8418 379.189 68.1589 422.234 105.975 450.969C163.88 494.97 203.297 492.106 274.482 490.561C338.061 489.181 389.722 494.909 438.653 449.799C477.721 413.783 500.49 370.025 491.979 316.513C489.311 299.741 463.807 306.861 466.461 323.548Z" fill="#222222" />
										<path d="M334.065 61.9826C335.204 45.8633 330.105 43.7571 345.043 34.9641C356.06 28.4795 367.53 30.2771 379.689 30.2471C414.788 30.1607 403.851 39.6988 403.886 73.8339C403.94 127.831 403.995 181.828 404.05 235.825C404.067 252.852 430.531 252.881 430.513 235.825C430.461 184.67 430.409 133.515 430.357 82.3597C430.335 60.6536 439.565 21.7027 418.084 7.15394C401.503 -4.07547 349.393 -0.082615 330.83 5.5742C302.887 14.0895 309.347 37.2869 307.602 61.9826C306.402 78.9773 332.87 78.9021 334.065 61.9826Z" fill="#222222" />
										<path d="M352.821 107.029C330.46 107.037 304.602 110.618 282.562 107.149C285.198 109.176 287.834 111.203 290.47 113.23C287.659 109.117 303.833 98.2036 305.929 96.6067C312.01 91.9742 315.44 89.1697 322.877 88.4098C328.161 87.8699 337.461 87.4048 342.258 89.8401C353.907 95.7527 352.133 108.756 351.855 119.376C351.41 136.411 377.873 136.401 378.318 119.376C378.914 96.5592 374.266 71.7971 349.293 64.3223C339.232 61.3106 327.763 61.3313 317.357 62.0418C303.547 62.9849 295.08 71.5673 284.66 79.9306C272.257 89.8861 250.532 115.735 271.027 130.299C279.718 136.474 294.167 133.512 304.151 133.509C320.374 133.503 336.597 133.498 352.821 133.492C369.848 133.486 369.877 107.023 352.821 107.029Z" fill="#222222" />
										<path d="M341.354 158.199C341.354 162.021 341.354 165.844 341.354 169.666C341.354 186.694 367.817 186.722 367.817 169.666C367.817 165.844 367.817 162.021 367.817 158.199C367.817 141.171 341.354 141.143 341.354 158.199Z" fill="#222222" />
										<path d="M277.405 164.373C278.206 166.629 278.029 165.509 277.797 167.892C277.106 175.015 284.373 181.124 291.029 181.124C298.759 181.124 303.568 175.035 304.26 167.892C304.605 164.343 304.116 160.695 302.923 157.338C300.531 150.608 293.895 146.105 286.646 148.097C280.131 149.887 275.001 157.608 277.405 164.373Z" fill="#222222" />
										<path d="M307.834 203.186C307.834 205.832 307.834 208.479 307.834 211.125C307.834 228.153 334.297 228.181 334.297 211.125C334.297 208.479 334.297 205.832 334.297 203.186C334.297 186.158 307.834 186.13 307.834 203.186Z" fill="#222222" />
										<path d="M317.537 488.987C317.537 493.398 317.537 497.808 317.537 502.219C317.537 519.246 344 519.275 344 502.219C344 497.808 344 493.398 344 488.987C344 471.959 317.537 471.931 317.537 488.987Z" fill="#222222" />
										<path d="M170.226 487.222C170.226 492.221 170.226 497.219 170.226 502.218C170.226 519.245 196.689 519.274 196.689 502.218C196.689 497.219 196.689 492.221 196.689 487.222C196.689 470.194 170.226 470.166 170.226 487.222Z" fill="#222222" />
									</svg>
								</li>
								<li> <?php echo $lease["CarpetArea"]; ?> ft<sup>2</sup>&nbsp;Carpet Area</li>
							</ul>
							<ul class="overview_element">
								<li class="first_overview">
									<svg width="696" height="525" viewBox="0 0 696 525" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M693.732 158.062C692.963 146.618 685.277 138.75 672.98 138.75C668.368 138.75 663.757 138.75 659.145 138.75C633.781 138.75 616.104 165.931 616.104 165.931C614.567 169.507 612.261 172.368 609.187 176.66C606.112 166.646 603.806 158.063 601.501 150.194C590.74 114.431 573.831 80.8125 550.774 50.7708C534.633 29.3125 511.576 22.1598 486.212 17.8681C440.097 10.7153 391.675 0 345.56 0C298.676 0 254.098 10.7153 207.982 17.8681C182.619 22.1598 159.561 30.0278 143.421 50.7708C120.363 81.5278 103.454 114.431 92.6936 150.194C90.3879 158.063 88.0821 166.646 85.0077 176.66C81.9334 171.653 79.6277 168.792 78.0905 165.931C78.0905 165.931 60.4128 138.75 35.0493 138.75C30.4378 138.75 25.8264 138.75 21.2148 138.75C8.91736 139.465 1.23136 147.333 0.462769 158.062C0.462769 165.931 0.462769 174.514 0.462769 182.382C0.462769 194.542 9.68593 202.41 22.752 202.41C35.818 202.41 48.884 202.41 61.95 202.41C67.3302 202.41 72.7103 202.41 77.3218 202.41C78.0904 203.125 78.0905 203.84 78.8591 204.556C77.3219 205.271 75.0161 205.986 74.2475 207.417C41.1981 236.743 23.5205 272.507 24.2891 315.424C25.0577 341.174 27.3635 366.208 30.4379 391.958C32.7436 411.271 37.3552 430.583 47.3468 448.465C51.1898 456.333 56.5699 462.055 65.793 463.486C70.4045 464.201 70.4046 467.062 70.4046 469.924C70.4046 480.653 70.4046 490.667 70.4046 501.396C70.4046 516.417 79.6277 525 95.7681 525C109.603 525 122.669 525 136.503 525C154.181 525 162.635 516.417 162.635 500.681C162.635 492.813 162.635 484.229 162.635 475.646C224.891 479.938 286.379 482.083 347.866 482.083C409.353 482.083 471.609 479.938 533.096 475.646C533.096 484.229 533.096 492.813 533.096 500.681C533.096 516.417 542.319 525 559.228 525C573.063 525 586.129 525 599.964 525C616.104 525 625.327 516.417 625.327 501.396C625.327 490.667 625.327 480.653 625.327 469.924C625.327 466.347 626.096 464.201 629.939 463.486C639.162 462.055 644.542 455.618 648.385 448.465C657.608 430.583 662.988 411.271 665.294 391.958C668.368 366.924 670.674 341.174 671.442 315.424C672.211 272.507 654.533 236.743 621.484 207.417C619.947 205.986 618.41 205.986 616.872 204.556C617.641 203.84 617.641 203.125 618.41 202.41C623.79 202.41 629.17 202.41 633.782 202.41C646.848 202.41 659.914 202.41 672.98 202.41C686.046 202.41 694.5 194.542 695.269 182.382C694.5 173.799 694.5 165.931 693.732 158.062ZM124.206 183.097C134.198 144.472 149.569 108.708 171.09 74.375C172.627 72.2292 173.396 70.7986 174.933 70.0833C176.47 68.6527 178.007 67.9375 180.313 67.2222C194.148 61.5 234.883 67.9375 345.56 67.2222C456.237 67.9375 498.51 61.5 512.344 67.2222C514.65 67.9375 516.187 68.6527 517.724 70.0833C519.261 71.5138 520.799 72.9444 521.567 74.375C543.088 107.993 558.46 144.472 568.451 183.097C569.22 185.958 569.22 188.819 569.988 190.25C495.435 184.528 420.113 180.951 345.56 180.951C271.007 180.951 196.453 183.812 121.132 190.25C123.437 188.104 123.437 185.243 124.206 183.097ZM135.735 346.181C108.834 346.181 86.545 325.438 86.545 300.403C86.545 275.368 108.834 254.625 135.735 254.625C162.635 254.625 184.925 275.368 184.925 300.403C184.925 326.153 162.635 346.181 135.735 346.181ZM558.46 346.181C531.559 346.181 509.27 325.438 509.27 300.403C509.27 275.368 531.559 254.625 558.46 254.625C585.36 254.625 607.649 275.368 607.649 300.403C607.649 326.153 585.36 346.181 558.46 346.181Z" fill="#222222" />
									</svg>
								</li>
								<li>2 Parking</li>
							</ul>
							<ul class="overview_element">
								<li class="first_overview">
									<svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M357.143 0H42.8571C31.4907 0 20.5898 4.50961 12.5526 12.5368C4.51529 20.5639 0 31.4511 0 42.8032V356.694C0 368.046 4.51529 378.933 12.5526 386.96C20.5898 394.987 31.4907 399.497 42.8571 399.497H357.143C368.509 399.497 379.41 394.987 387.447 386.96C395.485 378.933 400 368.046 400 356.694V42.8032C400 31.4511 395.485 20.5639 387.447 12.5368C379.41 4.50961 368.509 0 357.143 0ZM371.429 356.694C371.429 360.478 369.923 364.107 367.244 366.782C364.565 369.458 360.932 370.961 357.143 370.961H171.429V299.623H314.286C318.075 299.623 321.708 298.119 324.387 295.444C327.066 292.768 328.571 289.139 328.571 285.355C328.571 281.571 327.066 277.942 324.387 275.266C321.708 272.59 318.075 271.087 314.286 271.087H157.143C153.354 271.087 149.72 272.59 147.041 275.266C144.362 277.942 142.857 281.571 142.857 285.355V370.961H42.8571C39.0683 370.961 35.4347 369.458 32.7556 366.782C30.0765 364.107 28.5714 360.478 28.5714 356.694V171.213H142.857V199.748C142.857 203.532 144.362 207.162 147.041 209.837C149.72 212.513 153.354 214.016 157.143 214.016C160.932 214.016 164.565 212.513 167.244 209.837C169.923 207.162 171.429 203.532 171.429 199.748V114.142C171.429 110.358 169.923 106.729 167.244 104.053C164.565 101.377 160.932 99.8742 157.143 99.8742C153.354 99.8742 149.72 101.377 147.041 104.053C144.362 106.729 142.857 110.358 142.857 114.142V142.677H28.5714V42.8032C28.5714 39.0192 30.0765 35.3901 32.7556 32.7144C35.4347 30.0387 39.0683 28.5355 42.8571 28.5355H242.857V185.481C242.857 189.265 244.362 192.894 247.041 195.57C249.72 198.245 253.354 199.748 257.143 199.748H314.286C318.075 199.748 321.708 198.245 324.387 195.57C327.066 192.894 328.571 189.265 328.571 185.481C328.571 181.697 327.066 178.068 324.387 175.392C321.708 172.716 318.075 171.213 314.286 171.213H271.429V28.5355H357.143C360.932 28.5355 364.565 30.0387 367.244 32.7144C369.923 35.3901 371.429 39.0192 371.429 42.8032V356.694Z" fill="#222222" />
									</svg>
								</li>
								<li>190 ft<sup>2</sup></li>
							</ul>
							<!-- <ul class="overview_element">
								<li class="first_overview">
									<svg width="406" height="424" viewBox="0 0 406 424" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M290.204 0C297.84 0 304.03 6.19017 304.03 13.8261V66.9701C320.062 72.7236 331.682 88.0982 331.682 106C331.682 128.744 312.948 147.478 290.204 147.478C267.46 147.478 248.725 128.744 248.725 106C248.725 88.0982 260.345 72.7236 276.378 66.9701V13.8261C276.378 6.19017 282.568 0 290.204 0ZM115.073 0C122.709 0 128.899 6.19017 128.899 13.8261V66.9701C144.932 72.7236 156.552 88.0982 156.552 106C156.552 128.744 137.817 147.478 115.073 147.478C92.3294 147.478 73.5951 128.744 73.5951 106C73.5951 88.0982 85.2148 72.7236 101.247 66.9701V13.8261C101.247 6.19017 107.438 0 115.073 0ZM354.725 27.6522C382.648 27.6522 405.565 50.5689 405.565 78.4918V373.16C405.565 401.084 382.648 424 354.725 424H50.8396C22.917 424 0 401.084 0 373.16V78.4918C0 50.5689 22.917 27.6522 50.8396 27.6522H78.3478C85.6521 27.5489 92.3179 34.173 92.3179 41.4782C92.3179 48.7835 85.6521 55.4076 78.3478 55.3043H50.8396C37.7841 55.3043 27.6522 65.4359 27.6522 78.4918V156.695H377.913V78.4918C377.913 65.4359 367.781 55.3043 354.725 55.3043H327.217C319.913 55.4075 313.247 48.7835 313.247 41.4782C313.247 34.173 319.913 27.5489 327.217 27.6522H354.725ZM253.478 27.6522C261.114 27.6522 267.304 33.8421 267.304 41.4782C267.304 49.1139 261.114 55.3043 253.478 55.3043H152.087C144.451 55.3043 138.261 49.1139 138.261 41.4782C138.261 33.8421 144.451 27.6522 152.087 27.6522H253.478ZM377.913 184.348H27.6522V373.16C27.6522 386.216 37.7841 396.348 50.8396 396.348H354.725C367.781 396.348 377.913 386.216 377.913 373.16V184.348Z" fill="#222222" />
									</svg>
								</li>
								<li><?php echo $lease["CabinsCount"]; ?> Cabin Counts</li>
							</ul> -->
						</div>
						<div class="wpestate_property_description" id="wpestate_property_description_section">
							<h4 class="panel-title"> Description</h4>
							<p><?php echo $lease["LongDescription"];?></p>
						</div>
						<div class="panel-group property-panel" id="accordion_prop_addr">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion_prop_addr" href="#collapseTwo">
										<h4 class="panel-title">
											Address
										</h4>
									</a>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="listing_detail col-md-6"><strong>Address: &nbsp;</strong><?php echo $lease["CompleteAddress"]; ?></div>
										<div class="listing_detail col-md-6"><strong>City:</strong> <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Mumbai</a></div>
										<div class="listing_detail col-md-6"><strong>Area:</strong> <a href="https://lasvegas.wpresidence.net/property_area/downtown/" rel="tag">Andheri</a></div>
										<div class="listing_detail col-md-6"><strong>State:</strong> <a href="https://lasvegas.wpresidence.net/property_county_state/nevada/" rel="tag">Maharashtra</a></div>
										<div class="listing_detail col-md-6"><strong>Zip:</strong> NV 89147</div>
										<div class="listing_detail col-md-6"><strong>Country:&nbsp;</strong>India</div>
										<a href="https://maps.google.com/?q=8367+W+Flamingo+Rd+suite+101%2CLas+Vegas" target="_blank" rel="noopener" class="acc_google_maps">Open In Google Maps</a> 
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group property-panel" id="accordion_prop_details">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion_prop_details" href="#collapseOne">
										<h4 class="panel-title" id="prop_det">
											Details 
										</h4>
									</a>
								</div>

								<?php 
								
								$query = "SELECT lease_amenities.Count, amenities_master.amenity_name FROM lease_amenities INNER JOIN amenities_master ON amenities_master.PK_amenities = lease_amenities.FK_amenities WHERE lease_amenities.FK_Lease = $pid; ";
								$exce = mysqli_query($con,$query);
								
								?>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="listing_detail col-md-6" id="propertyid_display"><strong>Lease Id :</strong> <?php echo  $lease['PK_lease']; ?></div>
										<div class="listing_detail col-md-6"><strong>Price:</strong><?php echo $lease["Price"]; ?><span class="price_label"></span></div>
										<div class="listing_detail col-md-6"><strong>Property Size:</strong> <?php echo $lease["BuildUpArea"]; ?> ft<sup>2</sup></div>
                                     <?php 
										while($row = mysqli_fetch_array($exce)){

									
										?>
										<div class="listing_detail col-md-6"><strong><?php echo $row['amenity_name']; ?>:&nbsp;</strong><?php echo $row['Count']; ?><span class="price_label"></span></div>

										<?php 
										}?>
										
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group property-panel" id="accordion_prop_features">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion_prop_features" href="#collapseThree">
										<h4 class="panel-title" id="prop_ame">
											Features 
										</h4>
									</a>
								</div>
								<div id="collapseThree" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="listing_detail col-md-12 feature_block_Interior Details ">
											<div class="feature_chapter_name col-md-12">Interior Details</div>
											<div class="listing_detail col-md-4">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 19px; width: 19px; fill: currentcolor;">
													<path d="m10.5 0a .5.5 0 0 0 -.5.5v7a .5.5 0 0 1 -.49.5h-1.51v-7.5a.5.5 0 1 0 -1 0v7.5h-1.51a.5.5 0 0 1 -.49-.5v-7a .5.5 0 1 0 -1 0v7c0 .83.67 1.5 1.49 1.5h1.51v5c0 .03.01.06.02.09a1.49 1.49 0 0 0 -1.02 1.41v7c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-7c0-.66-.43-1.21-1.02-1.41.01-.03.02-.06.02-.09v-5h1.51a1.5 1.5 0 0 0 1.49-1.5v-7a .5.5 0 0 0 -.5-.5zm-2.5 15.5v7a .5.5 0 0 1 -.5.5.5.5 0 0 1 -.5-.5v-7c0-.28.22-.5.5-.5s.5.22.5.5zm11.5-15.5h-2c-1.4 0-2.5 1.07-2.5 2.5v7c0 1.43 1.1 2.5 2.5 2.5h1.5v2.09a1.49 1.49 0 0 0 -.5-.09c-.83 0-1.5.67-1.5 1.5v7c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-22.5zm-2 11c-.86 0-1.5-.63-1.5-1.5v-7c0-.87.65-1.5 1.5-1.5h1.5v10zm1.5 11.5a.5.5 0 0 1 -.5.5.5.5 0 0 1 -.5-.5v-7c0-.28.22-.5.5-.5s.5.22.5.5z" fill-rule="evenodd" />
												</svg>
												Equipped Pantry
											</div>
											<div class="listing_detail col-md-4">
												<svg xmlns="http://www.w3.org/2000/svg" class="bk-icon -iconset-screen hp__facility_group_icon" fill="currentColor" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false">
													<path d="M116 24H12a4 4 0 0 0-4 4v64a4 4 0 0 0 4 4h36v4a4 4 0 0 0 4 4h24a4 4 0 0 0 4-4v-4h36a4 4 0 0 0 4-4V28a4 4 0 0 0-4-4zm-5 64H16V32h95z" />
												</svg>
												Store Room
											</div>
										</div>
										<div class="listing_detail col-md-12 feature_block_Outdoor Details "></div>
										<div class="listing_detail col-md-12 feature_block_Utilities ">
											<div class="feature_chapter_name col-md-12">Utilities</div>
											<div class="listing_detail col-md-4">
												<svg xmlns="http://www.w3.org/2000/svg" class="bk-icon -iconset-snowflake hp__facility_group_icon" fill="currentColor" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false">
													<path d="M89.6 44.6L94 28.3a4 4 0 0 1 4.9-2.9 4 4 0 0 1 2.8 5l-2.3 8.5 7.7-4.4a4 4 0 0 1 5.5 1.4 4 4 0 0 1-1.5 5.5l-7.7 4.4 8.6 2.4a4 4 0 0 1 2.8 4.9 4 4 0 0 1-4.9 2.8l-16.3-4.4-15.5 9a4 4 0 0 1-5.5-1.5 4 4 0 0 1 1.5-5.5zM53.9 74.5a4 4 0 0 0 1.4-5.5 4 4 0 0 0-5.4-1.5l-15.6 9L18 72.2a4 4 0 0 0-5 2.8 4 4 0 0 0 2.9 5l8.4 2.2-7.5 4.3a4 4 0 0 0-1.4 5.5 4 4 0 0 0 5.4 1.5l7.8-4.5-2.4 8.8a4 4 0 0 0 2.9 4.9 4 4 0 0 0 4.9-2.9l4.4-16.4zM60 32.2V50a4 4 0 0 0 4 4 4 4 0 0 0 4-4V32l11.9-11.9a4 4 0 0 0 0-5.6 4 4 0 0 0-5.7 0L68 20.7V12a4 4 0 0 0-4-4 4 4 0 0 0-4 4v8.9l-6.4-6.4a4 4 0 0 0-5.6 0 4 4 0 0 0 0 5.7zM114.8 75a4 4 0 0 0-4.9-2.8l-16.3 4.3-15.5-9a4 4 0 0 0-5.5 1.5 4 4 0 0 0 1.5 5.5l15.5 8.9 4.3 16.4a4 4 0 0 0 4.9 2.8 4 4 0 0 0 2.8-4.9L99.3 89l7.7 4.5a4 4 0 0 0 5.5-1.5 4 4 0 0 0-1.5-5.4l-7.6-4.4 8.6-2.3a4 4 0 0 0 2.8-4.9zM68 95.8V78a4 4 0 0 0-4-4 4 4 0 0 0-4 4v18l-11.9 11.9a4 4 0 0 0 0 5.6 4 4 0 0 0 5.7 0l6.2-6.2v8.7a4 4 0 0 0 4 4 4 4 0 0 0 4-4v-8.9l6.4 6.4a4 4 0 0 0 5.6 0 4 4 0 0 0 0-5.7zM13.2 53a4 4 0 0 0 4.8 2.8l16.3-4.3 15.5 9a4 4 0 0 0 5.5-1.5 4 4 0 0 0-1.4-5.5l-15.5-8.9-4.3-16.4a4 4 0 0 0-5-2.8 4 4 0 0 0-2.8 4.9l2.3 8.7-7.7-4.5a4 4 0 0 0-5.4 1.5 4 4 0 0 0 1.4 5.5l7.6 4.3-8.5 2.3a4 4 0 0 0-2.9 4.9z" />
												</svg>
												Central Air
											</div>
											<div class="listing_detail col-md-4">
												<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
													<g>
														<path d="m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z" />
														<path d="m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z" />
														<path d="m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z" />
													</g>
												</svg>
												Electricity
											</div>
											<div class="listing_detail col-md-4">
												<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
													<g>
														<g>
															<path d="M80.681,0v431.028l78.193,40.928h28.721v40.045h30.001v-40.045h76.811v40.045h30.001v-40.045h28.722l78.192-40.928V0
																H80.681z M401.319,412.869l-55.569,29.086H166.251l-55.569-29.086v-45.934h290.638V412.869z M401.319,336.935H110.682V30.001
																h290.638V336.935z" />
														</g>
													</g>
													<g>
														<g>
															<path d="M264.777,73.124L256,66.789l-8.777,6.335c-1.48,1.067-36.248,26.574-36.248,62.772c0,24.827,20.198,45.024,45.025,45.024
																s45.025-20.197,45.025-45.024C301.025,99.697,266.257,74.191,264.777,73.124z M256,150.92c-8.284,0-15.024-6.739-15.024-15.023
																c0-10.264,6.051-19.836,11.128-26.06c1.31-1.605,2.629-3.083,3.896-4.417c1.268,1.334,2.587,2.812,3.896,4.417
																c5.077,6.223,11.128,15.795,11.128,26.06C271.024,144.18,264.284,150.92,256,150.92z" />
														</g>
													</g>
													<g>
														<g>
															<rect x="202.595" y="276.887" width="106.813" height="30.001" />
														</g>
													</g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
												</svg>
												Heating
											</div>
											<div class="listing_detail col-md-4">
												<svg id="Capa_1" enable-background="new 0 0 511.718 511.718" height="512" viewBox="0 0 511.718 511.718" width="512" xmlns="http://www.w3.org/2000/svg">
													<path d="m245.152 233.856-32.968-76.375-.399-.927-.521-.864c-4.939-8.205-13.224-13.579-22.73-14.742-9.505-1.163-18.843 2.053-25.613 8.825l-53.799 53.799c-6.771 6.771-9.988 16.107-8.825 25.613 1.163 9.507 6.537 17.791 14.742 22.73l.864.521 77.302 33.367c-.594 3.484-.92 7.057-.92 10.707s.326 7.224.92 10.707l-76.375 32.968-.927.399-.864.521c-8.205 4.939-13.579 13.224-14.742 22.73s2.054 18.842 8.825 25.613l53.799 53.799c5.861 5.861 13.642 9.059 21.793 9.059 1.266 0 2.542-.077 3.82-.233 9.507-1.163 17.791-6.537 22.73-14.742l.521-.864 33.367-77.302c3.484.594 7.057.92 10.707.92s7.224-.326 10.707-.92l32.968 76.375.399.927.521.864c4.939 8.205 13.224 13.579 22.73 14.742 1.278.156 2.554.233 3.82.233 8.15 0 15.933-3.197 21.793-9.059l53.799-53.799c6.771-6.771 9.988-16.107 8.825-25.613-1.163-9.507-6.537-17.791-14.742-22.73l-.864-.521-77.302-33.367c.594-3.484.92-7.057.92-10.707s-.326-7.224-.92-10.707l76.375-32.968.927-.399.864-.521c8.205-4.939 13.579-13.224 14.742-22.73s-2.054-18.842-8.825-25.613l-53.799-53.799c-6.771-6.771-16.104-9.993-25.613-8.825-9.507 1.163-17.791 6.537-22.73 14.742l-.521.864-33.367 77.302c-3.484-.594-7.057-.92-10.707-.92-3.65.001-7.224.327-10.707.92zm-114.944-7.92c-.062-.097-.112-.225-.133-.395-.055-.441.158-.653.26-.756l53.799-53.799c.102-.103.318-.326.756-.26.17.021.298.071.395.133l32.332 74.904c-4.724 3.569-8.935 7.78-12.504 12.504zm55.076 196.226c-.097.062-.225.112-.395.133-.438.061-.654-.158-.756-.26l-53.799-53.799c-.102-.103-.314-.314-.26-.756.021-.17.071-.298.133-.395l74.904-32.332c3.569 4.724 7.78 8.935 12.504 12.504zm196.226-55.076c.062.097.112.225.133.395.055.441-.158.653-.26.756l-53.799 53.799c-.103.102-.319.321-.756.26-.17-.021-.298-.071-.395-.133l-32.332-74.904c4.724-3.569 8.935-7.78 12.504-12.504zm-55.076-196.227c.097-.062.225-.112.395-.133.436-.066.653.157.756.26l53.799 53.799c.102.103.314.314.26.756-.021.17-.071.298-.133.395l-74.904 32.332c-3.569-4.724-7.78-8.935-12.504-12.504zm-37.001 125.652c0 18.513-15.062 33.574-33.574 33.574s-33.574-15.062-33.574-33.574 15.062-33.574 33.574-33.574 33.574 15.061 33.574 33.574z" />
													<path d="m255.859 0-255.177 209.197 19.02 23.2 15.994-13.112v292.433h440.163v-292.566l16.157 13.246 19.02-23.2zm190 481.718h-380.163v-287.027l190.163-155.898 190 155.764z" />
												</svg>
												Ventilation
											</div>
											<div class="listing_detail col-md-4">
												<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M381.788,112.93l-11.331-13.069l-11.331,13.07c-1.24,1.431-26.592,30.807-54.725,72.526
																c-10.391-19.831-22.517-40.549-36.383-62.129C227.844,60.804,188.287,14.99,186.623,13.07L175.293,0l-11.331,13.069
																c-1.665,1.919-41.221,47.734-81.395,110.258C27.829,208.514,0.074,280.33,0.074,336.783C0.074,433.398,78.677,512,175.292,512
																c38.622,0,74.357-12.57,103.351-33.82c25.569,21.897,57.692,33.82,91.814,33.82c78.005,0,141.469-63.463,141.469-141.469
																C511.926,264.267,387.102,119.06,381.788,112.93z M175.291,482.009c-80.078,0-145.226-65.148-145.226-145.226
																c0-102.389,109.245-245.904,145.229-290.393c35.984,44.466,145.223,187.91,145.223,290.393
																C320.517,416.861,255.369,482.009,175.291,482.009z M370.458,482.009c-25.388,0-49.373-8.379-68.932-23.839
																c30.315-31.514,48.983-74.309,48.983-121.387c0-34.433-10.345-74.592-30.821-120.004c19.368-30.164,38.908-55.66,50.761-70.447
																c30.402,37.977,111.486,146.55,111.486,224.201C481.934,432,431.926,482.009,370.458,482.009z" />
														</g>
													</g>
													<g>
														<g>
															<path d="M293.39,331.42c-1.111-29.794-12.616-51.54-13.106-52.451l-26.422,14.188c0.087,0.162,8.717,16.821,9.559,39.38
																c1.132,30.349-12.012,56.617-39.065,78.073l18.637,23.498C286.524,399.583,294.427,359.209,293.39,331.42z" />
														</g>
													</g>
													<g>
														<g>
															<path d="M462.709,368.29c-0.788-21.138-8.647-36.341-9.541-38.006l-13.211,7.094l-13.256,7.01
																c0.058,0.111,5.773,11.266,6.067,26.078c0.373,18.772-8.046,35.116-25.022,48.579l18.638,23.498
																C457.767,417.652,463.46,388.426,462.709,368.29z" />
														</g>
													</g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
												</svg>
												Water
											</div>
										</div>
										<div class="listing_detail col-md-12 feature_block_others ">
											<div class="feature_chapter_name col-md-12">Other Features</div>
											<div class="listing_detail col-md-4">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 19px; width: 19px; fill: currentcolor;">
													<path d="M22.5 23H21V1h1.5a.5.5 0 0 0 0-1H.5a.5.5 0 1 0 0 1H2v22H.5a.5.5 0 1 0 0 1h22a.5.5 0 0 0 0-1zM11 3v20H3V1h8v2zm9 20h-8V1h8v22zM4.146 10.854a.5.5 0 0 1 0-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 1 1-.708.708L7 9.707V14.5a.5.5 0 0 1-1 0V9.707l-1.146 1.147a.5.5 0 0 1-.708 0zm10 2a.5.5 0 1 1 .708-.708L16 13.293V8.5a.5.5 0 1 1 1 0v4.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2z" fill-rule="evenodd" />
												</svg>
												Elevator
											</div>
											<div class="listing_detail col-md-4">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 19px; width: 19px; fill: currentcolor;">
													<path d="m15.25 14c .97 0 1.75-.9 1.75-2s-.79-2-1.75-2-1.75.9-1.75 2 .79 2 1.75 2zm0 1c-1.52 0-2.75-1.35-2.75-3s1.23-3 2.75-3 2.75 1.35 2.75 3-1.23 3-2.75 3zm3.31-5.93.23.45.89-.46-.23-.45a9.4 9.4 0 0 0 -4.22-4.11l-.45-.22-.44.9.45.22a8.4 8.4 0 0 1 3.78 3.67zm.89 6.32.23-.45-.89-.46-.23.45a8.4 8.4 0 0 1 -3.78 3.67l-.45.22.44.9.45-.22a9.4 9.4 0 0 0 4.22-4.11zm.61.51c-.92 1.78-2.44 3.26-4.28 4.15l-.45.22.44.9.45-.22a10.51 10.51 0 0 0 4.72-4.59l.23-.44-.89-.46zm2.94-3.9c0-6.07-4.93-11-11-11s-11 4.93-11 11 4.93 11 11 11 11-4.93 11-11zm1 0c0 6.62-5.38 12-12 12s-12-5.38-12-12 5.38-12 12-12 12 5.38 12 12zm-19.44-3.39-.23.45.89.46.23-.45a8.4 8.4 0 0 1 3.78-3.67l.45-.22-.44-.9-.45.22a9.4 9.4 0 0 0 -4.22 4.11zm-.61 7.29-.23-.44-.89.46.23.44a10.51 10.51 0 0 0 4.72 4.59l.45.22.44-.9-.45-.22c-1.84-.9-3.36-2.37-4.28-4.15zm0-7.8c.92-1.78 2.44-3.26 4.28-4.15l.45-.22-.44-.9-.45.22a10.51 10.51 0 0 0 -4.72 4.59l-.23.44.89.46zm1.5 6.83-.23-.45-.89.46.23.45a9.4 9.4 0 0 0 4.22 4.11l.45.22.44-.9-.45-.22a8.4 8.4 0 0 1 -3.78-3.67zm3.4-4.93c.73 0 1.39.47 1.69 1.19l.93-.38c-.45-1.1-1.48-1.81-2.62-1.81-1.57 0-2.85 1.35-2.85 3s1.28 3 2.85 3c1.14 0 2.16-.71 2.62-1.81l-.93-.38c-.3.72-.96 1.19-1.69 1.19-1.02 0-1.85-.9-1.85-2s .83-2 1.85-2zm11.21-1.9.23.44.89-.46-.23-.44a10.51 10.51 0 0 0 -4.72-4.59l-.45-.22-.44.9.45.22c1.84.9 3.36 2.37 4.28 4.15zm1.94 3.9a1 1 0 1 1 -2 0 1 1 0 0 1 2 0z" fill-rule="evenodd" />
												</svg>
												Smoke detectors
											</div>
											<div class="listing_detail col-md-4">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 19px; width: 19px; fill: currentcolor;">
													<path d="m12 15a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 5a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm5.92-5.78a.5.5 0 1 1 -.84.55c-1.19-1.81-3.07-2.77-5.08-2.77s-3.89.96-5.08 2.78a.5.5 0 0 1 -.84-.55c1.38-2.1 3.58-3.23 5.92-3.23s4.54 1.13 5.92 3.23zm2.98-3.03a.5.5 0 1 1 -.79.61c-1.66-2.14-5.22-3.8-8.11-3.8-2.83 0-6.26 1.62-8.12 3.82a.5.5 0 0 1 -.76-.65c2.05-2.42 5.75-4.17 8.88-4.17 3.19 0 7.05 1.8 8.9 4.19zm2.95-2.33a.5.5 0 0 1 -.71-.02c-2.94-3.07-6.71-4.84-11.14-4.84s-8.2 1.77-11.14 4.85a.5.5 0 0 1 -.72-.69c3.12-3.27 7.14-5.16 11.86-5.16s8.74 1.89 11.86 5.16a.5.5 0 0 1 -.02.71z" fill-rule="evenodd" />
												</svg>
												WiFi
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group property-panel" id="accordion_video">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion_video" href="#collapseThreeOne">
										<h4 class="panel-title" id="prop_video">
										Video 
									</a>
								</div>
								<div id="collapseThreeOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="property_video_wrapper">
											<div id="property_video_wrapper_player"></div>
											<a href="https://www.youtube.com/embed/wkGoES-V5Ys?wmode=transparent&amp;rel=0" data-autoplay="true" data-vbtype="video" class="venobox"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/interior35.jpg" alt="video image" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group property-panel" id="accordion_prop_map">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion_prop_map" href="#collapsemap">
										<h4 class="panel-title" id="prop_ame">Map</h4>
									</a>
								</div>
								<div id="collapsemap" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="google_map_shortcode_wrapper   with_open_street ">
											<div id="gmapzoomplus_sh" class="smallslidecontrol shortcode_control"><i class="fas fa-plus"></i> </div>
											<div id="gmapzoomminus_sh" class="smallslidecontrol shortcode_control"><i class="fas fa-minus"></i></div>
											<div id="slider_enable_street_sh" data-placement="bottom" data-original-title="Street View"> <i class="fas fa-location-arrow"></i> </div>
											<div id="googleMap_shortcode" data-post_id="59" data-cur_lat="36.16050666486494" data-cur_long="-115.10903835296632" data-title="<?php echo $lease['Lease_Name'] ?>" data-pin="housessales" data-thumb="%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E" data-price="%3Cspan%20class%3D%27infocur%20infocur_first%27%3E%3C%2Fspan%3E770.000%20%24%3Cspan%20class%3D%27infocur%27%3E%3C%2Fspan%3E" data-single-first-type="Houses" data-single-first-action="Sales" data-rooms="5" data-size="190%20ft%3Csup%3E2%3C%2Fsup%3E" data-bathrooms="6" data-prop_url="https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-studio-for-rent%2F" data-pin_price="770K%20%24" data-clean_price="<?php echo $lease['Price']; ?>"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="panel-group property-panel" id="accordion_virtual_tour">
							<div class="panel panel-default">
							<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion_virtual_tour" href="#collapsenine1">
							<h4 class="panel-title" id="prop_virtual">Virtual Tour</h4> </a>
							</div>
							<div id="collapsenine1" class="panel-collapse collapse in">
							<div class="panel-body">
							<iframe width="100%" height="480" src="https://my.matterport.com/show/?m=CrZgGg34uFa" frameborder="0"></iframe> </div>
							</div>
							</div>
							</div> -->
						<!-- <div class="panel-group property-panel" id="accordion_morgage">
							<div class="panel panel-default">
							<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion_morgage" href="#collapsemorgage">
							<h4 class="panel-title" id="prop_morg">Payment Calculator</h4> </a>
							</div>
							<div id="collapsemorgage" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="morgage_chart_wrapper onfirst">
							<div id="canvas-holder">
							<canvas id="morgage_chart"></canvas>
							</div>
							<div class="morg_momth_pay"> <div class="morg_month_wrap"><span id="morg_month_total">2,985.44</span> $</div><span id="morg_per_month">per month</span></div>
							<ul class="morgage_legend">
							<li>Principal and Interest</li>
							<li>Property Tax</li>
							<li>HOA fee</li>
							</ul>
							</div>
							<div class="morgage_chart_wrapper">
							<label>Principal and Interest</label> <span data-per="100" id="morg_principal">2,985.44</span> $
							<label>Property Tax</label>
							<input type="text" id="monthly_property_tax" data-per="0" value="0">
							<label>Homeowners Association Fee</label>
							<input type="text" id="hoo_fees" data-per="0" value="0">
							</div><div class=" morgage_data_wrapper onfirst"> <label>Home Price</label>
							<input type="text" name="morgage_home_price" class="morgage_inputdata" data-price="770000" id="morgage_home_price" value="770000">
							<label>Down Payment</label>
							<input type="text" name="morgage_down_payment" class="morgage_inputdata" id="morgage_down_payment" data-price="154000" value="154000">
							<input type="text" name="morgage_down_payment_percent" class="morgage_inputdata" id="morgage_down_payment_percent" data-down-pay="" 20 value="20">
							</div>
							<div class=" morgage_data_wrapper">
							<label>Term(*in years)</label>
							<input type="text" name="morgage_term" class="morgage_inputdata" id="morgage_term" value="30">
							<label>Interest</label>
							<input type="text" name="morgage_interest" class="morgage_inputdata" id="morgage_interest" value="4.125">
							</div> </div>
							</div>
							</div>
							</div> -->
						<div class="panel-group property-panel" id="accordion_prop_floor_plans">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion_prop_floor_plans" href="#collapseflplan">
										<h4 class="panel-title" id="prop_ame">Floor Plans</h4>
									</a>
								</div>
								<div id="collapseflplan" class="panel-collapse collapse in">
									<div class="panel-body">
										<!-- <div class="front_plan_row ">
											<div class="floor_title">Floor plan A</div>
											<div class="floor_details"><span class="bold_detail">size:</span> 1500 ft<sup>2</sup></div>
											<div class="floor_details"><span class="bold_detail">rooms: </span> 4</div>
											<div class="floor_details"><span class="bold_detail">baths:</span> 3</div>
											<div class="floor_details floor_price_details"><span class="bold_detail">price: </span> 100.000 $</div>
											</div> -->
										<div class="front_plan_row_image " style="display:block" ;>
											<div class="floor_image">
												<a href="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/floor-plan-4.jpeg" rel="prettyPhoto" title="Living Spaces are more easily interpreted. All-In-Ones color floor plan option clearly defines your listing’s living spaces, making them obvious and clearly visible to your potential buyers/clients. Add extra value to your services. Color floor-plans show that you care about selling your client’s listing; they add a premium, high value look to any listing and can be used in your brochures, email and websites."><img class="lightbox_trigger_floor" data-slider-no="1" src="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/floor-plan-4.jpeg" alt="Floor plan A"></a>
											</div>
											<!-- <div class="floor_description">Living Spaces are more easily interpreted. All-In-Ones color floor plan option clearly defines your listing’s living spaces, making them obvious and clearly visible to your potential buyers/clients. Add extra value to your services. Color floor-plans show that you care about selling your client’s listing; they add a premium, high value look to any listing and can be used in your brochures, email and websites.</div> -->
										</div>
										<!-- <div class="front_plan_row ">
											<div class="floor_title">Floor plan B</div>
											<div class="floor_details"><span class="bold_detail">size:</span> 1100 ft<sup>2</sup></div>
											<div class="floor_details"><span class="bold_detail">rooms: </span> 3</div>
											<div class="floor_details"><span class="bold_detail">baths:</span> 4</div>
											<div class="floor_details floor_price_details"><span class="bold_detail">price: </span> 300.000 $</div>
											</div> -->
										<div class="front_plan_row_image ">
											<div class="floor_image">
												<a href="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/floor-plan-5-1.jpeg" rel="prettyPhoto" title="Inside this enchanting home, the great room enjoys a fireplace and views of the rear patio. The secluded master suite at the front of the home delights in tons of natural light, a splendid bath, a sitting room with a fireplace, and a private lanai. Three upper-level bedrooms share an optional bonus room, perfect for a home gym, playroom, or studio. Click the home to see the layout!"><img class="lightbox_trigger_floor" data-slider-no="2" src="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/floor-plan-5-1.jpeg" alt="Floor plan B"></a>
											</div>
											<div class="floor_description">Inside this enchanting home, the great room enjoys a fireplace and views of the rear patio. The secluded master suite at the front of the home delights in tons of natural light, a splendid bath, a sitting room with a fireplace, and a private lanai. Three upper-level bedrooms share an optional bonus room, perfect for a home gym, playroom, or studio. Click the home to see the layout!</div>
										</div>
										<div class="lightbox_property_wrapper_floorplans">
											<div class="lightbox_property_wrapper_level2">
												<div class="lightbox_property_content row">
													<div class="lightbox_property_slider col-md-12">
														<div id="owl-demo-floor" class="owl-carousel owl-theme">
															<div class="item" href="#1">
																<div class="itemimage">
																	<img src="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/floor-plan-4.jpeg" alt="Floor plan A">
																</div>
																<div class="lightbox_floor_details">
																	<div class="floor_title">Floor plan A</div>
																	<div class="floor_light_desc">Living Spaces are more easily interpreted. All-In-Ones color floor plan option clearly defines your listing’s living spaces, making them obvious and clearly visible to your potential buyers/clients. Add extra value to your services. Color floor-plans show that you care about selling your client’s listing; they add a premium, high value look to any listing and can be used in your brochures, email and websites.</div>
																	<div class="floor_details"><span class="bold_detail">size:</span> 1500 ft<sup>2</sup></div>
																	<div class="floor_details"><span class="bold_detail">rooms: </span> 4</div>
																	<div class="floor_details"><span class="bold_detail">baths:</span> 3</div>
																	<div class="floor_details"><span class="bold_detail">price: </span> 100.000 $</div>
																</div>
															</div>
															<div class="item" href="#2">
																<div class="itemimage">
																	<img src="https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/floor-plan-5-1.jpeg" alt="Floor plan B">
																</div>
																<div class="lightbox_floor_details">
																	<div class="floor_title">Floor plan B</div>
																	<div class="floor_light_desc">Inside this enchanting home, the great room enjoys a fireplace and views of the rear patio. The secluded master suite at the front of the home delights in tons of natural light, a splendid bath, a sitting room with a fireplace, and a private lanai. Three upper-level bedrooms share an optional bonus room, perfect for a home gym, playroom, or studio. Click the home to see the layout!</div>
																	<div class="floor_details"><span class="bold_detail">size:</span> 1100 ft<sup>2</sup></div>
																	<div class="floor_details"><span class="bold_detail">rooms: </span> 3</div>
																	<div class="floor_details"><span class="bold_detail">baths:</span> 4</div>
																	<div class="floor_details"><span class="bold_detail">price: </span> 300.000 $</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="lighbox-image-close-floor">
													<i class="fas fa-times" aria-hidden="true"></i>
												</div>
											</div>
											<div class="lighbox_overlay"></div>
										</div>
										<script data-cfasync="false" src="https://lasvegas.wpresidence.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
											//<![CDATA[
											jQuery(document).ready(function(){
											estate_start_lightbox_floorplans(); 
											});
											//]]>
										</script> 
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="panel-group property-panel" id="accordion_prop_stat">
							<div class="panel panel-default">
							<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion_prop_stat" href="#collapseSeven">
							<h4 class="panel-title">
							Page Views Statistics </h4>
							</a>
							</div>
							<div id="collapseSeven" class="panel-collapse collapse in">
							<div class="panel-body">
							<canvas id="myChart"></canvas>
							</div>
							</div>
							</div>
							</div> -->
						<script type="text/javascript">
							//<![CDATA[
								jQuery(document).ready(function(){
									wpestate_show_morg_pie();
									wpestate_show_stat_accordion();
								});
							
							//]]>
						</script>
						<!-- <div class="property_reviews_wrapper panel-group property-panel" id="property_reviews_area">
							<h4>Reviews</h4>
							<h5 class="review_notice">You need to <span id="login_trigger_modal">login</span> in order to post a review </h5>
							</div> -->
						<!-- <div class="mylistings" id="property_similar_listings">
							<h3 class="agent_listings_title_similar">Similar Listings</h3>
							<div class="col-md-6 listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/interior35-800x467.jpg" data-modal-title="Awesome Family Apartment" data-modal-link="https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/" data-listid="19386">
							<div class="property_listing  property_card_default  " data-link="https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/">
							<div class="listing-unit-img-wrapper">
							<div class="prop_new_details">
							<div class="prop_new_details_back"></div>
							<div class="property_media">
							<i class="fas fa-video"></i>
							<i class="fas fa-camera"></i> 6</div> <div class="property_location_image">
							<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/winchester/" rel="tag">Winchester</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a></div> <div class="featured_gradient"></div>
							</div>
							<a href="https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/interior35-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/interior35-525x328.jpg" /></a> <div class="tag-wrapper">
							<div class="status-wrapper">
							<div class="action_tag_wrapper Rentals ">Rentals</div>
							</div></div>
							</div>
							<div class="property-unit-information-wrapper">
							<h4>
							<a href="https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/">
							Awesome Family Apartment </a>
							</h4>
							<div class="listing_unit_price_wrapper">
							550 $ <span class="price_label">/ month</span></div>
							<div class="listing_details the_grid_view">
							Mckinley Hill is situated inside Fort Bonifacio which is a 50 hectares owned by Megaworld. <a href="https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/" class="unit_more_x"> ...</a> </div>
							<div class="listing_details the_list_view">
							Mckinley Hill is situated inside Fort Bonifacio which is a 50 hectares owned by Megaworld. Mckinley Hill is Said to <a href="https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/" class="unit_more_x"> ...</a> </div>
							<div class="property_listing_details">
							<span class="inforoom">
							<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
							</svg>
							3</span><span class="infobath">
							<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
							</svg>
							2.5</span> <span class="infosize">
							<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
							</svg>
							1,300 ft<sup>2</sup></span><a href="https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/" target="_self" class="unit_details_x">details</a></div>
							<div class="property_location">
							<div class="property_agent_wrapper">
							<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person-21-120x120.jpg')"></div>
							<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
							<a href="https://lasvegas.wpresidence.net/estate_agent/carlos-dobarro/">Carlos Dobarro</a></div>
							<div class="listing_actions">
							<div class="share_unit">
							<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/&amp;t=Awesome+Family+Apartment" target="_blank" rel="noreferrer" class="social_facebook"></a>
							<a href="https://twitter.com/intent/tweet?text=Awesome+Family+Apartment+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fawesome-family-apartment%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
							<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/awesome-family-apartment/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/10/interior35.jpg&amp;description=Awesome+Family+Apartment" target="_blank" rel="noreferrer" class="social_pinterest"></a>
							<a href="https://api.whatsapp.com/send?text=Awesome+Family+Apartment+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fawesome-family-apartment%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
							<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#482d25292124082d25292124662b2725773b3d2a222d2b3c75093f2d3b27252d630e2925212431630938293a3c252d263c6e292538732a272c3175203c3c383b6d7b096d7a0e6d7a0e24293b3e2d2f293b663f383a2d3b212c2d262b2d66262d3c6d7a0e2d3b3c293c2d17383a27382d3a3c316d7a0e293f2d3b27252d652e2925212431652938293a3c252d263c6d7a0e" data-action="share email" class="social_email"></a>
							</div>
							<span class="share_list" data-original-title="share"></span>
							<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="19386"></span>
							<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/interior35-143x83.jpg" data-pid="19386"></span>
							</div> </div>
							</div>
							</div>
							</div>
							<div class="col-md-6 listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/8-800x467.jpg" data-modal-title="2 Rooms Apartment for Rent" data-modal-link="https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/" data-listid="19371">
							<div class="property_listing  property_card_default  " data-link="https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/">
							<div class="listing-unit-img-wrapper">
							<div class="prop_new_details">
							<div class="prop_new_details_back"></div>
							<div class="property_media">
							<i class="fas fa-video"></i>
							<i class="fas fa-camera"></i> 5</div> <div class="property_location_image">
							<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/meadows-village/" rel="tag">Meadows Village</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a></div> <div class="featured_gradient"></div>
							</div>
							<a href="https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/8-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/8-525x328.jpg" /></a> <div class="tag-wrapper">
							<div class="status-wrapper">
							<div class="action_tag_wrapper Sales "><?php echo $lease["FK_Status"]; ?></div>
							</div></div>
							</div>
							<div class="property-unit-information-wrapper">
							<h4>
							<a href="https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/">
							2 Rooms Apartment for Rent </a>
							</h4>
							<div class="listing_unit_price_wrapper">
							775.000 $ <span class="price_label"></span></div>
							<div class="listing_details the_grid_view">
							This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Val <a href="https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/" class="unit_more_x"> ...</a> </div>
							<div class="listing_details the_list_view">
							This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley. Located right in the <a href="https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/" class="unit_more_x"> ...</a> </div>
							<div class="property_listing_details">
							<span class="inforoom">
							<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
							</svg>
							5</span><span class="infobath">
							<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
							</svg>
							6</span> <span class="infosize">
							<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
							</svg>
							190 ft<sup>2</sup></span><a href="https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/" target="_self" class="unit_details_x">details</a></div>
							<div class="property_location">
							<div class="property_agent_wrapper">
							<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person3-27-120x120.jpg')"></div>
							<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
							<a href="https://lasvegas.wpresidence.net/estate_agent/alessandra-tortella/">Alessandra Rosales</a></div>
							<div class="listing_actions">
							<div class="share_unit">
							<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/&amp;t=2+Rooms+Apartment+for+Rent" target="_blank" rel="noreferrer" class="social_facebook"></a>
							<a href="https://twitter.com/intent/tweet?text=2+Rooms+Apartment+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2F2-rooms-apartment-for-rent%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
							<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/2-rooms-apartment-for-rent/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/10/8.jpg&amp;description=2+Rooms+Apartment+for+Rent" target="_blank" rel="noreferrer" class="social_pinterest"></a>
							<a href="https://api.whatsapp.com/send?text=2+Rooms+Apartment+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2F2-rooms-apartment-for-rent%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
							<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#83e6eee2eaefc3e6eee2eaefade0eceebcf0f6e1e9e6e0f7beb1a8d1ececeef0a8c2f3e2f1f7eee6edf7a8e5ecf1a8d1e6edf7a5e2eef3b8e1ece7fabeebf7f7f3f0a6b0c2a6b1c5a6b1c5efe2f0f5e6e4e2f0adf4f3f1e6f0eae7e6ede0e6adede6f7a6b1c5e6f0f7e2f7e6dcf3f1ecf3e6f1f7faa6b1c5b1aef1ececeef0aee2f3e2f1f7eee6edf7aee5ecf1aef1e6edf7a6b1c5" data-action="share email" class="social_email"></a>
							</div>
							<span class="share_list" data-original-title="share"></span>
							<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="19371"></span>
							<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/8-143x83.jpg" data-pid="19371"></span>
							</div> </div>
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
							<i class="fas fa-camera"></i> 6</div> <div class="property_location_image">
							<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/winchester/" rel="tag">Winchester</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a></div> <div class="featured_gradient"></div>
							</div>
							<a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38-525x328.jpg" /></a> <div class="tag-wrapper">
							<div class="status-wrapper">
							<div class="action_tag_wrapper Rentals ">Rentals</div>
							</div></div>
							</div>
							<div class="property-unit-information-wrapper">
							<h4>
							<a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/">
							Apartment Space for Rent </a>
							</h4>
							<div class="listing_unit_price_wrapper">
							800 $ <span class="price_label">/ month</span></div>
							<div class="listing_details the_grid_view">
							Downtown Frederick hot spot. Top location for local entertainment. All fixtures are includ <a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" class="unit_more_x"> ...</a> </div>
							<div class="listing_details the_list_view">
							Downtown Frederick hot spot. Top location for local entertainment. All fixtures are included. Liquor license can be <a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" class="unit_more_x"> ...</a> </div>
							<div class="property_listing_details">
							<span class="inforoom">
							<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
							</svg>
							2</span><span class="infobath">
							<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
							</svg>
							4</span> <span class="infosize">
							<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
							</svg>
							500 ft<sup>2</sup></span><a href="https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/" target="_self" class="unit_details_x">details</a></div>
							<div class="property_location">
							<div class="property_agent_wrapper">
							<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person7-21-120x120.png')"></div>
							<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
							<a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Michaela Finney</a></div>
							<div class="listing_actions">
							<div class="share_unit">
							<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/&amp;t=Apartment+Space+for+Rent" target="_blank" rel="noreferrer" class="social_facebook"></a>
							<a href="https://twitter.com/intent/tweet?text=Apartment+Space+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-space-for-rent%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
							<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/apartment-space-for-rent/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/09/interior38.jpg&amp;description=Apartment+Space+for+Rent" target="_blank" rel="noreferrer" class="social_pinterest"></a>
							<a href="https://api.whatsapp.com/send?text=Apartment+Space+for+Rent+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-space-for-rent%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
							<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#f89d95999194b89d95999194d69b9795c78b8d9a929d9b8cc5b988998a8c959d968cd3ab88999b9dd39e978ad3aa9d968cde999588c39a979c81c5908c8c888bddcbb9ddcabeddcabe94998b8e9d9f998bd68f888a9d8b919c9d969b9dd6969d8cddcabe9d8b8c998c9da7888a97889d8a8c81ddcabe9988998a8c959d968cd58b88999b9dd59e978ad58a9d968cddcabe" data-action="share email" class="social_email"></a>
							</div>
							<span class="share_list" data-original-title="share"></span>
							<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="19365"></span>
							<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38-143x83.jpg" data-pid="19365"></span>
							</div> </div>
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
							<i class="fas fa-camera"></i> 5</div> <div class="property_location_image">
							<span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/the-strip/" rel="tag">The Strip</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a></div> <div class="featured_gradient"></div>
							</div>
							<a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/interior3-5-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/interior3-5-525x328.jpg" /></a> <div class="tag-wrapper">
							<div class="status-wrapper">
							<div class="action_tag_wrapper Rentals ">Rentals</div>
							</div></div>
							</div>
							<div class="property-unit-information-wrapper">
							<h4>
							<a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/">
							Family Home for Sale </a>
							</h4>
							<div class="listing_unit_price_wrapper">
							800 $ <span class="price_label">/ month</span></div>
							<div class="listing_details the_grid_view">
							Downtown Frederick hot spot. Top location for local entertainment. All fixtures are includ <a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" class="unit_more_x"> ...</a> </div>
							<div class="listing_details the_list_view">
							Downtown Frederick hot spot. Top location for local entertainment. All fixtures are included. Liquor license can be <a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" class="unit_more_x"> ...</a> </div>
							<div class="property_listing_details">
							<span class="inforoom">
							<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
							</svg>
							2</span><span class="infobath">
							<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
							</svg>
							4</span> <span class="infosize">
							<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
							</svg>
							500 ft<sup>2</sup></span><a href="https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/" target="_self" class="unit_details_x">details</a></div>
							<div class="property_location">
							<div class="property_agent_wrapper">
							<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person7-21-120x120.png')"></div>
							<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
							<a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">Michaela Finney</a></div>
							<div class="listing_actions">
							<div class="share_unit">
							<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/&amp;t=Family+Home+for+Sale" target="_blank" rel="noreferrer" class="social_facebook"></a>
							<a href="https://twitter.com/intent/tweet?text=Family+Home+for+Sale+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ffamily-home-for-sale%2F" class="social_tweet" rel="noreferrer" target="_blank"></a>
							<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/family-home-for-sale/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2014/05/interior3-5.jpg&amp;description=Family+Home+for+Sale" target="_blank" rel="noreferrer" class="social_pinterest"></a>
							<a href="https://api.whatsapp.com/send?text=Family+Home+for+Sale+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ffamily-home-for-sale%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a>
							<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#71141c10181d31141c10181d5f121e1c4e0204131b1412054c37101c181d085a391e1c145a171e035a22101d1457101c014a131e15084c19050501025442305443375443371d100207141610025f06010314021815141f12145f1f14055443371402051005142e01031e011403050854433717101c181d085c191e1c145c171e035c02101d14544337" data-action="share email" class="social_email"></a>
							</div>
							<span class="share_list" data-original-title="share"></span>
							<span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="160"></span>
							<span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/interior3-5-143x83.jpg" data-pid="160"></span>
							</div> </div>
							</div>
							</div>
							</div>
							</div> -->
					</div>
			</div>

									<!--end of main container division-->
									<div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary">
				<div id="primary_sidebar_wrapper">
					<div class="agent_contanct_form_sidebar widget-container">
						<div class="agent_unit_widget_sidebar" style="background-image: url(https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person3-27-500x328.jpg)"></div>
						<h4> <a href="https://lasvegas.wpresidence.net/estate_agent/alessandra-tortella/">Alessandra Rosales</a></h4>
						<div class="agent_position">selling agent</div>
						<div class="agent_contanct_form ">
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
							<textarea id="agent_comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true">I&#039;m interested in [ Gorgeous Studio for Rent ] </textarea>
							<div class="gpr_wrapper"><input type="checkbox" role="checkbox" aria-checked="false" id="wpestate_agree_gdpr" class="wpestate_agree_gdpr" name="wpestate_agree_gdpr" />
								<label for="wpestate_agree_gdpr">I consent to the <a target="_blank" href="https://lasvegas.wpresidence.net/">GDPR Terms</a></label>
							</div>
							<input type="submit" class="wpresidence_button agent_submit_class " id="agent_submit" value="Send Email">
							<a class="wpresidence_button wpresidence_button_inverse realtor_call" href="tel:(305) 555-4555 ">
							<i class="fas fa-phone"></i>
							Call <span class="agent_call_no">(305) 555-4555</span></a>
							<a class="wpresidence_button wpresidence_button_inverse realtor_whatsapp" href="https://api.whatsapp.com/send?phone=(305)%20555-4555&amp;text=Hello%20I'm%20interested%20in%20%5BGorgeous%20Studio%20for%20Rent%5D%20https://lasvegas.wpresidence.net/estate_property/gorgeous-studio-for-rent/">
							<i class="fab fa-whatsapp"></i>
							WhatsApp</a>
							<input name="prop_id" type="hidden" id="agent_property_id" value="59">
							<input name="prop_id" type="hidden" id="agent_id" value="53">
							<input type="hidden" name="contact_ajax_nonce" id="agent_property_ajax_nonce" value="7f783d349c" />
						</div>
					</div>
					<ul class="xoxo">
						<li id="ag_ag_dev_search_widget-1" class="widget-container advanced_search_sidebar ag_ag_dev_search_widget boxed_widget">
							<h3 class="widget-title-sidebar">Agents Search</h3>
							<form role="search" method="get" action="https://lasvegas.wpresidence.net/agents-agencies-developers-search-results/">
								<input type="text" id="keyword_search" class="form-control" name="_keyword_search" placeholder="Name" value="">
								<div class="dropdown form-control ">
									<div data-toggle="dropdown" id="sidebar-search_post_type" class="sidebar_filter_menu" data-value="estate_agent">
										Agent
										<span class="caret caret_sidebar"></span>
									</div>
									<input type="hidden" name="_search_post_type" value="estate_agent">
									<ul class="dropdown-menu filter_menu aag_picker" role="menu" aria-labelledby="sidebar-search_post_type">
										<li role="presentation" data-value="estate_agent">Agent</li>
										<li role="presentation" data-value="estate_agency">Agency</li>
										<li role="presentation" data-value="estate_developer">Developer</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agent">
									<div data-toggle="dropdown" id="sidebar-property_city_agent" class="sidebar_filter_menu" data-value="all">
										Select City
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_city_agent" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_city_agent">
										<li role="presentation" data-value="all">Select City</li>
										<li role="presentation" data-value="madrid">Madrid (4)</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agent">
									<div data-toggle="dropdown" id="sidebar-property_area_agent" class="sidebar_filter_menu" data-value="all">
										Select Area
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_area_agent" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_area_agent">
										<li role="presentation" data-value="all">Select Area</li>
										<li role="presentation" data-value="malasana">Malasaña (4)</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agent">
									<div data-toggle="dropdown" id="sidebar-property_category_agent" class="sidebar_filter_menu" data-value="all">
										Select Category
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_category_agent" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_category_agent">
										<li role="presentation" data-value="all">Select Category</li>
										<li role="presentation" data-value="residential">Residential (4)</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agent">
									<div data-toggle="dropdown" id="sidebar-property_action_category_agent" class="sidebar_filter_menu" data-value="all">
										Select Action Category
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_action_category_agent" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_action_category_agent">
										<li role="presentation" data-value="all">Select Action Category</li>
										<li role="presentation" data-value="commercial">Commercial (4)</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agency" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-city_agency" class="sidebar_filter_menu" data-value="all">
										Select City
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_city_agency" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-city_agency">
										<li role="presentation" data-value="all">Select City</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agency" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-area_agency" class="sidebar_filter_menu" data-value="all">
										Select Area
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_area_agency" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-area_agency">
										<li role="presentation" data-value="all">Select Area</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agency" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-category_agency" class="sidebar_filter_menu" data-value="all">
										Select Agency Category
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_category_agency" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-category_agency">
										<li role="presentation" data-value="all">Select Agency Category</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_agency" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-action_category_agency" class="sidebar_filter_menu" data-value="all">
										Select Action Category
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_action_category_agency" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-action_category_agency">
										<li role="presentation" data-value="all">Select Action Category</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_developer" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-property_city_developer" class="sidebar_filter_menu" data-value="all">
										Select City
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_city_developer" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_city_developer">
										<li role="presentation" data-value="all">Select City</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_developer" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-property_area_developer" class="sidebar_filter_menu" data-value="all">
										Select Area
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_area_developer" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_area_developer">
										<li role="presentation" data-value="all">Select Area</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_developer" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-property_category_developer" class="sidebar_filter_menu" data-value="all">
										Select Category
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_category_developer" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_category_developer">
										<li role="presentation" data-value="all">Select Category</li>
									</ul>
								</div>
								<div class="dropdown form-control ag_ag_dev_search_selector  selector_for_estate_developer" style="display:none;">
									<div data-toggle="dropdown" id="sidebar-property_action_developer" class="sidebar_filter_menu" data-value="all">
										Select Action Category
										<span class="caret caret_sidebar"></span> 
									</div>
									<input type="hidden" name="_property_action_developer" value="all">
									<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-property_action_developer">
										<li role="presentation" data-value="all">Select Action Category</li>
									</ul>
								</div>
								<button class="wpresidence_button" id="advanced_submit_widget">Search</button>
							</form>
						</li>
						<li id="footer_latest_widget-2" class="widget-container latest_listings">
							<?php include("latestlisting.php") ?>
							<!-- <h3 class="widget-title-sidebar">Latest Listings</h3>
							<script data-cfasync="false" src="https://lasvegas.wpresidence.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
								
								jQuery(document).ready(function(){
								   estate_sidebar_slider_carousel();
								});
								
							</script>
							<div class="latest_listings list_type">
								<div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">
									<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
									<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">Villa with Amazing View</a></span> <span class=widget_latest_price>5.500.000 $ <span class="price_label"></span></span> 
								</div>
								</div>
								<div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">
									<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
									<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">Townhouse for Sale</a></span> <span class=widget_latest_price>210.000 $ <span class="price_label"></span></span> 
								</div>
								</div>
								<div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">
									<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
									<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">Townhouse for Rent</a></span> <span class=widget_latest_price>100 $ <span class="price_label">/ sq. ft.</span></span> 
								</div>
								</div>
							</div> -->
						</li>
					</ul>
				</div>
			</div>


					
				
					</div>
				</div>
			</div>
			<?php include("subfooter.php"); ?>
		</div>
		<?php include("footer.php"); ?>






</html>

<script>
	// document.getElementById("popup").addEventListener('click',function(){
		// console.log("hello");

	// });
	var array = document.getElementsByClassName("popup");
	
	for (let index = 0; index < array.length; index++) {
		const element = array[index];
			element.addEventListener('click',function(){
		console.log("hello");

	});
		
	}
	
	
</script>