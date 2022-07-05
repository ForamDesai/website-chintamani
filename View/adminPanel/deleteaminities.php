<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
		
		$id=$_REQUEST['pid'];
		$link->where('PK_amenities',$id);
		$a=$link->update("amenities_master",array("isDeleted"=>1));
		if($a)
		{		
			
			$link->where('FK_amenities',$id);
			$a1=$link->update("lease_amenities",array("isDeleted"=>1));
			if($a1)
			{
				header('location:../aminities.php');
			}
		}
		
?>