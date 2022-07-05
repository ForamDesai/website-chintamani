<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php
		include ("header.php");
	?>


                                        <h3 class="widget-title-sidebar">Latest Listings</h3>
										
										<div class="latest_listings list_type">
										<?php
										$sql = $link->rawQuery("SELECT * from leasing_master WHERE isDeleted = 0 ORDER BY Lease_Name ASC LIMIT 3");
											foreach ($sql as $pr) {
										?>
											<div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">

												<div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><img src="<?php echo $pr['ThumbnailURL'] ?>" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> 
                                            </div>

												<div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><?php echo $pr['Lease_Name'] ?>"</a></span> <span class=widget_latest_price><?php echo $pr['Price'] ?><span class="price_label"></span></span>
                                             </div>
											</div>
											<?php
												}
											?>
											
										</div>