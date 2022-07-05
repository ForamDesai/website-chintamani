<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
	$id = $_POST['pid'];
	$amenity_name=$_POST['amenity_name'];

    $ad = $link->where('PK_amenities',$id);
	$link->update("amenities_master", array("amenity_name"=>$amenity_name));
	if($link->count>0)
	{
		header('location:aminities.php');
	}
	
?>