<?php
	include 'MysqliDb.php';
	
    $link=new MysqliDb("localhost","root","","chintamani_db");
	$con = mysqli_connect('localhost','root','','chintamani_db');
	
	ini_set('POST_MAX_SIZE','64M');
	ini_set('UPLOAD_MAX_FILESIZE','64M');
	$project_name="Chhintamani";
	
/*	$mode=$link->rawQueryOne("select mode from admin");
	
	//Theme Setup
	 $mode=$mode['mode'];
	 $primary_color = "#000";
	 $secondary_color = "#555555";
	 
	 if($mode == 0)
	 {
		 $table_font_color = "#6c757d";
		 $theme_color= "#fff";
		 $font_color = "#000";
		 $background_theme_color= "#f9f9f9"; 
		 $menu_color="#000";
	 }
	 else
	 {
		 if($primary_color == "#000")
		 {
			$primary_color = "#fff";		 
		 }
		 $table_font_color = "#ffffff";
		 $theme_color= "#222";
		 $font_color = "#ffffff";
		  if($primary_color == "#000")
		 {
			 $font_color = "#000";	 
		 }
		 $background_theme_color= "#333"; 
		 $menu_color="#fff";
	 }
	
//      $site_url="https://accreteit.com/chariot_new/";
//	    $site_url="http://localhost/chariot/";
        $site_url="https://chariotcoffee.com/";
	$project_logo=$site_url."images/logo.png";
	
	$control=$link->rawQueryOne("select * from inventory_control");
	$warning=$control['inventory_control_warning'];
	$danger=$control['inventory_control_danger'];
	$page_name= basename($_SERVER['PHP_SELF']);
	$per_page =30;
	//define how many products for a page

	$adv=$link->rawQueryone("select * from advanced_details");
	if($link->count>0)
	{
			$product_discount_flag=$adv['product_discount_flag'];
			$combo_discount_flag = $adv['combo_discount_flag'];
			$advance_id=$adv['advance_id'];
			$discount_per=$adv['discount_per'];
			$cdiscount_per=$adv['cdiscount_per'];
			$shipping_cost=$adv['shipping_cost'];
			$cod_cost=$adv['cod_cost'];
			$channel_id=$adv['channel_id'];
			$pickup_location=$adv['pickup_location'];
			$length=$adv['length'];
			$breadth=$adv['breadth'];
			$height=$adv['height'];
			$weight=$adv['weight'];
			$coupon_bar=$adv['coupon_bar'];
			$coupon_bar_contain=$adv['coupon_bar_contain'];
 	}
	$shipping_charges=$shipping_cost;
	$discount=$discount_per/100;
	$cdiscount=$cdiscount_per/100;
	$min_shipping=499;
	$company_name="Chariot";
	//Email Config
    $host_name="mail.chariotcoffee.com";
	$port="587";
	$email_username="info@chariotcoffee.com";
	$email_password="Kem_6o??";
	$team_name="Chariot Coffee Team";
	$send_address="info@chariotnewyork.com";
	
 	//Payment Getway API 
 	//Live Api
	//$payment_getway_api="rzp_live_KvG8s7CqJKwmYt";
	//Test APi
// 	$payment_getway_api="rzp_test_tQeGy4dRWpwUYl";
	
// 	$company_name="Chariot";
// 	$company_description="";


    // Social Media Login
    //$google_id="346297561465-9hkflviu6cc2n2cqspbuj0cd4a4gdp01.apps.googleusercontent.com";
    //$fb_id="1410474646004924"; */
?>