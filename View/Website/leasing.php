<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include("header.php");
include("../../Helper/connect.php");



//    Pagination

// $query = "select * from leasing_master WHERE isDeleted = 0 and FK_Status = 8";
// $exce = mysqli_query($con, $query);
// $query = "select * from leasing_master WHERE isDeleted = 0 and FK_Status = 8";
// $exce = mysqli_query($con, $query);

// $Total_no_of_lease_available = mysqli_num_rows($exce);
// $lease_to_be_displayed = "6";
// $no_of_pages = ceil($Total_no_of_lease_available / $lease_to_be_displayed);

// if (isset($_GET["page_id"])) {
// 	$Pageid = $_GET["page_id"];
// } else {
// 	$Pageid = 1;
// }

if(isset($_GET['query'])){
	$query1 = $_GET['query'];
	$count = $_GET['count'];
	echo $query1,$count;
	// $exce_for_pagination = mysqli_query($con, $query1);
	$Total_no_of_lease_available = $count;

	$lease_to_be_displayed = "6";
	$no_of_pages = ceil($Total_no_of_lease_available / $lease_to_be_displayed);
	if (isset($_GET["page_id"])) {
		$Pageid = $_GET["page_id"];
	} else {
		$Pageid = 1;
	}
	$offset  = ($Pageid - 1) * $lease_to_be_displayed;
	// offset- The number after which need to fetch the rows.
	$exce_for_pagination = mysqli_query($con, $query1."LIMIT {$offset},{$lease_to_be_displayed};");

}
// $offset  = ($Pageid - 1) * $lease_to_be_displayed;
// // offset- The number after which need to fetch the rows.
// $query_for_pagniation = "select * from leasing_master where isDeleted=0 and FK_Status = 8 LIMIT {$offset},{$lease_to_be_displayed}";
// $exce_for_pagination = mysqli_query($con, $query_for_pagniation);
else{

	echo "first time";

	$query1 = "SELECT * FROM leasing_master";

$filtered_get = array_filter($_POST); // removes empty values from $_GET
// echo "<br>";
print_r($filtered_get);
// echo "<br>";

if (count($filtered_get)) { // not empty

	$query1 .= " WHERE isDeleted = 0 and FK_Status = 8 AND";
	$count = count($filtered_get);

	$keynames = array_keys($filtered_get); // make array of key names from $filtered_get
	// print_r($keynames);

	foreach ($filtered_get as $key => $value) {

		if ($key == "Location") {
			$range = $value;
			$query1 .= " $key between '$value' AND '$value'";
		} else {
			$range = explode("-", $value);
			$query1 .= " $key between $range[0] AND $range[1]";
		}

		if ($count > 1) {
			$query1 .= " AND";
			$count--;
		}
	}
}
// echo $query1;
$query2 = $query1.";";
$exce = mysqli_query($con, $query2);


//------- PAGINATION STARTS------


				$Total_no_of_lease_available = mysqli_num_rows($exce);
				$lease_to_be_displayed = "6";
				$no_of_pages = ceil($Total_no_of_lease_available / $lease_to_be_displayed);

				if (isset($_GET["page_id"])) {
					$Pageid = $_GET["page_id"];
				} else {
					$Pageid = 1;
				}
				$offset  = ($Pageid - 1) * $lease_to_be_displayed;
				// offset- The number after which need to fetch the rows.

				$query3 = $query1." LIMIT {$offset},{$lease_to_be_displayed};";
				// $query_for_pagniation = 
				$exce_for_pagination = mysqli_query($con, $query3);
echo $query1;
	
}




//------- PAGINATION ENDS------




// print_r(array_values($_POST));
// $count = 0;

// $filter_keys = array();
// $filter_values = array();

// foreach ($_POST as $key => $value) {


// 	if ($value != null ) {
// 	$count++;
//    array_push($filter_keys,$key);
//    array_push($filter_values,$value);
// 	}


// }


// if(isset($_GET['location'])){
// 	echo "success";
// 	echo $_GET['location'];
// 	array_push($filter_keys,"Location");
// 	array_push($filter_values,$_GET['location']);

// }
// echo $_GET['count'];
// print_r($filter_keys);
// echo "<br>";
// print_r($filter_values);








// 		if($count == 1 || $_GET['count'] == 1){
// 			echo "check 2";
// 			if( in_array("Price",$filter_keys) || in_array("BuildUpArea",$filter_keys) || in_array("Packs",$filter_keys)){
// 				echo "1check 3";
// 				$range = explode("-",$filter_values[0]);
// 				print_r($range);
// 				$query_to_filter_data_by_range = mysqli_query($con,"select * from leasing_master where isDeleted = 0 and FK_Status = 8 and $filter_keys[0] between $range[0] and $range[1]");

// 				$Total_no_of_lease_available = mysqli_num_rows($query_to_filter_data_by_range);
// 				$lease_to_be_displayed = "6";
// 				$no_of_pages = ceil($Total_no_of_lease_available / $lease_to_be_displayed);

// 				if (isset($_GET["page_id"])) {
// 					$Pageid = $_GET["page_id"];
// 				} else {
// 					$Pageid = 1;
// 				}
// 				$offset  = ($Pageid - 1) * $lease_to_be_displayed;
// 				// offset- The number after which need to fetch the rows.
// 				$query_for_pagniation = "select * from leasing_master where isDeleted=0 and FK_Status = 8 and $filter_keys[0] between $range[0] and $range[1] LIMIT {$offset},{$lease_to_be_displayed}";
// 				$exce_for_pagination = mysqli_query($con, $query_for_pagniation);









// 			}elseif( in_array("Location",$filter_keys)){
// 				echo "1check 4";
// 				$query_to_filter_data_by_range = mysqli_query($con,"select * from leasing_master where isDeleted = 0 and FK_Status = 8 and Location = $filter_keys[0] ");


// 				$Total_no_of_lease_available = mysqli_num_rows($query_to_filter_data_by_range);
// 				$lease_to_be_displayed = "6";
// 				$no_of_pages = ceil($Total_no_of_lease_available / $lease_to_be_displayed);

// 				if (isset($_GET["page_id"])) {
// 					$Pageid = $_GET["page_id"];
// 				} else {
// 					$Pageid = 1;
// 				}
// 				$offset  = ($Pageid - 1) * $lease_to_be_displayed;
// 				// offset- The number after which need to fetch the rows.
// 				$query_for_pagniation = "select * from leasing_master where isDeleted=0 and FK_Status = 8 and Location = $filter_keys[0] LIMIT {$offset},{$lease_to_be_displayed}";
// 				$exce_for_pagination = mysqli_query($con, $query_for_pagniation);

// 			}


// 		}elseif ($count == 2) {
// 			echo "2 check 1";
// 			if(in_array("Price",$filter_keys) || in_array("BuildUpArea",$filter_keys) || in_array("Packs",$filter_keys)){
// 				if(in_array("Location",$filter_keys)){
// 					$range = explode("-",$filter_values[1]);
// 					$query_to_filter_data_by_range = mysqli_query($con,"select * from leasing_master where isDeleted = 0 and FK_Status = 8 and $filter_keys[1] between $range[0] and $range[1] and Location = '$filter_values[0]' ");


// 				}else{
// 					$range1 = explode("-",$filter_values[0]);
// 					$range2 = explode("-",$filter_values[1]);


// 					$query_to_filter_data_by_range = mysqli_query($con,"select * from leasing_master where isDeleted = 0 and FK_Status = 8 and $filter_keys[0] between $range1[0] and $range1[1] and $filter_keys[1] between $range2[0] and $range2[1] ");
// 				}


// 			}




// 		}elseif($count == 3){
// 			echo "count 3 check 1";

// 		}elseif($count == 4){

// 			echo "count 4 check 1";

// 			$range1 = explode("-",$filter_values[1]);
// 			$range2 = explode("-",$filter_values[2]);
// 			$range3 = explode("-",$filter_values[3]);


// 			$query_to_filter_data_by_range = mysqli_query($con,"select * from leasing_master where isDeleted = 0 and FK_Status = 8 and Location = '$filter_values[0]' and $filter_keys[1] between $range1[0] and $range1[1]  and $filter_keys[2] between $range2[0] and $range2[1] and $filter_keys[3] between $range3[0] and $rang3[1]");

// 		}



//    Pagination

// 		echo "<pre>";
// 		print_r($query_to_filter_data_by_range);
// echo "</pre>";











// if($count == 1){

// 	if()



// }elseif($count == 2){

// }elseif($count == 3){


// }elseif($count == 4){

// }










// if (isset($_POST['filter_search_range'])) {
// 	// echo $_POST['filter_search_range'];
// 	$a = $_POST['filter_search_range'];
// 	$range = explode("-",$a);
// 	// print_r($range);
// 	$query_to_filter_data_by_range =mysqli_query($con,"select * from leasing_master where isDeleted = 0 and FK_Status = 8 and Price between $range[0] and $range[1]");
// 	if($query_to_filter_data_by_range){
// 		echo "success";
// 		while($row = mysqli_fetch_array($query_to_filter_data_by_range)){
// 			echo $row['Price'];
// 	}

// }else{
// 	echo "failsd";
// }

// }




// while($row = mysqli_fetch_array($query_to_filter_data)){
// 	echo $row['Price'];
// }


// filter_search_location
// filter_search_range
// filter_search_capacity
// echo "<pre>";
// if(isset($_POST['filter_search_location'])){

// echo $_POST['filter_search_location'];
// echo "<br>";
// }
// if (isset($_POST['filter_search_range'])) {
// 	echo $_POST['filter_search_range'];
// 	echo "<br>";
// }
// if (isset($_POST['filter_search_capacity'])) {
// 	echo $_POST['filter_search_capacity'];
// 	echo "<br>";
// }
// if (isset($_POST['filter_search_square_ft'])) {
// 	echo $_POST['filter_search_square_ft'];
// 	echo "<br>";
// }
// echo "</pre>";












?>

<div class="website-wrapper" id="all_wrapper" style="background:pink">
	<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">
		<?php include("subheader.php"); ?>
		<div class="container content_wrapper">
			<div  class="row">
				<div  class=" col-md-12 rightmargin ">
					<h1 class="entry-title title_prop">Properties Standard List</h1>
					<div  class="single-content"></div>
					<div style="border-radius:15px;"  class="listing_filters_head">
						<input type="hidden" id="page_idx" value="93">
						<div class="dropdown listing_filter_select filter_action_category">
							<div data-toggle="dropdown" id="a_filter_action" class="filter_menu_trigger" data-value="Types"> Location <span class="caret caret_filter"></span> </div>
							<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_action">
								<li role="presentation" data-value="all">Goregaon</li>
								<li role="presentation" data-value="rentals">Andheri</li>
								<li role="presentation" data-value="sales">Daadar</li>
							</ul>
						</div>
						<div class="dropdown listing_filter_select filter_category">
							<div data-toggle="dropdown" id="a_filter_categ" class="filter_menu_trigger" data-value="Categories"> Price Range<span class="caret caret_filter"></span> </div>
							<ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_categ">
								<li role="presentation" data-value="all">Categories</li>
								<li role="presentation" data-value="apartments">Apartments</li>
								<li role="presentation" data-value="condos">Condos</li>
								<li role="presentation" data-value="duplexes">Duplexes</li>
								<li role="presentation" data-value="houses">Houses</li>
								<li role="presentation" data-value="villas">Villas</li>
							</ul>
						</div>
						<div class="dropdown listing_filter_select filter_county">
							<div data-toggle="dropdown" id="a_filter_county" class="filter_menu_trigger" data-value="States"> Capacity <span class="caret caret_filter"></span> </div>
							<ul id="filter_county" class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_county">
								<li role="presentation" data-value="all" data-value2="all">States</li>
								<li role="presentation" data-value="nevada" data-value2="nevada">Nevada</li>
							</ul>
						</div>
						<!-- <div class="dropdown listing_filter_select filter_city">
							<div data-toggle="dropdown" id="a_filter_cities" class="filter_menu_trigger" data-value="Cities"> Cities <span class="caret caret_filter"></span> </div>
							<ul id="filter_city" class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_cities">
								<li role="presentation" data-value="all" data-value2="all">Cities</li>
								<li role="presentation" data-value="las-vegas" data-value2="las-vegas" data-parentcounty="nevada">Las Vegas</li>
							</ul>
						</div> -->
						<!-- <div class="dropdown listing_filter_select filter_area">
							<div data-toggle="dropdown" id="a_filter_areas" class="filter_menu_trigger" data-value="Areas">Areas<span class="caret caret_filter"></span> </div>
							<ul id="filter_area" class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_areas">
								<li role="presentation" data-value="all">Areas</li>
								<li role="presentation" data-value="downtown" data-parentcity="las-vegas">Downtown</li>
								<li role="presentation" data-value="downtown-east" data-parentcity="las-vegas">Downtown East</li>
								<li role="presentation" data-value="meadows-village" data-parentcity="las-vegas">Meadows Village</li>
								<li role="presentation" data-value="the-strip" data-parentcity="las-vegas">The Strip</li>
								<li role="presentation" data-value="winchester" data-parentcity="las-vegas">Winchester</li>
							</ul>
						</div> -->
						<!-- <div class="dropdown listing_filter_select order_filter ">
							<div data-toggle="dropdown" id="a_filter_order" class="filter_menu_trigger" data-value="1"> Price High to Low <span class="caret caret_filter"></span> </div>
							<ul id="filter_order" class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_order">
								<li role="presentation" data-value="1">Price High to Low</li>
								<li role="presentation" data-value="2">Price Low to High</li>
								<li role="presentation" data-value="3">Newest first</li>
								<li role="presentation" data-value="4">Oldest first</li>
								<li role="presentation" data-value="11">Newest Edited</li>
								<li role="presentation" data-value="12">Oldest Edited </li>
								<li role="presentation" data-value="5">Bedrooms High to Low</li>
								<li role="presentation" data-value="6">Bedrooms Low to high</li>
								<li role="presentation" data-value="7">Bathrooms High to Low</li>
								<li role="presentation" data-value="8">Bathrooms Low to high</li>
								<li role="presentation" data-value="0">Default</li>
							</ul>
						</div> -->
<!-- 
							<div class=" elemenentor_submit_wrapper elementor-field-group form-group  form_field_show_labels_true  elementor-column elementor-col-25">
																					<button  name="submit" type="submit" class="wpresidence_button  search_button_use_hover_effect_no" value="Search">
																						
																						<a style="text-decoration:none;color:white;" href="leasing.php">	Search</a>
																					</button>
																				</div> -->
						<!-- <div class="listing_filter_select listing_filter_views grid_filter_wiew">
							<div id="grid_view" class="icon_selected">
								<i class="fas fa-th"></i>
							</div>
						</div>
						<div class="listing_filter_select listing_filter_views list_filter_wiew">
							<div id="list_view" class="">
								<i class="fas fa-bars"></i>
							</div>
						</div> -->
						<div data-toggle="dropdown" id="a_filter_county" class="" data-value="States"></div>
						<div style="margin-top:10px;" class=" elemenentor_submit_wrapper elementor-field-group form_field_show_labels_true  elementor-column elementor-col-10"  >
						<button style="margin-left:50px ;border-radius:15px;"  name="submit" type="submit" class="wpresidence_button  search_button_use_hover_effect_no" value="Search">
						
						<i class="fas fa-search"></i>									
					
							
						search</button>
						</div>
						
					</div>
				
					<div class="spinner" id="listing_loader">
						<div class="new_prelader"></div>
					</div>
					<div id="listing_ajax_container" class="">

						<?php
						// $sql = $link->rawQuery("select * from leasing_master where isDeleted=0 and FK_Status=8 ");

						foreach ($exce_for_pagination as $lease) {

						?>
							<div class="col-md-4 listing_wrapper" data-modal-title="<?php echo $lease['Lease_Name'] ?>" data-modal-link="" data-listid="139">
								<div class="property_listing  property_card_default" data-link="">
									<div class="listing-unit-img-wrapper">
										<div class="prop_new_details">
											<div class="prop_new_details_back"></div>
											<div class="property_media">
												<i class="fas fa-video"></i>
												<i class="fas fa-camera"></i> 6
											</div>
											<div class="property_location_image">
												<span class="property_marker"></span><a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>">Downtown</a>, <a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" rel="tag">Las Vegas</a>
											</div>
											<div class="featured_gradient"></div>
										</div>
										<a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" target="_self"><img style="width:525px ;height:328px" src="<?php echo $lease['Images'] ?>" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-525x328.jpg" /></a>
										<div class="tag-wrapper">
											<div class="featured_div">Featured</div>
											<div class="status-wrapper">
												<div class="action_tag_wrapper Sales ">Sales</div>
											</div>
										</div>
									</div>
									<div class="property-unit-information-wrapper">
										<h4>
											<a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>">
												<?php echo $lease['Lease_Name']; ?></a>
										</h4>
										<div class="listing_unit_price_wrapper">
											<?php echo $lease['Price'] ?> <span class="price_label"></span>
										</div>
										<div class="listing_details the_grid_view">
											<?php echo $lease['ShortDescription'] ?><a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" class="unit_more_x"> ...</a>
										</div>
										<div class="listing_details the_list_view">
											<?php echo $lease['ShortDescription'] ?> <a href=estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" class="unit_more_x"> ...</a>
										</div>
										<div class="property_listing_details">
											<span class="inforoom">
												<svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
												</svg>
												5
											</span>
											<span class="infobath">
												<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
												</svg>
												3
											</span>
											<span class="infosize">
												<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
												</svg>
												<?php echo $lease["CarpetArea"]; ?>ft<sup>2</sup>
											</span>
										</div>
									</div>
								</div>
							</div>

						<?php
						}
						?>
					</div>

					<ul class="pagination pagination_nojax">

						<style>
							#hover:hover {
								cursor: pointer;
							}
						</style>

						<?php

						for ($i = 1; $i <= $no_of_pages; $i++) {
						?>

										<li class="<?php if ($Pageid == $i) echo 'active'; ?>"> <a id="hover" href="leasing.php?page_id=<?php echo $i; ?>&query=<?php echo $query1; ?>&count=<?php echo $Total_no_of_lease_available; ?>"><?php echo $i; ?></a>
								<li>
							<?php } ?>



					</ul>
					<div class="single-content"></div>
				</div>
				<div class="clearfix visible-xs"></div>
				<!-- <div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary">
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
								<input type="hidden" id="wpestate_change_currency" value="3406526ee8" />
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
								<input type="hidden" id="wpestate_change_measure" value="4eb37b4917" />
							</li>
							<li id="advanced_search_widget-1" class="widget-container advanced_search_sidebar boxed_widget">
								<h3 class="widget-title-sidebar">Advanced Search</h3>
								<form role="search" method="get" action="https://lasvegas.wpresidence.net/advanced-search/">
									<input type="hidden" id="wpestate_regular_search_nonce" name="wpestate_regular_search_nonce" value="9f03c42894" /><input type="hidden" name="_wp_http_referer" value="/properties-standard-list/" /><input type="text" id="sidebar-adv_location_" class="form-control adv_locations_search" name="adv_location" placeholder="Enter an address, state, city, area or zip code" value="">
									<script data-cfasync="false" src="https://lasvegas.wpresidence.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
									<script type="text/javascript">
										//<![CDATA[
										jQuery(document).ready(function() {
											var availableTags = ["Las Vegas", "Downtown", "The Strip", "Meadows Village", "Downtown East", "Winchester", "Nevada", ];
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
									jQuery(document).ready(function() {
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
				</div> -->
			</div>
		</div>
	</div>
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
									<p class="widget_contact_email"><i class="far fa-envelope"></i><a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#f29d94949b9197b28097939e978186938697dc919d9f"><span class="__cf_email__" data-cfemail="2b444d4d42484e6b594e4a474e585f4a5f4e05484446">[email&#160;protected]</span></a></p>
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
						<div class="subfooter_menu">
							<div class="menu-footer-container">
								<ul id="menu-footer" class="menu">
									<li id="menu-item-18488" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18488"><a href="https://lasvegas.wpresidence.net/privacy-policy-2/">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer> -->
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
						<input type="hidden" id="security-login-topbar" name="security-login-topbar" value="88414e5d9b-1651909919">
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
						<input type="hidden" id="security-register-topbar" name="security-register-topbar" value="a62b77865f-1651909919">
						<button class="wpresidence_button" id="wp-submit-register_topbar">Register</button>
					</div>
					<div class="login_form" id="forgot-pass-div">
						<div id="forgot-div-title-topbar">Reset Password</div>
						<div class="loginalert" id="forgot_pass_area_topbar"></div>
						<div class="loginrow">
							<input type="email" class="form-control" name="forgot_email" id="forgot_email_topbar" autofocus placeholder="Enter Your Email Address" size="20" />
						</div>
						<input type="hidden" id="security-forgot-topbar" name="security-forgot-topbar" value="ca8a95e1fd" /><input type="hidden" name="_wp_http_referer" value="/properties-standard-list/" /> <input type="hidden" id="postid" value="
							93">
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
		<input type="hidden" id="wpestate_ajax_log_reg" value="4c7346dc3c" /> <a href="#" class="backtop "><i class="fas fa-chevron-up"></i></a>
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
				<input type="hidden" name="contact_footer_ajax_nonce" id="contact_footer_ajax_nonce" value="8d9aff42fb" />
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
		<input type="hidden" id="wpestate_ajax_filtering" value="0db190ff74" /> <input type="hidden" id="wpestate_payments_nonce" value="eb25b5dd0e" /> <script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.1' id='jquery-ui-mouse-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/draggable.min.js?ver=1.13.1' id='jquery-ui-draggable-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/jquery/ui/menu.min.js?ver=1.13.1' id='jquery-ui-menu-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/dom-ready.min.js?ver=ecda74de0221e1c2ce5c57cbb5af09d5' id='wp-dom-ready-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/i18n.min.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
		<script type='text/javascript' id='wp-i18n-js-after'>
			wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
		</script>
		<script type='text/javascript' id='wp-a11y-js-translations'>
			( function( domain, translations ) {
				var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
				localeData[""].domain = domain;
				wp.i18n.setLocaleData( localeData, domain );
			} )( "default", { "locale_data": { "messages": { "": {} } } } );
		</script>
		<script type='text/javascript' src='https://las-vegas.b-cdn.net/wp-includes/js/dist/a11y.min.js?ver=68e470cf840f69530e9db3be229ad4b6' id='wp-a11y-js'></script>
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
			var mapfunctions_vars = {"path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/css\/css-images","pin_images":"{\"rentals\":\"\",\"sales\":\"\",\"apartments\":\"\",\"condos\":\"\",\"duplexes\":\"\",\"houses\":\"\",\"villas\":\"\",\"apartmentsrentals\":\"\",\"condosrentals\":\"\",\"duplexesrentals\":\"\",\"housesrentals\":\"\",\"villasrentals\":\"\",\"apartmentssales\":\"\",\"condossales\":\"\",\"duplexessales\":\"\",\"housessales\":\"\",\"villassales\":\"\",\"idxpin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/sale.png\",\"single_pin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/single.png\",\"cloud_pin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/cloud.png\",\"userpin\":\"https:\\\/\\\/lasvegas.wpresidence.net\\\/wp-content\\\/themes\\\/wpresidence\\\/css\\\/css-images\\\/userpin.png\"}","geolocation_radius":"1000","adv_search":"1","in_text":" in ","zoom_cluster":"15","user_cluster":"yes","open_close_status":"0","open_height":"550","closed_height":"450","generated_pins":"1","geo_no_pos":"The browser couldn't detect your position!","geo_no_brow":"Geolocation is not supported by this browser.","geo_message":"m radius","show_adv_search":"","custom_search":"yes","listing_map":"internal","slugs":["adv_location","bedrooms","rooms","adv_categ","adv_actions","min-property-size","property_price"],"hows":["like","greater","greater","like","like","greater","greater"],"measure_sys":"ft","close_map":"close map","show_g_search_status":"no","slider_price":"yes","slider_price_position":"7","adv_search_type":"1","is_half":"0","map_style":"[\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"weight\": \"2.00\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"geometry.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#9c9c9c\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"all\",\r\n        \"elementType\": \"labels.text\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.man_made\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#eeeeee\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#7b7b7b\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"labels.text.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#46bcec\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"geometry.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c8d7d4\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#070707\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"labels.text.stroke\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ffffff\"\r\n            }\r\n        ]\r\n    }\r\n]","shortcode_map_style":"","small_slider_t":"","is_prop_list":"1","is_tax":"0","half_no_results":"No results found!","fields_no":"7","type":"ROADMAP","useprice":"yes","use_price_pins_full_price":"no","use_single_image_pin":"no","loading_results":"loading results...","geolocation_type":"2","is_half_map_list":"0","is_normal_map_list":"1","is_adv_search":"0","ba":"BA","bd":"BD"};
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
			var googlecode_regular_vars = {"general_latitude":"40.43342740570791","general_longitude":"-3.6857248215705933","path":"https:\/\/lasvegas.wpresidence.net\/wp-content\/themes\/wpresidence\/css\/css-images","markers":"[]","idx_status":"0","page_custom_zoom":"10","generated_pins":"1","type":"ROADMAP","is_adv_search":"0","is_half_map_list":"0","is_normal_map_list":"1"};
			var googlecode_regular_vars2 = {"markers2":"[[\"Villa%20with%20Amazing%20View\",36.1475818442140024444597656838595867156982421875,-115.1168061226999981272456352598965167999267578125,2,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E5.500.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"sales\",\"villassales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fvilla-with-amazing-panoramic-view%2F\",139,5500000,\"5\",\"3\",\"250 ft<sup>2<\\\/sup>\",\"Villas\",\"Sales\",\"5.5M%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Fhouse8-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Apartment%20with%20Ocean%20View\",36.144428191866751376437605358660221099853515625,-115.1173210478079482754765194840729236602783203125,3,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-120x120.jpeg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-120x120.jpeg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-150x150.jpeg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-45x45.jpeg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-36x36.jpeg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E1.500.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"sales\",\"villassales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-with-ocean-view%2F\",154,1500000,\"2\",\"2\",\"700 ft<sup>2<\\\/sup>\",\"Villas\",\"Sales\",\"1.5M%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Finterior_yellow_chair-copy-1-105x70.jpeg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Gorgeous%20Condo%20in%20Las%20Vegas\",36.15693790015105690827112994156777858734130859375,-115.11908056017631452050409279763698577880859375,4,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E1.000.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"apartments\",\"rentals\",\"apartmentsrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-condo-in-las-vegas%2F\",72,1000000,\"5\",\"2.5\",\"5,600 ft<sup>2<\\\/sup>\",\"Apartments\",\"Rentals\",\"1M%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"2%20Rooms%20Apartment%20for%20Rent\",36.15970974664639214779526810161769390106201171875,-115.1089525222778462421047152020037174224853515625,5,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E775.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"apartments\",\"sales\",\"apartmentssales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2F2-rooms-apartment-for-rent%2F\",19371,775000,\"5\",\"6\",\"190 ft<sup>2<\\\/sup>\",\"Apartments\",\"Sales\",\"775K%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2F8-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Gorgeous%20Studio%20for%20Rent\",36.1605066648649398075576755218207836151123046875,-115.1090383529663228046047152020037174224853515625,6,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E770.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"houses\",\"sales\",\"housessales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-studio-for-rent%2F\",59,770000,\"5\",\"6\",\"190 ft<sup>2<\\\/sup>\",\"Houses\",\"Sales\",\"770K%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Townhouse%20for%20Sale\",36.16054590382599798203955288045108318328857421875,-115.0752978395999974736696458421647548675537109375,7,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E210.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"sales\",\"villassales\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ftownhouse-for-sale%2F\",132,210000,\"3\",\"2\",\"150 ft<sup>2<\\\/sup>\",\"Villas\",\"Sales\",\"210K%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Modern%20Penthouse%20Apartment\",36.15700523196900206812642863951623439788818359375,-115.1123080076649927150356234051287174224853515625,8,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E2.000%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"duplexes\",\"rentals\",\"duplexesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fmodern-penthouse-apartment%2F\",145,2000,\"2\",\"2.5\",\"250 ft<sup>2<\\\/sup>\",\"Duplexes\",\"Rentals\",\"2000%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F11%2Fhome2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"],[\"Luxury%20Villa%20for%20Sale\",36.15666059345699778759808395989239215850830078125,-115.1178359985400021514578838832676410675048828125,9,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3Efrom%3C%2Fspan%3E2.000%20%24%3Cspan%20class%3D%22infocur%22%3E%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fluxury-villa-for-sale%2F\",127,2000,\"1\",\"1\",\"400 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"2000%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1024x683.jpg%201024w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1536x1024.jpg%201536w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2.jpg%201920w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Modern%20Condo%20for%20Rent\",36.157292393442702405081945471465587615966796875,-115.1103777601383768569576204754412174224853515625,10,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E1.600%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"duplexes\",\"rentals\",\"duplexesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fmodern-condo-for-rent-2%2F\",150,1600,\"3\",\"2\",\"150 ft<sup>2<\\\/sup>\",\"Duplexes\",\"Rentals\",\"1600%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1024x683.jpg%201024w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2-1536x1024.jpg%201536w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fblue_couch-2.jpg%201920w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Family%20Home%20for%20Sale\",36.14716587982439932602574117481708526611328125,-115.0591278076172017108547152020037174224853515625,11,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E800%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"houses\",\"rentals\",\"housesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ffamily-home-for-sale%2F\",160,800,\"2\",\"4\",\"500 ft<sup>2<\\\/sup>\",\"Houses\",\"Rentals\",\"800%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2014%2F05%2Finterior3-5.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Apartment%20Space%20for%20Rent\",36.16241230601900014107741299085319042205810546875,-115.1001977920499967922296491451561450958251953125,12,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E800%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fapartment-space-for-rent%2F\",19365,800,\"2\",\"4\",\"500 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"800%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior38.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Awesome%20Family%20Apartment\",36.16449113444699747788035892881453037261962890625,-115.1235437393199987354819313623011112213134765625,13,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E550%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"houses\",\"rentals\",\"housesrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fawesome-family-apartment%2F\",19386,550,\"3\",\"2.5\",\"1,300 ft<sup>2<\\\/sup>\",\"Houses\",\"Rentals\",\"550%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F10%2Finterior35.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Gorgeous%20Studio%20for%20Rent\",36.07936246958423254227454890497028827667236328125,-115.104618072509765625,14,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E500%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20month%3C%2Fspan%3E\",\"condos\",\"rentals\",\"condosrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Fgorgeous-studio-for-rent-2%2F\",31,500,\"3\",\"2.5\",\"1,300 ft<sup>2<\\\/sup>\",\"Condos\",\"Rentals\",\"500%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-105x70.jpg%20105w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-300x200.jpg%20300w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47-768x512.jpg%20768w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior47.jpg%20800w%22%20sizes%3D%22%28max-width%3A%20105px%29%20100vw%2C%20105px%22%20%2F%3E\"],[\"Townhouse%20for%20Rent\",36.188740058983711378459702245891094207763671875,-115.1177501678466938983547152020037174224853515625,15,\"%3Cimg%20width%3D%22120%22%20height%3D%22120%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-120x120.jpg%22%20class%3D%22attachment-agent_picture_thumb%20size-agent_picture_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20srcset%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-120x120.jpg%20120w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-150x150.jpg%20150w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-800x790.jpg%20800w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-45x45.jpg%2045w%2C%20https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-36x36.jpg%2036w%22%20sizes%3D%22%28max-width%3A%20120px%29%20100vw%2C%20120px%22%20%2F%3E\",\"%3Cspan%20class%3D%22infocur%20infocur_first%22%3E%3C%2Fspan%3E100%20%24%3Cspan%20class%3D%22infocur%22%3E%2F%20sq.%20ft.%3C%2Fspan%3E\",\"villas\",\"rentals\",\"villasrentals\",\"https%3A%2F%2Flasvegas.wpresidence.net%2Festate_property%2Ftownhouse-for-rent-2%2F\",111,100,\"2\",\"5\",\"29,000 ft<sup>2<\\\/sup>\",\"Villas\",\"Rentals\",\"100%20%24\",\"%3Cimg%20width%3D%22105%22%20height%3D%2270%22%20src%3D%22https%3A%2F%2Flasvegas.wpresidence.net%2Fwp-content%2Fuploads%2F2021%2F09%2Finterior-4-105x70.jpg%22%20class%3D%22attachment-widget_thumb%20size-widget_thumb%20wp-post-image%22%20alt%3D%22%22%20loading%3D%22lazy%22%20%2F%3E\"]]"};
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