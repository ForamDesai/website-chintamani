<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<?php
		 include("header.php"); 
		include("../../Helper/connect.php");
		//form 
	    if(isset($_POST['name']) && isset($_POST['EmailId']) &&  isset($_POST['phone_number']) &&  isset($_POST['message'])){


	    $name = $_POST['name'];
		$EmailId = $_POST['EmailId'];
		$phone_number= $_POST['phone_number'];
		$message= $_POST['message'];
		

		
		// Performing insert query execution
		$sql =mysqli_query($con,"INSERT INTO inquiry (first_name,EmailId,phone_number,project_message,FK_Status) VALUES ('$name','$EmailId','$phone_number','$message','1')" ) ;
		}
		?>
        	<div class="website-wrapper" id="all_wrapper">
				<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">
					<?php include("subheader.php"); ?>
                	<div class="header_media  mobile_header_media_sticky_yes header_mediatype_1 with_search_1 header_media_non_elementor"></div>
					<div class="pre_search_wrapper"></div>
					<div  class="container content_wrapper">
						<div data-elementor-type="wp-page" data-elementor-id="18618" class="elementor elementor-18618">
							<section  class="elementor-section elementor-top-section elementor-element elementor-element-5c20f880 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5c20f880" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7fe0a5e4" data-id="7fe0a5e4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div    class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-7d1ac38 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7d1ac38" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3556b69" data-id="3556b69" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-29d5ae5 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="29d5ae5" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<style>/*! elementor - v3.6.4 - 13-04-2022 */
																		.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
																	</style>
																	<h2 class="elementor-heading-title elementor-size-default">Find your next<br>
																		Home in Las Vegas
																	</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-267b8e65 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="267b8e65" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<style>/*! elementor - v3.6.4 - 13-04-2022 */
																		.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
																	</style>
																	<p>Through our proprietary platform, WpResidence is changing how agents and clients navigate the process of finding or selling a home.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f26a2b7" data-id="f26a2b7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated"></div>
													</div>
												</div>
											</section>
											<section    class="elementor-section elementor-inner-section elementor-element elementor-element-22ec8b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="22ec8b6" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div  class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7b3e991" data-id="7b3e991" data-element_type="column">
														<div  class="elementor-widget-wrap elementor-element-populated">
															<div  class="elementor-element elementor-element-3ebcc151 elementor-absolute elementor-widget elementor-widget-WpResidence_Search_Form_Builder" data-id="3ebcc151" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="WpResidence_Search_Form_Builder.default">
																<div  class="elementor-widget-container">
																	<div   class="search_wrapper search_wr_elementor search_wr_elementor_shadow_ ">
																		<div class="search_wrapper_color"></div>
																		<div class="wpestate-adv-holder">
																			<form  method="post" action="leasing.php">

																		

																				 <div class="elementor-field-group elementor-column form-group elementor-field-group-a5cfa26 elementor-col-15">
																					<label for="form-field-a5cfa26" class="elementor-field-label">Location</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_actions" class=" filter_menu_trigger  " xxmaca cacaall Property type data-value=">Choose location">Choose location
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="Location" value=""/>
																						<ul id="actionslist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_actions">
																							<li role="presentation" data-value="Andheri">Andheri</li>
																						
																							<li role="presentation" data-value="Goregaon">Goregaon</li>
																							<li role="presentation" data-value="Goregaon">Goregaon</li>
																						
																						</ul>
																					</div>
																				</div>
																				<!-- <div class="elementor-field-group elementor-column form-group elementor-field-group-5a21b1d elementor-col-40">
																					<label for="form-field-5a21b1d" class="elementor-field-label">Location</label><input type="text" id="adv_location_0" class="form-control adv_locations_search" name="adv_location" placeholder="Enter an address, state, city, area or zip code" value="">
																					
																					<script type="text/javascript">
																						//<![CDATA[
																						jQuery(document).ready(function(){
																							var availableTags = ["Las Vegas","Downtown","The Strip","Meadows Village","Downtown East","Winchester","Nevada",];
																							jQuery(".adv_locations_search").autocomplete({
																								source: availableTags,
																								change: function() {
																									wpestate_show_pins();
																								}
																							});
																						});
																						//]]&gt;
																					</script>
																				</div> -->
																				<div class="elementor-field-group elementor-column form-group elementor-field-group-a5cfa26 elementor-col-15">
																					<label for="form-field-a5cfa26" class="elementor-field-label">Price Range</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_actions" class=" filter_menu_trigger  " xxmaca cacaall Property type data-value="all">choose price range
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="Price" value="">
																						<ul id="actionslist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
																							<li role="presentation" data-value="100000-200000">100k-200k</li>
																							<li role="presentation" data-value="200000-300000">200k-300k</li>
																							<li role="presentation" data-value="200000-300000">200k-300k</li>
																							<li role="presentation" data-value="300000-400000">300k-400k</li>
																						</ul>
																					</div>
																				</div>
																				<div class="elementor-field-group elementor-column form-group elementor-field-group-356a11b elementor-col-15">
																					<label for="form-field-356a11b" class="elementor-field-label">Capacity</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_categ" class=" filter_menu_trigger  " xxmaca cacaall Property category data-value="all">choose capacity
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="Packs" value="">
																						<ul id="categlist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
																							<li role="presentation" data-value="5-10">5-10</li>
																							<li role="presentation" data-value="10-15">10-15</li>
																							<li role="presentation" data-value="15-20">15-20</li>
																							<li role="presentation" data-value="20-25">20-25</li>
																							<li role="presentation" data-value="25-30">25-30</li>
																							<li role="presentation" data-value="30-35">30-35</li>
																							<li role="presentation" data-value="35-40">35-40</li>
																						</ul>
																					</div>
																				</div>
																				<div class="elementor-field-group elementor-column form-group elementor-field-group-356a11b elementor-col-15">
																					<label for="form-field-356a11b" class="elementor-field-label">Square feet</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_categ" class=" filter_menu_trigger  " xxmaca cacaall Property category data-value="all">choose sq ft
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="BuildUpArea" value="">
																						<ul id="categlist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
																							<li role="presentation" data-value="5-10">5-10</li>
																							<li role="presentation" data-value="10-15">10-15</li>
																							<li role="presentation" data-value="15-20">15-20</li>
																							<li role="presentation" data-value="20-25">20-25</li>
																							<li role="presentation" data-value="25-30">25-30</li>
																							<li role="presentation" data-value="30-35">30-35</li>
																							<li role="presentation" data-value="35-40">35-40</li>
																						</ul>
																					</div>
																				</div>
																				<div   type="submit" name="submit"  class=" elemenentor_submit_wrapper elementor-field-group form-group  form_field_show_labels_true  elementor-column elementor-col-25">
																					<button class="wpresidence_button  search_button_use_hover_effect_no" >
																						<div class="elementor-icon">
																							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve">
																								<path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21  c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279  C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19  S32.459,40,21.983,40z"></path>
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
																						</div>
																						<a style="text-decoration:none;color:white;" href="leasing.php">	Search</a>
																					</button>
																				</div>
																			
																			</form>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-6be5a0bc elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="6be5a0bc" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-73e943a" data-id="73e943a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated"></div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f08a7" data-id="f08a7" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-2509675 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2509675" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-27792c4" data-id="27792c4" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-dd728bd elementor-invisible elementor-widget elementor-widget-heading" data-id="dd728bd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">WHO WE ARE</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-fcc2da1 elementor-invisible elementor-widget elementor-widget-heading" data-id="fcc2da1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">We help clients buy and sell houses since 1989</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-4032be52 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="4032be52" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>With over $2 Billion in sales, due to our unparalleled results, expertise and dedication, we rank amongst the top 6 agencies in Las Vegas. Our agency is the industry’s top luxury producer.</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-27d20a7 elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="27d20a7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">
																		<a href="aboutUs.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																		<span class="elementor-button-content-wrapper">
																		<span class="elementor-button-text">More about us</span>
																		</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-71e88615 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="71e88615" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6afc0bbb" data-id="6afc0bbb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3a269cb7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a269cb7" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4b5a8609" data-id="4b5a8609" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-17b2724 elementor-invisible elementor-widget elementor-widget-heading" data-id="17b2724" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">POPULAR AREAS</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-1f5a3596 elementor-invisible elementor-widget elementor-widget-heading" data-id="1f5a3596" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Explore most <br>popular areas</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-494e1c0b" data-id="494e1c0b" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-73c61b00 elementor-invisible elementor-widget elementor-widget-Wpresidence_Grids" data-id="73c61b00" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:65}" data-widget_type="Wpresidence_Grids.default">
																<div class="elementor-widget-container">
																	<div class="row elementor_wpresidece_grid">
																		<div class="col-md-6 col-sm-12 elementor_residence_grid">
																			<div class="listing_wrapper elementor_places_wrapper">
																				<div class="property_listing places_wrapper_type_1 places_listing" data-link="https://lasvegas.wpresidence.net/property_area/winchester/" style="background-image: url(https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/city_category3.jpeg);">
																					<div class="places_cover" data-link="https://lasvegas.wpresidence.net/property_area/winchester/"></div>
																					<h4><a href="https://lasvegas.wpresidence.net/property_area/winchester/">
																						Winchester </a>
																					</h4>
																					<div class="property_location">
																						4 listings 
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-sm-12 elementor_residence_grid">
																			<div class="listing_wrapper elementor_places_wrapper">
																				<div class="property_listing places_wrapper_type_1 places_listing" data-link="https://lasvegas.wpresidence.net/property_area/meadows-village/" style="background-image: url(https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/city_category2.jpeg);">
																					<div class="places_cover" data-link="https://lasvegas.wpresidence.net/property_area/meadows-village/"></div>
																					<h4><a href="https://lasvegas.wpresidence.net/property_area/meadows-village/">
																						Meadows Village </a>
																					</h4>
																					<div class="property_location">
																						3 listings 
																					</div>
																				</div>
																			</div>
																		</div>
																		<!-- <div class="col-md-4 col-sm-12 elementor_residence_grid">
																			<div class="listing_wrapper elementor_places_wrapper">
																				<div class="property_listing places_wrapper_type_1 places_listing" data-link="https://lasvegas.wpresidence.net/property_area/downtown/" style="background-image: url(https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/city_category.jpeg);">
																					<div class="places_cover" data-link="https://lasvegas.wpresidence.net/property_area/downtown/"></div>
																					<h4><a href="https://lasvegas.wpresidence.net/property_area/downtown/">
																						Downtown </a>
																					</h4>
																					<div class="property_location">
																						2 listings 
																					</div>
																				</div>
																			</div>
																		</div> -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-e1f8de8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e1f8de8" data-element_type="section">
												<div class="elementor-container elementor-column-gap-wide">
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0884b88 elementor-invisible" data-id="0884b88" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:50}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-dc1bdf6 elementor-widget__width-initial elementor-widget elementor-widget-counter" data-id="dc1bdf6" data-element_type="widget" data-widget_type="counter.default">
																<div class="elementor-widget-container">
																	<style>/*! elementor - v3.6.4 - 13-04-2022 */
																		.elementor-counter .elementor-counter-number-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;font-size:69px;font-weight:600;line-height:1}.elementor-counter .elementor-counter-number-prefix,.elementor-counter .elementor-counter-number-suffix{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;white-space:pre-wrap}.elementor-counter .elementor-counter-number-prefix{text-align:right}.elementor-counter .elementor-counter-number-suffix{text-align:left}.elementor-counter .elementor-counter-title{text-align:center;font-size:19px;font-weight:400;line-height:2.5}
																	</style>
																	<div class="elementor-counter">
																		<div class="elementor-counter-number-wrapper">
																			<span class="elementor-counter-number-prefix"></span>
																			<span class="elementor-counter-number" data-duration="2000" data-to-value="5" data-from-value="0">0</span>
																			<span class="elementor-counter-number-suffix">K</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-5f13a69 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="5f13a69" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Active <br> Listings</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5e829b7 elementor-invisible" data-id="5e829b7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:60}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-efc3a71 elementor-widget__width-initial elementor-widget elementor-widget-counter" data-id="efc3a71" data-element_type="widget" data-widget_type="counter.default">
																<div class="elementor-widget-container">
																	<div class="elementor-counter">
																		<div class="elementor-counter-number-wrapper">
																			<span class="elementor-counter-number-prefix"></span>
																			<span class="elementor-counter-number" data-duration="2000" data-to-value="9" data-from-value="0">0</span>
																			<span class="elementor-counter-number-suffix">K</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-e26d66a elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="e26d66a" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Sold <br> listings</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1e69f7f elementor-invisible" data-id="1e69f7f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:70}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-57c7089 elementor-widget__width-initial elementor-widget elementor-widget-counter" data-id="57c7089" data-element_type="widget" data-widget_type="counter.default">
																<div class="elementor-widget-container">
																	<div class="elementor-counter">
																		<div class="elementor-counter-number-wrapper">
																			<span class="elementor-counter-number-prefix"></span>
																			<span class="elementor-counter-number" data-duration="2000" data-to-value="9" data-from-value="1">1</span>
																			<span class="elementor-counter-number-suffix">K</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-356180f elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="356180f" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Clients<br> we've served</h2>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-6554ff99 elementor-section-height-min-height elementor-section-stretched animated-fast elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="6554ff99" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b39ea64" data-id="2b39ea64" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-1a2cf34b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a2cf34b" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-52b7a60e" data-id="52b7a60e" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-1a1a4ac elementor-invisible elementor-widget elementor-widget-heading" data-id="1a1a4ac" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">RECENT PROPERTIES</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-1fba92f6 elementor-invisible elementor-widget elementor-widget-heading" data-id="1fba92f6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Explore the latest <br>properties available</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2f244220" data-id="2f244220" data-element_type="column">
														<div class="elementor-widget-wrap"></div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-2ef9a123 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ef9a123" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-126c2d86" data-id="126c2d86" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-7bdb98af elementor-invisible elementor-widget elementor-widget-WpResidence_Items_List" data-id="7bdb98af" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="WpResidence_Items_List.default">
																<div class="elementor-widget-container">
																	<div id="wpestate_sh_anime_557" class="article_container wpestate_anime wpestate_latest_listings_sh bottom-estate_property " data-type="estate_property" data-category_ids="" data-action_ids="" data-city_ids="" data-area_ids="" data-state_ids="" data-status_ids="" data-number="6" data-row-number="3" data-card-version="" data-align="vertical" data-show_featured_only="no" data-random_pick="no" data-featured_first="no" data-sort-by="0" data-page="1">
																	<?php
																	   $sql = $link->rawQuery("select * from leasing_master where isDeleted=0 and PK_lease limit 6");
																		
																		 foreach ($sql as $pro)
																		  {
																	?>
																		<div   class="col-md-4 shortcode-col listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-800x467.jpg" data-modal-title="Villa with Amazing View" data-modal-link="" data-listid="139">
																			<div class="property_listing property_card_default " data-link="">
																				<div class="listing-unit-img-wrapper">
																					<div class="prop_new_details">
																						<div class="prop_new_details_back"></div>
																						<div class="property_media"> <i class="fas fa-video"></i> <i class="fas fa-camera"></i> 6</div>
																						<div class="property_location_image"> <span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/downtown/" rel="tag">Downtown</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a></div>
																						<div class="featured_gradient"></div>
																					</div>
																					<a href="" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-525x328.jpg" /></a> 
																					<div class="tag-wrapper">
																						<div class="featured_div">Featured</div>
																						<div class="status-wrapper">
																							<div class="action_tag_wrapper Sales ">Sales</div>
																						</div>
																					</div>
																				</div>
																				<div class="property-unit-information-wrapper">
																					<h4>
																					<a href="estate_property.php?leaseID=<?php echo $pro["PK_lease"]; ?>">
																					<?php echo $pro['Lease_Name']; ?></a>
																						
																						</h4>
																					<div class="listing_unit_price_wrapper"> <?php echo $pro["Price"]; ?> <span class="price_label"></span></div>
																					<div class="listing_details the_grid_view"> <?php echo $pro["ShortDescription"]; ?> <a href="" class="unit_more_x"> ...</a> </div>
																					<div class="listing_details the_list_view"> Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hard <a href="" class="unit_more_x"> ...</a> </div>
																					<div class="property_listing_details">
																						<span class="inforoom">
																						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/></svg>
																							<!-- <svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
																							</svg> -->
																							<?php echo $pro["Location"]; ?>
																						</span>
																						<span class="infobath">
																							<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
																							</svg>
																							<?php echo $pro["Packs"]; ?>
																						</span>
																						<span class="infosize">
																							<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
																							</svg>
																							<?php echo $pro["CarpetArea"]; ?> ft<sup>2</sup>
																						</span>
																						<!-- 
																						<a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/" target="_self" class="unit_details_x">details</a> -->
																					</div>
																					<!-- <div class="property_location">
																						<div class="property_agent_wrapper">
																							<div class="property_agent_image" style="background-image:url('https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/person8-1-1-120x120.png')"></div>
																							<div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
																							<a href="https://lasvegas.wpresidence.net/estate_agent/elena-pernia/">Elena Pernía</a>
																						</div>
																						<div class="listing_actions">
																							<div class="share_unit"> <a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/&amp;t=Villa+with+Amazing+View" target="_blank" rel="noreferrer" class="social_facebook"></a> <a href="https://twitter.com/intent/tweet?text=Villa+with+Amazing+View+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fvilla-with-amazing-panoramic-view%2F" class="social_tweet" rel="noreferrer" target="_blank"></a> <a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/10/house8.jpg&amp;description=Villa+with+Amazing+View" target="_blank" rel="noreferrer" class="social_pinterest"></a> <a href="https://api.whatsapp.com/send?text=Villa+with+Amazing+View+https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fvilla-with-amazing-panoramic-view%2F" class="social_whatsup" rel="noreferrer" target="_blank"></a> <a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#b8ddd5d9d1d4f8ddd5d9d1d496dbd7d587cbcddad2dddbcc85eed1d4d4d993cfd1ccd093f9d5d9c2d1d6df93eed1ddcf9ed9d5c883dad7dcc185d0ccccc8cb9d8bf99d8afe9d8afed4d9cbcedddfd9cb96cfc8caddcbd1dcddd6dbdd96d6ddcc9d8afeddcbccd9ccdde7c8cad7c8ddcaccc19d8afeced1d4d4d995cfd1ccd095d9d5d9c2d1d6df95c8d9d6d7cad9d5d1db95ced1ddcf9d8afe" data-action="share email" class="social_email"></a> </div>
																							<span class="share_list" data-original-title="share"></span> <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="139"></span> <span class="compare-action" data-original-title="compare" data-pimage="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-143x83.jpg" data-pid="139"></span>
																						</div>
																					</div> -->
																				</div>
																			</div>
																		</div>

																		<?php }
																		?>
																
															
															
															
																	
																		<div class="wpestate_listing_sh_loader">
																			<div class="new_prelader"></div>
																		</div>
																		<div class="listinglink-wrapper_sh_listings">
																			<a href="leasing.php"><span class="wpresidence_button wpestate_item_list_sh">load more listings </span></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-63abc592 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="63abc592" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67f9b6ff" data-id="67f9b6ff" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-6636255a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6636255a" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3644d43d" data-id="3644d43d" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-96da1ee elementor-invisible elementor-widget elementor-widget-heading" data-id="96da1ee" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">OUR SERVICES</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-4e7f2f62 elementor-invisible elementor-widget elementor-widget-heading" data-id="4e7f2f62" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Top real estate <br>services available</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6afb72d4" data-id="6afb72d4" data-element_type="column">
														<div class="elementor-widget-wrap"></div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-184a5953 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="184a5953" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3ce6edd3 elementor-invisible" data-id="3ce6edd3" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-67fdb8a elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="67fdb8a" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512">
																				<title>evaluating 2</title>
																				<path d="M86.485,143.253H344.646a6,6,0,0,0,0-12H86.485a6,6,0,0,0,0,12Z"></path>
																				<path d="M344.646,192.86H168.627a6,6,0,0,0,0,12H344.646a6,6,0,1,0,0-12Z"></path>
																				<path d="M255.463,254.467H168.627a6,6,0,0,0,0,12h86.836a6,6,0,1,0,0-12Z"></path>
																				<path d="M213.219,316.073H86.485a6,6,0,0,0,0,12H213.219a6,6,0,0,0,0-12Z"></path>
																				<path d="M212.045,377.68H86.485a6,6,0,0,0,0,12h125.56a6,6,0,1,0,0-12Z"></path>
																				<path d="M108.428,268.507c-.052,0-.1-.008-.155-.008s-.1.006-.154.008a15.8,15.8,0,0,1-15.634-15.78,6,6,0,0,0-12,0,27.831,27.831,0,0,0,21.788,27.128v7.623a6,6,0,0,0,12,0v-7.623a27.786,27.786,0,0,0-6-54.917,15.788,15.788,0,1,1,15.789-15.788,6,6,0,1,0,12,0,27.831,27.831,0,0,0-21.789-27.128v-6.631a6,6,0,0,0-12,0v6.631a27.786,27.786,0,0,0,6,54.916,15.785,15.785,0,0,1,.155,31.569Z"></path>
																				<path d="M397.584,262.847V68.806a29.5,29.5,0,0,0-29.469-29.47H291.453A35.387,35.387,0,0,0,256.637,10H174.5a35.317,35.317,0,0,0-34.821,29.336H63.016a29.5,29.5,0,0,0-29.469,29.47V452.128A29.5,29.5,0,0,0,63.016,481.6H285.973v-.843A123.329,123.329,0,1,0,397.584,262.847ZM157.991,28.833A23.178,23.178,0,0,1,174.5,22h82.142a23.337,23.337,0,0,1,0,46.673H174.5a23.339,23.339,0,0,1-16.5-39.84ZM63.016,469.6a17.489,17.489,0,0,1-17.469-17.469V68.806a17.49,17.49,0,0,1,17.469-17.47h76.662A35.387,35.387,0,0,0,174.5,80.673h82.142a35.349,35.349,0,0,0,34.821-29.337h76.657a17.489,17.489,0,0,1,17.469,17.47V259.122A123.3,123.3,0,0,0,271.87,469.6ZM355.107,490A111.346,111.346,0,1,1,466.453,378.654,111.472,111.472,0,0,1,355.107,490Z"></path>
																				<path d="M397.8,343.12l-58.342,58.341-27.049-27.049a6,6,0,0,0-8.486,8.484l31.292,31.292a6,6,0,0,0,8.486,0L406.288,351.6a6,6,0,1,0-8.485-8.484Z"></path>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-5114b7ba elementor-widget elementor-widget-spacer" data-id="5114b7ba" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<style>/*! elementor - v3.6.4 - 13-04-2022 */
																		.e-container.e-container--row .elementor-spacer-inner{width:var(--spacer-size)}.e-container.e-container--column .elementor-spacer-inner,.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}
																	</style>
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-1f755e2e elementor-widget elementor-widget-heading" data-id="1f755e2e" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Sell your home</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-3e18cae1 elementor-widget elementor-widget-spacer" data-id="3e18cae1" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-56fdefe2 elementor-widget elementor-widget-spacer" data-id="56fdefe2" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-5922e526 elementor-widget elementor-widget-text-editor" data-id="5922e526" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>We sell your home at the best market price.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-29468d06 elementor-invisible" data-id="29468d06" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-1cc30b4e elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="1cc30b4e" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 512 512" width="512" height="512">
																				<path d="M471.982,417.008Q472,416.5,472,416a32.036,32.036,0,0,0-32-32V236l28.8-21.6a8,8,0,0,0-.08-12.859L400,151.322V64a8,8,0,0,0,8-8V24a8,8,0,0,0-8-8H320a8,8,0,0,0-8,8V56a8,8,0,0,0,8,8V92.861l-59.28-43.32a8,8,0,0,0-9.44,0l-208,152A8,8,0,0,0,43.2,214.4L72,236V384a32.036,32.036,0,0,0-32,32q0,.5.018,1.008A32,32,0,0,0,48,480H464a32,32,0,0,0,7.982-62.992ZM328,32h64V48H328Zm8,72V64h48v75.63L335.243,104ZM256,65.908,450.555,208.084l-18.628,13.971L260.706,97.53a8,8,0,0,0-9.412,0L80.073,222.055,61.445,208.084ZM32,448a16.019,16.019,0,0,1,15.76-16l.019,0c.409.057.818.106,1.235.133a8,8,0,0,0,8.023-10.716A15.727,15.727,0,0,1,56,416a16.019,16.019,0,0,1,16-16v64H48A16.019,16.019,0,0,1,32,448Zm344,16H280V288h96Zm16,0V280a8,8,0,0,0-8-8H272a8,8,0,0,0-8,8V464H88V236.074L256,113.892,424,236.074V464Zm72,0H440V400a16.019,16.019,0,0,1,16,16,15.727,15.727,0,0,1-1.037,5.421,8,8,0,0,0,8.023,10.716c.417-.027.826-.076,1.235-.133l.019,0a16,16,0,0,1-.24,32Z"></path>
																				<path d="M224,272H128a8,8,0,0,0-8,8V392a8,8,0,0,0,8,8h96a8,8,0,0,0,8-8V280A8,8,0,0,0,224,272Zm-8,56H184V288h32Zm-48-40v40H136V288Zm-32,56h32v40H136Zm48,40V344h32v40Z"></path>
																				<circle cx="304" cy="368" r="8" transform="translate(-152.323 508.032) rotate(-67.5)"></circle>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-2625b2f2 elementor-widget elementor-widget-spacer" data-id="2625b2f2" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-f8bc9c elementor-widget elementor-widget-heading" data-id="f8bc9c" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Home loans</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-2544b175 elementor-widget elementor-widget-spacer" data-id="2544b175" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-16efb2ea elementor-widget elementor-widget-spacer" data-id="16efb2ea" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-3559292a elementor-widget elementor-widget-text-editor" data-id="3559292a" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>We offer you free consultancy to get a loan.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1564ec47 elementor-invisible" data-id="1564ec47" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-4d126611 elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="4d126611" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" width="33.441px" height="33.441px" viewBox="0 0 33.441 33.441" style="enable-background:new 0 0 33.441 33.441;" xml:space="preserve">
																				<g>
																					<g>
																						<path d="M11.452,5.3l7.317,4.225c0.203,0.116,0.461,0.046,0.578-0.155l0.211-0.366c0.117-0.201,0.047-0.46-0.154-0.577    l-7.318-4.225c-0.202-0.117-0.461-0.047-0.577,0.154l-0.211,0.366C11.181,4.924,11.25,5.183,11.452,5.3z"></path>
																						<path d="M5.115,16.277l7.318,4.226c0.202,0.116,0.461,0.047,0.577-0.154l0.211-0.365c0.117-0.201,0.048-0.461-0.154-0.577    l-7.318-4.225c-0.202-0.117-0.461-0.047-0.577,0.154l-0.211,0.366C4.843,15.901,4.912,16.16,5.115,16.277z"></path>
																						<path d="M30.92,21.44l-14.646-7.591l1.969-3.41c0.116-0.201,0.047-0.461-0.153-0.577l-6.588-3.803    c-0.201-0.116-0.461-0.046-0.577,0.155l-4.648,8.05c-0.115,0.201-0.046,0.461,0.155,0.577l6.587,3.802    c0.201,0.117,0.461,0.047,0.576-0.154l1.97-3.41l13.896,8.889c0.196,0.125,0.451,0.063,0.567-0.139l1.057-1.83    C31.2,21.8,31.126,21.548,30.92,21.44z"></path>
																						<path d="M33.23,22.509l-0.731-0.422c-0.2-0.117-0.461-0.047-0.577,0.154l-1.269,2.195c-0.115,0.201-0.046,0.461,0.155,0.576    l0.731,0.422c0.201,0.117,0.46,0.048,0.577-0.154l1.268-2.195C33.501,22.884,33.432,22.624,33.23,22.509z"></path>
																						<path d="M17.418,25.114h-0.881c0.111-0.124,0.185-0.284,0.185-0.464v-0.696c0-0.383-0.313-0.697-0.696-0.697H2.09    c-0.384,0-0.697,0.314-0.697,0.697v0.696c0,0.18,0.074,0.34,0.186,0.464H0.697C0.312,25.114,0,25.429,0,25.812v2.787    c0,0.383,0.313,0.697,0.697,0.697H17.42c0.385,0,0.696-0.314,0.696-0.697V25.81C18.116,25.429,17.803,25.114,17.418,25.114z     M16.427,28.335H1.752c-0.403,0-0.733-0.33-0.733-0.732v-0.734c0.001-0.402,0.33-0.734,0.733-0.732h14.675    c0.405,0,0.735,0.33,0.734,0.731l0.001,0.735C17.161,28.005,16.832,28.335,16.427,28.335z"></path>
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
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-117ed39a elementor-widget elementor-widget-spacer" data-id="117ed39a" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-2c0bfbef elementor-widget elementor-widget-heading" data-id="2c0bfbef" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Legal services</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-108bfdf elementor-widget elementor-widget-spacer" data-id="108bfdf" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-274894bf elementor-widget elementor-widget-spacer" data-id="274894bf" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-f92dd4e elementor-widget elementor-widget-text-editor" data-id="f92dd4e" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>Expert legal help for all related property items.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-b76765b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b76765b" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f84e409 elementor-invisible" data-id="f84e409" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-d22b633 elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="d22b633" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve">
																				<path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21  c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279  C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19  S32.459,40,21.983,40z"></path>
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
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-94ebc17 elementor-widget elementor-widget-spacer" data-id="94ebc17" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-aa612fd elementor-widget elementor-widget-heading" data-id="aa612fd" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Home inspection</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-d4d6ffd elementor-widget elementor-widget-spacer" data-id="d4d6ffd" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-45fa8d4 elementor-widget elementor-widget-spacer" data-id="45fa8d4" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-375a089 elementor-widget elementor-widget-text-editor" data-id="375a089" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>We make sure you get what you were promised.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9cd455d elementor-invisible" data-id="9cd455d" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-b360483 elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="b360483" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" viewBox="-61 0 488 488">
																				<path d="M321.742 67H274V36.984a5.673 5.673 0 0 0-1.543-4.195A5.672 5.672 0 0 0 268.359 31h-40.968c-6.196-18-24.223-31-44.645-31h-.144c-20 0-37.625 13-44.391 31H97.64a5.672 5.672 0 0 0-4.098 1.79A5.673 5.673 0 0 0 92 36.983V67H44.258C20.028 67 0 86.043 0 109.285v336.567C0 469.094 20.027 488 44.258 488h277.484c24.23 0 44.258-18.906 44.258-42.148V109.285C366 86.043 345.973 67 321.742 67zM104 43h38.621a6.009 6.009 0 0 0 5.813-4.512c4.007-15.597 18.078-26.5 34.183-26.488h.113c16.551 0 30.954 11.047 34.243 26.262A6.003 6.003 0 0 0 222.836 43H262v58H104zm250 402.852C354 462.477 339.355 476 321.742 476H44.258C26.645 476 12 462.477 12 445.852V109.285C12 92.66 26.645 79 44.258 79H92v27.7c0 3.316 2.324 6.3 5.64 6.3h170.72c3.316 0 5.64-2.984 5.64-6.3V79h47.742C339.355 79 354 92.66 354 109.285zm0 0"></path>
																				<path d="M256.742 415c3.317 0 6-2.688 6-6s-2.683-6-6-6H109.258c-3.317 0-6 2.688-6 6s2.683 6 6 6zm0 0M286.742 429H79.258c-3.317 0-6 2.688-6 6s2.683 6 6 6h207.484c3.317 0 6-2.688 6-6s-2.683-6-6-6zm0 0M297.672 231.285l-20.457-1.93a98.036 98.036 0 0 0-9.977-24.636l12.989-15.781a6.001 6.001 0 0 0-.387-8.051l-23.73-23.735a5.998 5.998 0 0 0-8.055-.386l-15.989 13.172a96.34 96.34 0 0 0-24.64-10.04L205.5 139.43a5.903 5.903 0 0 0-5.938-5.328L166.302 134h-.04a5.906 5.906 0 0 0-5.972 5.328l-1.93 20.457a98.085 98.085 0 0 0-24.632 9.973l-15.993-13.192a5.998 5.998 0 0 0-8.054.383l-23.735 23.73a5.998 5.998 0 0 0-.386 8.055L98.73 204.72a96.293 96.293 0 0 0-10.043 24.644l-20.355 1.922A5.904 5.904 0 0 0 63 237.258v33.484a5.906 5.906 0 0 0 5.328 5.973l20.457 1.93a98.144 98.144 0 0 0 9.973 24.632L85.566 319.27a5.998 5.998 0 0 0 .383 8.054l23.73 23.735a5.998 5.998 0 0 0 8.055.386l15.985-13.172a96.293 96.293 0 0 0 24.644 10.043l1.922 20.356a5.906 5.906 0 0 0 5.973 5.328h33.484a5.906 5.906 0 0 0 5.973-5.328l1.93-20.457a98.144 98.144 0 0 0 24.632-9.973l15.993 13.192a6.002 6.002 0 0 0 8.054-.38l23.735-23.73a5.995 5.995 0 0 0 .386-8.058l-13.172-15.985a96.293 96.293 0 0 0 10.043-24.644l20.356-1.922a5.906 5.906 0 0 0 5.328-5.973v-33.484a5.906 5.906 0 0 0-5.328-5.973zM291 265.277l-19.246 1.82a5.948 5.948 0 0 0-5.266 4.801 83.719 83.719 0 0 1-11.636 28.653 6.002 6.002 0 0 0 .43 7.066l12.433 15.078-16.024 16.028-15.078-12.43a5.995 5.995 0 0 0-7.066-.41 86.483 86.483 0 0 1-28.738 11.68 5.882 5.882 0 0 0-4.711 5.19L194.278 362h-22.555l-1.82-19.246a5.948 5.948 0 0 0-4.801-5.266 83.719 83.719 0 0 1-28.653-11.636 6.002 6.002 0 0 0-7.066.43l-15.078 12.433-16.028-16.024 12.43-15.078a6 6 0 0 0 .41-7.066 86.483 86.483 0 0 1-11.68-28.738 5.882 5.882 0 0 0-5.19-4.711L75 265.278v-22.555l19.246-1.82a5.948 5.948 0 0 0 5.266-4.801 83.719 83.719 0 0 1 11.636-28.653 6.002 6.002 0 0 0-.43-7.066l-12.433-15.078 16.024-16.028 15.078 12.426a6.001 6.001 0 0 0 7.066.414 86.409 86.409 0 0 1 28.738-11.683 5.999 5.999 0 0 0 4.711-5.297l1.817-19.32 22.344.14 1.824 19.39a5.995 5.995 0 0 0 4.8 5.321 83.852 83.852 0 0 1 28.653 11.664 6.001 6.001 0 0 0 7.066-.414l15.078-12.426 16.032 16.031-12.223 14.868a6.001 6.001 0 0 0-.41 7.058 86.429 86.429 0 0 1 11.683 28.742 5.874 5.874 0 0 0 5.192 4.711l19.242 1.82zm0 0"></path>
																				<path d="M129.688 200.688c-29.442 29.445-29.446 77.18 0 106.625s77.18 29.445 106.625 0 29.44-77.18 0-106.625c-29.461-29.399-77.165-29.399-106.625 0zm98.14 98.14c-24.754 24.727-64.863 24.715-89.598-.027-24.738-24.746-24.738-64.856 0-89.602 24.735-24.742 64.844-24.754 89.598-.027 24.719 24.773 24.719 64.883 0 89.656zm0 0"></path>
																				<path d="M183 224.453c6.387.008 11.559 5.18 11.566 11.567 0 3.312 2.688 6 6 6s6-2.688 6-6A23.6 23.6 0 0 0 189 213.23V209c0-3.313-2.688-6-6-6s-6 2.688-6 6v4.23c-11.457 3.016-18.89 14.067-17.371 25.813 1.52 11.75 11.527 20.543 23.371 20.543 6.39 0 11.57 5.18 11.57 11.566 0 6.391-5.18 11.57-11.57 11.57-6.387 0-11.566-5.179-11.566-11.57 0-3.312-2.688-6-6-6s-6 2.688-6 6A23.608 23.608 0 0 0 177 293.945V299c0 3.312 2.688 6 6 6s6-2.688 6-6v-5.055c11.457-3.015 18.895-14.066 17.375-25.816S194.848 247.586 183 247.586c-6.387 0-11.566-5.18-11.566-11.566 0-6.391 5.18-11.567 11.566-11.567zm0 0"></path>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-38b5ec2 elementor-widget elementor-widget-spacer" data-id="38b5ec2" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-8d602a0 elementor-widget elementor-widget-heading" data-id="8d602a0" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Evaluation</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-dadcced elementor-widget elementor-widget-spacer" data-id="dadcced" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-b4f1b1b elementor-widget elementor-widget-spacer" data-id="b4f1b1b" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-b75d41c elementor-widget elementor-widget-text-editor" data-id="b75d41c" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>We offer you free evaluation to get a mortgage loan.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0069387 elementor-invisible" data-id="0069387" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-29a2a54 elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="29a2a54" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" id="OutlineExpand" height="512" viewBox="0 0 64 64" width="512">
																				<path d="m57 25.59 1.315.893c.167.113.362.173.562.173.062 0 .126-.006.188-.018.26-.05.49-.201.639-.421l2.246-3.311c.311-.457.191-1.079-.266-1.389l-29.122-19.761c-.34-.23-.783-.23-1.123 0l-29.124 19.762c-.457.31-.576.932-.266 1.389l2.246 3.311c.148.22.379.371.639.421.262.05.531-.007.75-.155l1.316-.894v10.005c-.586.256-1.065.729-1.316 1.351-1.681 4.156-3.684 9.618-3.684 12.054 0 3.59 2.09 6.378 5 6.903v4.097h-5v2h60v-2h-5zm-51.611-1.323-1.123-1.657 27.734-18.819 27.734 18.819-1.123 1.656-26.049-17.676c-.17-.115-.366-.173-.562-.173s-.392.058-.562.173zm-1.389 24.733c0-1.625 1.289-5.745 3.537-11.304.115-.283.362-.313.463-.313s.348.03.463.313c2.248 5.559 3.537 9.679 3.537 11.304 0 2.897-1.683 5-4 5s-4-2.103-4-5zm5 6.903c2.91-.525 5-3.313 5-6.903 0-2.436-2.003-7.898-3.684-12.054-.251-.622-.73-1.095-1.316-1.351v-11.362l23-15.607 23 15.607v19.465l-.168-.252c-.371-.557-1.293-.557-1.664 0l-2 3c-.109.163-.168.357-.168.554v2h-2v-2c0-.197-.059-.391-.168-.555l-2-3c-.371-.557-1.293-.557-1.664 0l-2 3c-.109.164-.168.358-.168.555v2h-2v-2c0-.197-.059-.391-.168-.555l-2-3c-.371-.557-1.293-.557-1.664 0l-2 3c-.109.164-.168.358-.168.555v13h-6v-19c0-.553-.447-1-1-1h-11c-.553 0-1 .447-1 1v19h-7zm30 4.097h-2v-12.697l1-1.5 1 1.5zm2-9h2v2h-2zm0 4h2v5h-2zm6 5h-2v-12.697l1-1.5 1 1.5zm2-9h2v2h-2zm0 4h2v5h-2zm-22 5h-9v-18h9zm26 0v-12.697l1-1.5 1 1.5v12.697z"></path>
																				<path d="m29 33h6c2.206 0 4-1.794 4-4v-6c0-2.206-1.794-4-4-4h-6c-2.206 0-4 1.794-4 4v6c0 2.206 1.794 4 4 4zm-2-4v-2h4v4h-2c-1.103 0-2-.897-2-2zm8 2h-2v-4h4v2c0 1.103-.897 2-2 2zm2-8v2h-4v-4h2c1.103 0 2 .897 2 2zm-8-2h2v4h-4v-2c0-1.103.897-2 2-2z"></path>
																				<path d="m23 50h2v2h-2z"></path>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-7cc3a6a elementor-widget elementor-widget-spacer" data-id="7cc3a6a" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-eb85597 elementor-widget elementor-widget-heading" data-id="eb85597" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Photoshoot</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-239e416 elementor-widget elementor-widget-spacer" data-id="239e416" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-4cc713b elementor-widget elementor-widget-spacer" data-id="4cc713b" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-dabbb2f elementor-widget elementor-widget-text-editor" data-id="dabbb2f" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>We prepare your home visual presentation.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section> -->
										</div>
									</div>
								</div>
							</section>
							<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-6a9ab524 elementor-section-height-min-height elementor-section-stretched animated-fast elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="6a9ab524" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5133bb5" data-id="5133bb5" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-4a6e66f4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a6e66f4" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-797afd69" data-id="797afd69" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-28e9c2b elementor-invisible elementor-widget elementor-widget-heading" data-id="28e9c2b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">OUR CLIENTS</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-5d362c30 elementor-invisible elementor-widget elementor-widget-heading" data-id="5d362c30" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">What are our clients saying about us</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-544908e8" data-id="544908e8" data-element_type="column">
														<div class="elementor-widget-wrap"></div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-2659f457 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2659f457" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5e242126 elementor-invisible" data-id="5e242126" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-67eb6162 elementor-widget elementor-widget-WpResidence_Testimonial" data-id="67eb6162" data-element_type="widget" data-widget_type="WpResidence_Testimonial.default">
																<div class="elementor-widget-container">
																	<div class="testimonial-container type_class_4 ">
																		<div class="testimonial-image" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/testimonial1.jpeg)"></div>
																		<div class="testimonial-author-line">Dana Gilmore </div>
																		<div class="testimonial-location-line"> Excellent team! 🏆 </div>
																		<div class="testimonial-text">The WP Estate team did an outstanding job helping me buy my first home. The high level of service and dedication.</div>
																		<div class="testimmonials_starts"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-44e6cd14 elementor-widget elementor-widget-WpResidence_Testimonial" data-id="44e6cd14" data-element_type="widget" data-widget_type="WpResidence_Testimonial.default">
																<div class="elementor-widget-container">
																	<div class="testimonial-container type_class_4 ">
																		<div class="testimonial-image" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/testimonial5.jpg)"></div>
																		<div class="testimonial-author-line">Anna McKenzie </div>
																		<div class="testimonial-location-line"> developer </div>
																		<div class="testimonial-text">As I move forward to now BUY my next house, I am extremely certain Residence will be the right partner to help me.</div>
																		<div class="testimmonials_starts"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-628c8fcd elementor-invisible" data-id="628c8fcd" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:150}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-8d6180b elementor-widget elementor-widget-WpResidence_Testimonial" data-id="8d6180b" data-element_type="widget" data-widget_type="WpResidence_Testimonial.default">
																<div class="elementor-widget-container">
																	<div class="testimonial-container type_class_4 ">
																		<div class="testimonial-image" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/testimonial2.jpeg)"></div>
																		<div class="testimonial-author-line">Susan Barkley </div>
																		<div class="testimonial-location-line"> happy seller </div>
																		<div class="testimonial-text">The WP Estate team did an outstanding job helping me buy my first home. The high level of service and dedication.</div>
																		<div class="testimmonials_starts"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-c4bb1e9 elementor-widget elementor-widget-WpResidence_Testimonial" data-id="c4bb1e9" data-element_type="widget" data-widget_type="WpResidence_Testimonial.default">
																<div class="elementor-widget-container">
																	<div class="testimonial-container type_class_4 ">
																		<div class="testimonial-image" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/testimonial4.jpg)"></div>
																		<div class="testimonial-author-line">Stephanie Barkley </div>
																		<div class="testimonial-location-line"> happy seller </div>
																		<div class="testimonial-text">The sale went smoothly, and we just closed on an ideal new place we're excited to call home. </div>
																		<div class="testimmonials_starts"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-78ff659d elementor-invisible" data-id="78ff659d" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-3fed980c elementor-widget elementor-widget-WpResidence_Testimonial" data-id="3fed980c" data-element_type="widget" data-widget_type="WpResidence_Testimonial.default">
																<div class="elementor-widget-container">
																	<div class="testimonial-container type_class_4 ">
																		<div class="testimonial-image" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/testimonial3.jpeg)"></div>
																		<div class="testimonial-author-line">Lisa Simpson </div>
																		<div class="testimonial-location-line"> happy buyer </div>
																		<div class="testimonial-text">We hired the WP Estate team as our buyer agent because they are specifically trained in Short Sale & Foreclosure.</div>
																		<div class="testimmonials_starts"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-7daf2b94 elementor-widget elementor-widget-WpResidence_Testimonial" data-id="7daf2b94" data-element_type="widget" data-widget_type="WpResidence_Testimonial.default">
																<div class="elementor-widget-container">
																	<div class="testimonial-container type_class_4 ">
																		<div class="testimonial-image" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/testimonials6.jpg)"></div>
																		<div class="testimonial-author-line">Janine Royce </div>
																		<div class="testimonial-location-line"> happy buyer </div>
																		<div class="testimonial-text">His professionalism, personality, attention to detail, responsiveness and his ability to close the deal was Outstanding</div>
																		<div class="testimmonials_starts"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section> -->
							<section class="elementor-section elementor-top-section elementor-element elementor-element-c8121bb elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="c8121bb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532a272" data-id="532a272" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-d9f3368 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d9f3368" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-40c7340" data-id="40c7340" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-675e03a elementor-invisible elementor-widget elementor-widget-heading" data-id="675e03a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Send us a message today</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-2324c00 elementor-button-align-stretch elementor-invisible elementor-widget elementor-widget-WpResidence_Contact_Form_Builder" data-id="2324c00" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="WpResidence_Contact_Form_Builder.default">
																<div class="elementor-widget-container">
																	
																<form class="elementor-form" method="post" action="">
																		<!-- <div class="alert-box error">
																			<div class="alert-message" id="alert-agent-contact"></div>
																		</div> -->
																		<!-- <input name="prop_id" type="hidden" id="agent_property_id" value="">
																		<input name="prop_id" type="hidden" id="agent_id" value="">
																		<input name="prop_id" type="hidden" id="contact_form_elementor" value="1">
																		<input type="hidden" name="contact_ajax_nonce" id="agent_property_ajax_nonce" value="ef123dddee" />
																		<input type="hidden" id="wpresidence_form_id" name="wpresidence_form_id" value="wpresidence_form_2450" />
																		<input type="hidden" id="elementor_email_subject" name="email_suject" value="New email from &quot;WpResidence Real Estate Theme Demo&quot; " /> -->

																		<div class="elementor-form-fields-wrapper elementor-labels-above">
																			<div class="elementor-field-group elementor-column form-group elementor-field-group-name elementor-col-100"><label for="form-field-name" class="elementor-field-label">Name</label><input type="text" name="name" id="form-field-name" class="elementor-field form-control elementor-size-sm elementor-field-textual" placeholder="Name"></div>

																			<div class="elementor-field-group elementor-column form-group elementor-field-group-email elementor-field-required elementor-col-100"><label for="form-field-email" class="elementor-field-label">Email*</label><input type="email" name="EmailId" id="form-field-email" class="elementor-field form-control elementor-size-sm elementor-field-textual" required="required" placeholder="Email"></div>
																			
																			<div class="elementor-field-group elementor-column form-group elementor-field-group-321f593 elementor-col-100"><label for="form-field-321f593" class="elementor-field-label">Phone Number</label><input type="tel" class="form-control elementor-field-textual elementor-field elementor-size-sm" name="phone_number" id="form-field-321f593" rows="4" placeholder="Phone Number"/></div>

																			<div class="elementor-field-group elementor-column form-group elementor-field-group-message elementor-col-100"><label for="form-field-message" class="elementor-field-label">Message</label><textarea class="form-control elementor-field-textual elementor-field elementor-size-sm" name="message" id="form-field-message" rows="4" placeholder="Message"></textarea></div>

																			
																			
																			<div class="elementor-column elementor-col-100">
																				<button type="submit" class="wpresidence_button wpresidence_button_elementor elementor-button elementor-size-md" name="submit">
																				Submit </button>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1014365" data-id="1014365" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<section class="elementor-section elementor-inner-section elementor-element elementor-element-2ccfe24 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ccfe24" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ec6913a" data-id="ec6913a" data-element_type="column">
																		<div class="elementor-widget-wrap elementor-element-populated">
																			<div class="elementor-element elementor-element-924f82a elementor-invisible elementor-widget elementor-widget-heading" data-id="924f82a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																				<div class="elementor-widget-container">
																					<p class="elementor-heading-title elementor-size-default">CONTACT</p>
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-58d4984 elementor-invisible elementor-widget elementor-widget-heading" data-id="58d4984" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																				<div class="elementor-widget-container">
																					<h2 class="elementor-heading-title elementor-size-default">Get in touch with us to plan your next transaction</h2>
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-480fe50 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="480fe50" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="text-editor.default">
																				<div class="elementor-widget-container">
																					<p>Our experts and developers would love to contribute their expertise and insights and help you today. Contact us to help you plan your next transaction, either buying or selling a home.</p>
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-51b5e88 elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="51b5e88" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="button.default">
																				<div class="elementor-widget-container">
																					<div class="elementor-button-wrapper">
																						<a href="contactUs.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																						<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">Contact us</span>
																						</span>
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-3613e20 elementor-section-height-min-height elementor-section-stretched animated-fast elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="3613e20" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8311871" data-id="8311871" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3b75951 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3b75951" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ce7716e" data-id="ce7716e" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-4588f96 elementor-invisible elementor-widget elementor-widget-heading" data-id="4588f96" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">BLOG ARTICLES</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-23b6b55 elementor-invisible elementor-widget elementor-widget-heading" data-id="23b6b55" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">The most recent <br>local real estate news</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e288ff0" data-id="e288ff0" data-element_type="column">
														<div class="elementor-widget-wrap"></div>
													</div>
												</div>
											</section>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-0994559 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0994559" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1e6eefe" data-id="1e6eefe" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-880f14b elementor-invisible elementor-widget elementor-widget-Wpresidence_Blog_Post_List" data-id="880f14b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="Wpresidence_Blog_Post_List.default">
																<div class="elementor-widget-container">
																	<div class="article_container  wpestate_latest_listings_sh bottom-post blogs_wrapper" data-category_ids="" data-number="4" data-row-number="4" data-card-version="3" data-sort-by="0" data-page="1">
																	<?php
																	   $sql = $link->rawQuery("select * from blog_master where isDeleted=0");
																		
																		 foreach ($sql as $blog)	
																		{
																		
																		?>
																		<div  class="col-md-3 shortcode-col  listing_wrapper blog3v">
																			<div class="property_listing_blog" data-link="">


																				<div class="featured_gradient"></div>
																				<div class="blog_unit_image" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2016/03/portrait__interior9-525x328.jpg);"></div>
																				<div class="blog_unit_content_v3">
																					<div class="blog_unit_meta">
																						Mar 04, 2016 
																					</div>
																					<h4>
																						<a href="" class="blog_unit_title"><?php echo $blog['BlogTitle'] ?></a>
																					</h4>
																					<a class="read_more" href="Singleblog.php?pid=<?php echo $blog["PK_BlogID"]; ?>"> Continue reading<i class="fas fa-angle-right"></i> </a>
																				</div>
																			
																			
																			</div>
																		
																			</div>
																			<?php
																			}
																			?>
																		<!-- <div class="col-md-3 shortcode-col  listing_wrapper blog3v">
																			<div class="property_listing_blog" data-link="https://lasvegas.wpresidence.net/2014/05/28/the-top-5-most-livable-las-vegas-neighbourhoods/">
																				<div class="featured_gradient"></div>
																				<div class="blog_unit_image" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2014/05/portrait_july2019-525x328.jpg);"></div>
																				<div class="blog_unit_content_v3">
																					<div class="blog_unit_meta">
																						May 28, 2014 
																					</div>
																					<h4>
																						<a href="https://lasvegas.wpresidence.net/2014/05/28/the-top-5-most-livable-las-vegas-neighbourhoods/" class="blog_unit_title">The top 5 most livable Las Vegas neighbourho...</a>
																					</h4>
																					<a class="read_more" href="https://lasvegas.wpresidence.net/2014/05/28/the-top-5-most-livable-las-vegas-neighbourhoods/"> Continue reading<i class="fas fa-angle-right"></i> </a>
																				</div>
																			</div>
																		</div> -->
																		<!-- <div class="col-md-3 shortcode-col  listing_wrapper blog3v">
																			<div class="property_listing_blog" data-link="https://lasvegas.wpresidence.net/2014/05/27/in-las-vegas-home-prices-have-doubled-in-the-past-5-years/">
																				<div class="featured_gradient"></div>
																				<div class="blog_unit_image" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/house_4-525x328.jpeg);"></div>
																				<div class="blog_unit_content_v3">
																					<div class="blog_unit_meta">
																						May 27, 2014 
																					</div>
																					<h4>
																						<a href="https://lasvegas.wpresidence.net/2014/05/27/in-las-vegas-home-prices-have-doubled-in-the-past-5-years/" class="blog_unit_title">In Las Vegas home prices have doubled in the...</a>
																					</h4>
																					<a class="read_more" href="https://lasvegas.wpresidence.net/2014/05/27/in-las-vegas-home-prices-have-doubled-in-the-past-5-years/"> Continue reading<i class="fas fa-angle-right"></i> </a>
																				</div>
																			</div>
																		</div> -->
																		<!-- <div class="col-md-3 shortcode-col  listing_wrapper blog3v">
																			<div class="property_listing_blog" data-link="https://lasvegas.wpresidence.net/2014/05/27/las-vegas-neighbourhoods-where-its-better-to-buy-a-condo-apartment/">
																				<div class="featured_gradient"></div>
																				<div class="blog_unit_image" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior47-525x328.jpg);"></div>
																				<div class="blog_unit_content_v3">
																					<div class="blog_unit_meta">
																						May 27, 2014 
																					</div>
																					<h4>
																						<a href="https://lasvegas.wpresidence.net/2014/05/27/las-vegas-neighbourhoods-where-its-better-to-buy-a-condo-apartment/" class="blog_unit_title">Las Vegas neighbourhoods where it’s better t...</a>
																					</h4>
																					<a class="read_more" href="https://lasvegas.wpresidence.net/2014/05/27/las-vegas-neighbourhoods-where-its-better-to-buy-a-condo-apartment/"> Continue reading<i class="fas fa-angle-right"></i> </a>
																				</div>
																			</div>
																		</div> -->
																		<div class="wpestate_listing_sh_loader">
																			<div class="new_prelader"></div>
																		</div>
																		<div class="listinglink-wrapper_sh_listings">
																			<a href="blogList.php"><span class="wpresidence_button wpestate_item_list_sh blog_list_loader"> load articles </span></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
            	<?php include("subfooter.php"); ?>
			</div>
        <?php include("footer.php"); ?>
</html>